<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       if(!session()->has('id')){
        $blogs = Blog::paginate(3);
        return view('blogs', compact('blogs'));
       }else{
        $blogs = Blog::paginate(10);
        return view('admin.manageBlogs', compact('blogs'));
       }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createBlog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'blogImage' => 'image'
        ],[
            'blogImage.image' => 'This Field Must be jpg,png or jpeg file',
        ]);
        $path = $request->blogImage->store('blog', 'public');
        Blog::create([
            'title' => $request->title,
            'category' => $request->category,
            'tag' => $request->tag,
            'image' => $path,
            'description' => $request->description,
            'addBy' => session('name')
        ])->save();
        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $blog = Blog::find($id);
       return view('admin.viewBlog',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::find($id);
        return view('admin.editBlog',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if(!$request->file('blogImage')){
            Blog::where('id',$id)->update([
                'title' => $request->title,
                'category' => $request->category,
                'tag' => $request->tag,
                'description' => $request->description
            ]);
            return redirect()->route('blog.edit', $id);
        }else{
            $image_path = public_path("/storage/").$request->blogImage;

            if(file_exists($image_path)){
                @unlink($image_path);
            }
            $path = $request->blogImage->store('blog','public');
            Blog::where('id',$id)->update([
                'title' => $request->title,
                'category' => $request->category,
                'tag' => $request->tag,
                'description' => $request->description,
                'image' => $path
            ]);
            return redirect()->route('blog.edit', $id);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Blog::destroy($id);
        return redirect()->route('blog.index');
    }
}
