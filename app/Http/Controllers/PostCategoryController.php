<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class PostCategoryController extends Controller
{
    public function attachCategory(Request $request)
    {
        $post_id = $request->input('post_id');
        $post = Post::findOrFail($post_id);
        $validated = $request->validate([
            'post_id' => 'required|integer|exists:posts,id',
            'category_id' => 'required|integer|exists:categories,id',
        ]);

        // Check if category is already attached to the post
        if (PostCategory::where('post_id', $request->input('post_id'))->where('category_id', $validated['category_id'])->exists()) {
            return redirect()->back()->with('message', 'Category already attached to this post.');
        }

        // Attach category to the post using relationship
        $postCategory = new PostCategory();
        $postCategory->post_id = $request->input('post_id');
        $postCategory->category_id = $request->input('category_id');
        $postCategory->save();

        return redirect()->route('posts.show', $post)->with('message', 'Category attached successfully!');
    }

    // public function dettachCategory(Request $request)
    // {
    //     $post_id = $request->input('post_id');
    //     $post = Post::findOrFail($post_id);
    //     $validated = $request->validate([
    //         'post_id' => 'required|integer|exists:posts,id',
    //         'category_id' => 'required|integer|exists:categories,id',
    //     ]);
    // }
}
