<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; 
use App\Models\ContactData;
use Illuminate\Support\Facades\Validator;
use App\Models\PopupEnquiry;
use App\Models\PostMetaElement;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;



class FrontendController extends Controller
{
    public function index()
    {
        $metaElements = Post::with('meta')
        ->where('slug', 'home')
        ->where('post_type', 1)
        ->first();
        /*print_r($metaElements);        
        exit;*/

        $blogs = Post::with('meta') // optional: include SEO/meta
            ->where('post_type', 2) // assuming 2 = blog post
            ->where('status', 1) // published
            ->latest('created_at') // sort by latest
            ->take(3) // get 5 recent blogs
            ->get();
        return view('home', compact('metaElements','blogs'));
    }

    public function contactPage()
    {
        return view('contact');
    }

    /*public function blog()
    {
        $blogs = Blog::latest()->paginate(10); // Paginated blog list
        return view('frontend.blog.index', compact('blogs'));
    }

    public function blogDetails($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('frontend.blog.details', compact('blog'));
    }*/
    public function submitContact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'message' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        ContactData::create($request->only('name', 'phone', 'email', 'message'));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    public function submitPopup(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'class' => 'nullable|string|max:50',
            'page_url' => 'nullable|url',
        ]);

        PopupEnquiry::create($request->only('name', 'phone', 'email', 'class', 'page_url'));

        //return redirect()->back()->with('success', 'Thank you! We will contact you soon.');
        return redirect('thank-you');
    }

    public function blogDetail($slug)
    {
        $blog = Post::with('meta')
            ->where('slug', $slug)
            ->where('post_type', 2) // assuming post_type 2 = blog
            ->where('status', 1) // published
            ->firstOrFail();
        
        $metaElements = Post::with('meta')
            ->where('slug', $slug)
            ->where('post_type', 2)
            ->first();     
        
        $recentBlogs = Post::with('meta') // optional: include SEO/meta
            ->where('post_type', 2) // assuming 2 = blog post
            ->where('status', 1) // published
            ->where('slug', '!=', $slug) // exclude current blog
            ->latest('created_at') // sort by latest
            ->take(4) // get 3 recent blogs
            ->get();


        return view('blog-detail', compact('blog','metaElements','recentBlogs'));
    }

    public function pageDetail($slug)
    {
        $details = Post::with('meta')
            ->where('slug', $slug)
            //->where('post_type', 1) // assuming post_type 2 = blog
            ->where('status', 1) // published
            ->firstOrFail();
        
        $metaElements = Post::with('meta')
            ->where('slug', $slug)
            //->where('post_type', 1)
            ->first();  


        return view('pagedetail', compact('details','metaElements'));
    }

    public function admissionEnquiry()
    {
        $metaElements = Post::with('meta')
        ->where('slug', 'admission-in-cbse-school')
        ->where('post_type', 1)
        ->first();

        $details = Post::with('meta')
        ->where('slug', 'admission-in-cbse-school')
        ->where('status', 1) // published
        ->firstOrFail();
        

        return view('admissionenquiry', compact('metaElements','details'));
    }

    public function thankYou()
    {
        return view('thankYou');
    }

    public function blog($page = 1)
    {        
        $metaElements = Post::with('meta')
            ->where('slug', 'blog')
            ->where('post_type', 1)
            ->first();     
        
        Paginator::currentPageResolver(function () use ($page) {
            return $page;
        });
    
        $recentBlogs = Post::with('meta')
            ->where('post_type', 2)
            ->where('status', 1)
            ->latest('id')
            ->paginate(10);  


        return view('blog', compact('metaElements','recentBlogs'));
    }

}
