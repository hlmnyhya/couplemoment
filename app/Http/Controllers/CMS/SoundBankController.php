<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SoundBank;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use getID3;


class SoundBankController extends Controller
{
    public function index()
    {
        $soundBanks = SoundBank::all();
        return view('admin.sound-bank-pages.index', compact('soundBanks'));
    }

    public function create()
    {
    return view('admin.sound-bank-pages.create');
    }

public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'singer' => 'required',
        'file_mp3' => 'required|mimes:mp3',
    ]);

    $soundBank = new SoundBank;
    $soundBank->title = $request->title;
    $soundBank->singer = $request->singer;

    if ($request->hasFile('file_mp3')) {
        $file = $request->file('file_mp3');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('audio'), $fileName);
        $soundBank->file_mp3 = 'audio/' . $fileName;

        // Get the duration using getID3
        $getID3 = new getID3;
        $fileInfo = $getID3->analyze(public_path($soundBank->file_mp3));
        $duration = $fileInfo['playtime_seconds'];

        // Format the duration (you can customize the format)
        $formattedDuration = gmdate("i:s", $duration);

        $soundBank->duration = $formattedDuration;
    }

    $soundBank->save();

    return redirect()->route('soundbank.index')->with('success', 'Sound bank created successfully.');
}



public function edit($id)
{
    $soundBank = SoundBank::findOrFail($id);
    return view('admin.sound-bank-pages.edit', compact('soundBank'));
}

public function update(Request $request, $id)
{
    $soundBank = SoundBank::findOrFail($id);
    
    $rules = $request->validate([
        'title' => 'required',
        'singer' => 'required',
        'duration' => 'required',
        'file_mp3' => 'nullable|mimes:mp3',
    ]);

        if ($request->hasFile('file_mp3')) {
            $rules['file_mp3'] = 'required|mimes:mp3';
        }
    
        if ($request->hasFile('file_mp3')) {
            // Hapus gambar lama jika ada
            if ($soundBank->file_mp3) {
                Storage::disk('public')->delete($soundBank->file_mp3);
            }
            $audioPath = $request->file('file_mp3')->store('audio', 'public');
            $soundBank->file_mp3 = $audioPath;
        }
    
        $soundBank->title = $request->input('title');
        $soundBank->singer = $request->input('singer');
        $soundBank->duration = $request->input('duration');
    
        $soundBank->save();
    

    return redirect()->route('soundbank.index')->with('success', 'Sound bank updated successfully.');
}



    public function destroy($id)
    {
        $soundBank = SoundBank::findOrFail($id);

        if ($soundBank->file_mp3) {
            Storage::disk('public')->delete($soundBank->file_mp3);
        }

        $soundBank->delete();

        return redirect()->route('soundbank.index')->with('success', 'Sound bank deleted successfully.');    
    }

}

