<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function uploadFile(Request $request){
        if ($request->hasFile('upload')) {
            $file = $request->file('upload');

            $type = $request->query('type', 'files');
            $folder = $type === 'image' ? 'images' : 'files';
            $path = $file->store($folder, 'public');
            $url = Storage::url($path);

            return response()->json([
                'uploaded' => true,
                'url' => $url
            ]);
        }

        return response()->json(['uploaded' => false]);
    }
}
