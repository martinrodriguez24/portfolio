<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('blog.post.index', compact('posts'));
    }

    public function show(string $slug)
    {
        $post = post::where('slug', $slug)->firstOrFail();
        $categories = Category::all();   
        return view('blog.post.show', compact('post', 'categories'));
    }

    public function create()
    {
        return view('blog.post.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:posts,slug',
            'excerpt' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png|max:2048',
        ]);
    
        // Get uploaded image
        $image = $request->file('image');
    
        // Generate unique filename
        $filename = uniqid().'.'.$image->getClientOriginalExtension();
    
        // Store image on server
        $image->storeAs('public/media/images/blog', $filename);
    
        // Create and save post data
        $post = new Post();
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->excerpt = $request->input('excerpt');
        $post->content = $request->input('content');
        $post->image = $filename;
        $post->save();
        
        // Redirect to appropriate page
        return redirect()->route('posts.index')->with(
            'success',
            'post created successfully'
        );

    }
    public function edit($id)
    {
        $post = post::findOrFail($id);


        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = post::findOrFail($id);
        $post->update($request->all());
        return redirect()->route('posts.index')->with(
            'success',

            'post updated successfully'
        );
    }

    public function destroy($id)
    {
        post::findOrFail($id)->delete();
        return redirect()->route('posts.index')->with('success', 'post deleted successfully');
    }
}
