<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Image;
use Intervention\Image\Facades\Image as InterventionImage;

class GalleryController extends Controller
{
    public function create()
    {
        return view('admin/galeeryCreate');    
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:5120', // max 5MB
        ]);

        $gallery = Gallery::create(['name' => $request->name]);
        $galleryPath = public_path('uploads/gallery');

        if (!file_exists($galleryPath)) {
            mkdir($galleryPath, 0777, true); // Recursively create the folder
        }

        foreach ($request->file('images') as $img) {
            $filename = uniqid() . '.' . $img->getClientOriginalExtension();
            //$path = public_path('uploads/gallery/' . $filename);

            // Compress & Resize Image
            InterventionImage::make($img)
                ->resize(1200, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->encode('webp', 75)
                ->save($galleryPath . '/' . $filename);

            Image::create([
                'gallery_id' => $gallery->id,
                'image_path' => 'uploads/gallery/' . $gallery->id . '/' . $filename,
            ]);
        }

        return redirect()->back()->with('success', 'Gallery created successfully!');
    }
}
