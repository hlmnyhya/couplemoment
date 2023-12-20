<?php

namespace App\Imports;

use App\Models\GuestBook;
use Maatwebsite\Excel\Concerns\ToModel;
use Cviebrock\EloquentSluggable\Services\SlugService;

class GuestImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $guest = new GuestBook([
            'guest_name' => $row[0],
            'phone' => $row[1],
        ]);

        $guest->save();

        $guest->url = '/guestbook/' . SlugService::createSlug(GuestBook::class, 'url', $row[0]);

        return $guest;
    }
}
