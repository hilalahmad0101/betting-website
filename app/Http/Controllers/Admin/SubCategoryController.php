<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index() :View{
        $subCategories = SubCategory::latest()->get();
        return view('admin.subcategory.list', compact('subCategories'));
    }

    public function create() :View{
        $categories = Category::latest()->get();
        return view('admin.subcategory.create', compact('categories'));
    }

    public function store(Request $request) :RedirectResponse{
        $request->validate([
            'category_id' =>'required',
            'title' =>'required|unique:sub_categories,title',
            'slug' =>'required|unique:sub_categories,slug',
            'position' =>'required|boolean'
        ]);

        SubCategory::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug'=>$request->slug,
            'position'=>$request->position
        ]);
        return to_route('admin.subcategory.index')->with('success', 'Subcategory created successfully');
    }

    public function edit($id):View{

        $subCategory = SubCategory::findOrFail($id);
        return view('admin.subcategory.edit', compact('subCategory'));
    }


    public function destroy($id):RedirectResponse{
        SubCategory::destroy($id);
        return to_route('admin.subcategory.list')->with('success','Subcategory deleted successfully');
    }

    public function update(Request $request, $id):RedirectResponse{

        $request->validate([
            'category_id' =>'required',
            'title' =>'required|unique:sub_categories,title',
            'slug' =>'required|unique:sub_categories,slug',
            'position' =>'required|boolean'
        ]);

        SubCategory::findOrFail($id)->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => $request->slug,
            'position' => $request->position

        ]);
        return to_route('admin.subcategory.list')->with('success','Subcategory updated successfully');
    }
}
