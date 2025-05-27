<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostMetaElement;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    public function index(){
        return view('admin/Page');
    }

    public function store(Request $request)
    {
        $request->validate([
            'post_type'    => 'required|string',
            'title'        => 'required|string',
            'slug'         => 'required|string',
        ]);

        // Upload main image
        $path = public_path('uploads/posts');

        if (!File::exists($path)) {
            File::makeDirectory($path, 0777, true, true); // 4th param = recursive
        }

        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::random(20) . '.' . $image->getClientOriginalExtension();
            $image->move($path, $imageName);
            $imagePath = 'uploads/posts/' . $imageName;
        }
    
        // Save post
        $post = Post::create([
            'user_id'       => $request->input('user_id', 1),
            'post_type'     => $request->post_type,
            'slug'          => $request->slug,
            'title'         => $request->title,
            'content'       => $request->input('content'),
            'expert'        => $request->input('expert'),
            'image'         => $imagePath,
            'image_alt'     => $request->input('image_alt'),
            'is_front_page' => $request->input('is_front_page', 0),
            'template'      => $request->input('template', 2),
            'status'        => $request->input('status', 1),
        ]);

        $post->meta()->create($request->only([
            'seo_title', 'description', 'keywords', 'robots', 'revisit_after',
            'og_locale', 'og_type', 'og_image', 'og_title', 'og_url', 'og_description',
            'og_site_name', 'author', 'canonical', 'geo_region', 'geo_placename',
            'geo_position', 'ICBM'
        ]));
    
        return redirect()->route('admin.posts.edit', $post->id)->with('success', 'Post created and images converted to WebP');
    }

    public function show($id)
    {
        $post = Post::with('meta')->where('post_type', 1)->findOrFail($id);
        return response()->json($post);
    }

    public function edit($id)
    {
        $post = Post::with('meta')->where('post_type', 1)->findOrFail($id);

        return view('admin/page_edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
        ]);

        $post = Post::findOrFail($id);

        $path = public_path('uploads/posts');

        if (!File::exists($path)) {
            File::makeDirectory($path, 0777, true, true); // 4th param = recursive
        }

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $imagePath = null;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = Str::random(20) . '.' . $image->getClientOriginalExtension();
                $image->move($path, $imageName);
                $imagePath = 'uploads/posts/' . $imageName;
            }
        } else {
            $imagePath = $post->image; // keep existing image
        }

        // Update post
        $post->update([
            'title'       => $request->title,
            'slug'        => $request->slug,
            'content'     => $request->content,
            'expert'      => $request->expert,
            'image'       => $imagePath,
            'image_alt'   => $request->image_alt,
        ]);

        // Update or create post meta
        $post->meta()->updateOrCreate([], $request->only([
            'seo_title', 'description', 'keywords', 'robots', 'revisit_after',
            'og_locale', 'og_type', 'og_image', 'og_title', 'og_url', 'og_description',
            'og_site_name', 'author', 'canonical', 'geo_region', 'geo_placename',
            'geo_position', 'ICBM'
        ]));

        return redirect()->route('admin.posts.edit', $post->id)->with('success', 'Post updated successfully.');
    }

    public function allPosts()
    {
        $post = Post::with('meta')->where('post_type', 1)->get();

        return view('admin/allPosts', compact('post'));
    }

}
