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
<<<<<<< HEAD
    return view('admin.sound-bank-pages.create');
=======
        return view('admin.sound-bank-pages.create');
>>>>>>> 6046cce4b268caee4da34dfe670fa94f3793067b
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

            $getID3 = new getID3;
            $fileInfo = $getID3->analyze(public_path($soundBank->file_mp3));
            $duration = $fileInfo['playtime_seconds'];

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

        $request->validate([
            'title' => 'required',
            'singer' => 'required',
            'file_mp3' => 'nullable|mimes:mp3',
        ]);

        // Handle file upload only if a new file is provided
        if ($request->hasFile('file_mp3')) {
            // Delete the old file if it exists
            if ($soundBank->file_mp3) {
                Storage::disk('public')->delete($soundBank->file_mp3);
            }

            // Move the new file to the 'audio' directory
            $file = $request->file('file_mp3');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('audio'), $fileName);

            // Update file_mp3 and duration in the SoundBank model
            $soundBank->file_mp3 = 'audio/' . $fileName;
            $getID3 = new getID3;
            $fileInfo = $getID3->analyze(public_path($soundBank->file_mp3));
            $duration = $fileInfo['playtime_seconds'];
            $formattedDuration = gmdate("i:s", $duration);
            $soundBank->duration = $formattedDuration;
        }

        // Update other fields in the SoundBank model
        $soundBank->title = $request->input('title');
        $soundBank->singer = $request->input('singer');

        // Save the changes to the database
        $soundBank->save();

        // Redirect to the index page with a success message
        return redirect()->route('soundbank.index')->with('success', 'Sound bank updated successfully.');
    }


    public function destroy($id)
    {
        $soundBank = SoundBank::findOrFail($id);

        if ($soundBank->file_mp3) {
            Storage::disk('public')->delete($soundBank->file_mp3);
        }

        $soundBank->delete();

<<<<<<< HEAD
        return redirect()->route('soundbank.index')->with('success', 'Sound bank deleted successfully.');    
    }

}
=======
        return redirect()->route('soundbank.index')->with('success', 'Sound bank deleted successfully.');
    }
}
>>>>>>> 6046cce4b268caee4da34dfe670fa94f3793067b
