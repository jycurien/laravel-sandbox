<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateCategoryRequest;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index(): View
    {
        return view('admin.categories.index', ['categories' => Category::paginate(20)]);
    }

    public function create(): View
    {
        return view('admin.categories.create');
    }

    public function store(CreateCategoryRequest $request): RedirectResponse
    {
        Category::create($request->validated());

        return redirect()->route('admin.categories.index');
    }
//
//    public function edit(Category $category)
//    {
//        return view('admin.categories.edit', compact('category'));
//    }
//
//    public function update(EditCategoryRequest $request, Category $category)
//    {
//        $category->update($request->validated());
//
//        return redirect()->route('admin.categories.index');
//    }
//
//    public function destroy(Category $category)
//    {
//        if ($category->posts()->count()) {
//            return back()->withErrors(['error' => 'Cannot delete, category has posts.']);
//        }
//
//        $category->delete();
//
//        return redirect()->route('admin.categories.index');
//    }
}
