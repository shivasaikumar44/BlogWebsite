<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;


class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->title = $request->input('title');
        $blog->content = $request->input('content');
        $blog->author = $request->input('author');
        $blog->save();
        return redirect()->route('blogs.index');
    }

    public function show($id)
    {
        $blog = Blog::find($id);
        return view('blogs.show', compact('blog'));
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('blogs.edit', compact('blog'));
    }   

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $blog->title = $request->input('title');
        $blog->content = $request->input('content');
        $blog->author = $request->input('author');
        $blog->save();
        return redirect()->route('blogs.index');
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect()->route('blogs.index');
    }
}
