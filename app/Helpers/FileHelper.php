<?php

namespace App\Helpers;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileHelper
{
    /**
     * @param string $uploadedFile
     */
    public function setAvatar(UploadedFile $uploadedFile) {
        try {
            $path = public_path('upload/avatars');
            if(!is_dir($path)){
                mkdir($path);
            }
            $avatar = $uploadedFile->move($path, uniqid(time()) . '.' . $uploadedFile->getClientOriginalExtension());
            $img = new Imagick($avatar->getRealPath());
            $img->cropThumbnailImage(100, 100);
            $img->writeImage($avatar->getRealPath());
            $this->avatar = '/upload/avatars/' . $avatar->getBasename();
        }
        catch(Exception $e){
            Log::alert("AVATAR");
            Log::alert($e);
        }
    }

    /**
     * @param string $filename
     * @param string|null $newName
     */
    public function setFile($filename, $newName = null) {
        $file = new File($filename);
        if (!$newName) {
            $newName = $file->getBasename();
        }
        $newFilename = $this->getDirectory() . '/' . uniqid(time()) . '_' . $newName;
        touch($newFilename);
        $newFile = new File($newFilename);
        $fs = new Filesystem();
        $fs->copy($file->getRealPath(), $newFile->getRealPath());
        $this->setFilePath($newFile->getRealPath());
    }

    /**
     * @param string $data
     * @param string $name
     */
    public function setFileData($data, $name) {
        $tmp = tempnam(sys_get_temp_dir(), $name);
        $data = explode(',', $data);
        file_put_contents($tmp, base64_decode($data[1]));
        $this->setFile($tmp, $name);
    }

}

