<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class PostCategoryController extends Controller
{
    public function attachCategory(Request $request, Post $post)
    {
        $validated = $request->validate([
            'category_id' => 'required|integer|exists:categories,id', // Validate category ID exists
        ]);

        // Check if category is already attached to the post
        if (PostCategory::where('post_id', $post->id)->where('category_id', $validated['category_id'])->exists()) {
            return redirect()->back()->with('message', 'Category already attached to this post.');
        }

        // Attach category to the post using relationship
        $post->categories()->attach($validated['category_id']);

        return redirect()->route('posts.show', $post)->with('message', 'Category attached successfully!');
    }
}
