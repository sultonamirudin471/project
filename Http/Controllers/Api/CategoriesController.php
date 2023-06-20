<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function allCategories()
    {
        $allCategories = Categories::query()->get();
        return response()->json([
            "code" => 200,
            "message" => "Get Data Categories",
            "data" => $allCategories
        ]);
    }

    public function createCategories(Request $request)
    {

    }
}
