<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(Request $request) {
Category::create(attributes: [
    'title' => $request->title,
    'description' => $request->descriprion,
]);
    }
}
