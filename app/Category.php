<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'url';
    }

    public function storePhotoPath($file)
    {
        $save_path = 'storage/'.substr($file->store('public/upload/categories'), 7);
        $this->photo_path = $save_path;
        $this->save();
        return $save_path;
    }

    public function restorePhotoPath($file)
    {
        Storage::delete('public'.substr($this->photo_path, 7));
        $save_path = 'storage/'.substr($file->store('public/upload/categories'), 7);
        $this->photo_path = $save_path;
        $this->save();
        return $save_path;
    }

    public function deletePhotoPath()
    {
        Storage::delete('public'.substr($this->photo_path, 7));
    }
}
