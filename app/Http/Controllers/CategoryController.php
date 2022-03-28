<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;



class CategoryController extends ResponseController
{

    public function index(): JsonResponse{
        return $this->createResponse((CategoryResource::collection(Category::all()))->toArray(request()));
    }

    public function store(StoreCategoryRequest $request): JsonResponse{
        $category = Category::create([
            'name' => $request->input('name')
        ]);

        return $this->createResponse((new CategoryResource($category))->toArray(request()));
    }

    public function show(Category $category): JsonResponse{
        return $this->createResponse((new CategoryResource($category))->toArray(request()));
    }

    public function update(UpdateCategoryRequest $request, Category $category): JsonResponse{
        $category->update([
            'name' => $request->input('name')
        ]);

        return $this->createResponse((new CategoryResource($category))->toArray(request()));
    }

    public function destroy(Category $category): Response{
        $category->delete();
        
        return response(null, 204);
    }
}
