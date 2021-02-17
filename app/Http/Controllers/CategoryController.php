<?php

namespace App\Http\Controllers;

use App\Category;

class CategoryController extends Controller
{
    public function list()
    {
        $categories = Category::all();
    
        return view('users.create_blog', compact('categories'));
    }

    public function listArticle($id)
    {
        $category = Category::with('articles')->find($id);
     
        return view('category', compact('category'));
    }
}
