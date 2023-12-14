<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('blog.category.index', compact('categories'));
    }

    public function show($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $posts = $category->posts()->paginate(5);

        return view('blog.category.show', compact('category', 'posts'));
    }

    public function create()
    {
        return view('blog.category.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255|unique:categories,name',
            'slug' => 'required|string|max:255|unique:categories,slug',
            'description' => 'required|string|max:255',
        ]);

        Category::create($request->all());

        return redirect()->route('category.index')->with('success', 'Category created successfully');
    }

    public function edit($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, $slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        $this->validate($request, [
            'name' => 'required|string|max:255|unique:categories,name,' . $category->id, // Exclude current category from uniqueness check
            'slug' => 'required|string|max:255|unique:categories,slug,' . $category->id, // Exclude current category from uniqueness check
        ]);

        $category->update($request->all());

        return redirect()->route('category.index')->with('success', 'Category updated successfully');
    }

    public function destroy($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        if ($category->posts()->count() > 0) {
            return redirect()->back()->with('error', 'Category cannot be deleted as it has associated posts. Please move or delete the posts before deleting the category.');
        }

        $category->delete();

        return redirect()->route('category.index')->with('success', 'Category deleted successfully');
    }
}
