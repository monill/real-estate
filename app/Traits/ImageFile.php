<?php

namespace App\Traits;

use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class ImageFile
{
    public function uploadImage($path, $id, $filename, $image)
    {
        $this->pathExist($path, $id);

        $local = $path . $id . '/';

        $imageMake = Image::make($image);

        $imageMake->save($local . $filename);
    }

    public function removeImage($path, $id, $filename)
    {
        return File::delete($path . $id . '/' . $filename);
    }

    public function removeDirectory($path, $id)
    {
        return File::delete($path . $id);
    }

    public function pathExist($path, $id)
    {
        $path = $path . $id . '/';

        if (!file_exists($path) && !is_dir($path)) {
            mkdir($path, 0777, true);
        }
    }
}