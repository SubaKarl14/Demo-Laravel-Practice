<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Throwable;

class CategoryController extends Controller
{
    public function index() {
        try {
            $categories = Category::where('status', false)->get();
            
            return response()->json($categories, 200);
        } catch (Throwable $e) {
            report($e);
        }
    }
}
