<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(): View
    {
        $categories = Category::latest()->get();
        return view('admin.category.list', compact('categories'));
    }

    public function create(): View
    {
        return view('admin.category.create');
    }

    public function edit($id): View
    {
        $category = Category::findOrFail($id);
        return view('admin.category.update', compact('category'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required|unique:categories,title',
            'slug' => 'required|unique:categories,slug',
            'position' => 'required|boolean',
        ]);
        Category::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'position' => $request->position,
        ]);

        return to_route('admin.category.list')->with('success','Category successfully created');
    }

    public function update(Request $request, $id): RedirectResponse{
        $request->validate([
            'title' => 'required|unique:categories,title'.$id,
            'slug' => 'required|unique:categories,slug',
            'position' => 'required|boolean',
        ]);
        Category::findOrFail($id)->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'position' => $request->position,
        ]);

        return to_route('admin.category.list')->with('success','Category successfully updated');
    }

    public function destroy($id): RedirectResponse{
        Category::destroy($id);
        return to_route('admin.category.list')->with('success','Category successfully deleted');
    }

}
