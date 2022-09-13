<?php

namespace App\Http\Controllers;


use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('dashboard.posts.index');
        return view('dashboard.menu.index', [
            'menus' => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ddd($request);
        // return $request;
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|min:4|max:255',
            'stock' => 'required|min:1|max:255',
            'variant' => 'required',
            'image' => 'image|file|max:1024'
        ]);

        Product::create($validateData);

        return redirect('/dashboard/posts')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($post)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($post)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $post)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($post)
    {
    }

    public function checkSlug(Request $request)
    {
    }
}
