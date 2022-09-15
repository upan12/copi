<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Menu;
use App\Models\Product;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        // return view('dashboard.posts.index');
        return view('homepage.index', [
            'menus' => Menu::all(),
            'products' => Product::all(),
            'blogs' => Blog::all()
        ]);
    }
}
