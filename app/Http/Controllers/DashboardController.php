<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    
    public function index()
    {
        return view('dashboard.index', [
            'count_menu' => DB::table('menus')->count(),
            'count_product' => DB::table('products')->count(),
            'count_blog' => DB::table('blogs')->count()
        ]);
    }
}
