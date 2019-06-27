<?php

namespace App\Traits;

use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

/**
 * Upload da imagem
 * Criação/Exclusão de diretório
 **/
class ImageFile
{
    /**
     * Upload da imagem
     * Recebe como parametro o diretório, ID, nome do arquivo em MD5 e o arquivo de imagem
     * Checa com a função pathExist
     * Salva a imagem no local passado por parametro
     */
    public function uploadImage($path, $folder_id, $filename, $image)
    {
        $this->pathExist($path, $folder_id);

        $local = $path . $folder_id . '/';

        $imageMake = Image::make($image);

        $imageMake->save($local . $filename);
    }

    /**
     * Deleta somente uma imagem
     * Recebe o diretório e nome do arquivo como parametro
     */
    public function removeImage($path, $folder_id, $filename)
    {
        if (File::exists($path . $folder_id . '/' . $filename)) {
            //File::deleteDirectory($path . $folder_id . '/' . $filename);
            unlink($path . $folder_id . '/' . $filename);
        }
    }

    /**
     * Delete o diretório e todo conteudo dentro
     */
    public function removeDirectory($path, $folder_id)
    {
        if (File::exists($path . $folder_id)) {
            File::deleteDirectory($path . $folder_id);
            //unlink($path . $folder_id);
        }
    }

    /**
     * Checa se o diretório existe, caso contrário o cria com nome do ID
     */
    public function pathExist($path, $folder_id)
    {
        $path = $path . $folder_id . '/';

        if (!file_exists($path) && !is_dir($path)) {
            mkdir($path, 0777, true);
        }
    }
}
