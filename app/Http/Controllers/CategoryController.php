<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{



    public function index()
    {
        return  CategoryResource::collection(Category::all());
    }




    public function create()
    {
        //
    }




    public function store(StoreCategoryRequest $request)
    {
        $category = Category::create([
            'name' => $request->input('name')
        ]);

        return new CategoryResource($category);
    }





    public function show(Category $category)
    {
        return new CategoryResource($category);
    }




    public function edit(Category $category)
    {
        //
    }




    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }




    public function destroy(Category $category)
    {
        $category->delete();

        return response(null, 204);
    }
}
