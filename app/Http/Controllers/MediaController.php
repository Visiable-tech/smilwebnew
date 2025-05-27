<?php

// app/Http/Controllers/MediaController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;

class MediaController extends Controller
{
    public function index()
    {
        $media = Media::latest()->paginate(20);
        return view('admin/media', compact('media'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:2048',
        ]);

        $file = $request->file('file');
        $destinationPath = public_path('uploads/media');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move($destinationPath, $fileName);

        $media = Media::create([
            'file_name' => $fileName,
            'file_path' => 'uploads/media/' . $fileName,
            'file_type' => $file->getClientMimeType(),
            'file_size' => $file->getSize() / 1024,
        ]);

        return back()->with('success', 'File uploaded successfully!');
    }

    public function delete($id)
    {
        $media = Media::findOrFail($id);
        $file_path = public_path($media->file_path);
        if (file_exists($file_path)) {
            unlink($file_path);
        }
        $media->delete();

        return back()->with('success', 'File deleted successfully!');
    }
}


