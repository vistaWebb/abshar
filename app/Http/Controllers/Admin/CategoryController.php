<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest()->paginate(10);
        return view('admin.categories.index' , compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.categories.create' , compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'parent_id'=>'required',
            'icon'=>'required'
        ]);

        Category::create([
            'name'=>$request->name,
            'icon'=>$request->icon,
            'parent_id'=>$request->parent_id,
            'is_active'=>$request->is_active,
            'description'=>$request->description
        ]);

        // alert()->success('با موفقیت انجام شد','دسته بندی با موفقیت اضافه شد');
        return redirect()->route('admin.categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $categories = Category::all();
        return view('admin.categories.edit' , compact('category' , 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name'=>'required',
            'parent_id'=>'required',
            'icon'=>'required'
        ]);
        $category->update([
            'name'=>$request->name,
            'icon'=>$request->icon,
            'parent_id'=>$request->parent_id,
            'is_active'=>$request->is_active,
            'description'=>$request->description
        ]);

        // alert()->success('با تشکر','برند با موفقیت ویرایش شد');

        return redirect()->route('admin.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        // alert()->success('با موفقیت انجام شد','بنر با موفقیت حذف شد');
        return redirect()->route('admin.categories.index');
    }
}
