<?php

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

if (!function_exists('handaleFileUpload')) {
    /**
     * Handle file upload.
     *
     * @param UploadedFile $file
     * @param string $folder
     * @return string
     */
    function handaleFileUpload(UploadedFile $file, $folder = 'default')
    {
        if (!$file->isValid()) {
            abort(422, 'Invalid file');
        }

        $extension = $file->getClientOriginalExtension();
        $folderType = in_array($extension, ['jpg', 'jpeg', 'png', 'gif']) ? 'images' : 'files';

        $path = Storage::disk('public')->put("$folderType/$folder", $file);

        if (!$path) {
            abort(500, 'Error occurred while moving the file');
        }

        // Return only the file path as a string
        return $path;
    }
}

if (!function_exists('handleFileUpdate')) {
    /**
     * Handle file upload and deletion of old files.
     *
     * @param \Illuminate\Http\Request $request
     * @param string $fileKey
     * @param \Illuminate\Database\Eloquent\Model $model
     * @param string $directory
     * @return string|null
     */
    function handleFileUpdate($request, $fileKey, $model, $directory)
    {
        if ($request->hasFile($fileKey)) {
            $oldFilePath = $model->$fileKey;
            if ($oldFilePath && File::exists(storage_path('app/public/' . $oldFilePath))) {
                File::delete(storage_path('app/public/' . $oldFilePath));
            }
            return handaleFileUpload($request->file($fileKey), $directory);
        }
        return $model->$fileKey;
    }
}

if (!function_exists('noImage')) {
    function noImage()
    {
        return 'https://static.vecteezy.com/system/resources/thumbnails/004/141/669/small/no-photo-or-blank-image-icon-loading-images-or-missing-image-mark-image-not-available-or-image-coming-soon-sign-simple-nature-silhouette-in-frame-isolated-illustration-vector.jpg';
    }
}
