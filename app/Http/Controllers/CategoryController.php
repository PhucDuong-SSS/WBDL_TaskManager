<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('modules.category.list',compact('categories'));
    }

    public function getPostsByCategoryId($id)
    {
        $posts = Category::findOrFail($id)->posts()->get();
        return view('modules.category.listPostsByCategoryId',compact('posts'));
    }
}
