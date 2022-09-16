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
            'menus' => Menu::latest()->filter(request(['search']))->get(),
            'products' => Product::all(),
            'products' => Product::latest()->filter(request(['search']))->get(),
            'blogs' => Blog::all(),
            'blogs' => Blog::latest()->filter(request(['search']))->get()
        ]);
    }
    public function pesan()
    {
        $data = $_POST;
        // dd($data);
        // var_dump($data);
        

        $nama = $data["name"];
        $email = $data["email"];
        $pesan = $data["pesan"];
        $noWa = $data["noWa"];
        header("location: https://api.whatsapp.com/send?phone=$noWa&text=Nama%20:%20$nama%0D%0AEmail%20:%20$email%0D%0APesan%20:%20$pesan");
    }

    public function mesan()
    {
        $data = $_POST;

        $nama = $data["name"];
        $menu = $data["menu"];
        $variant = $data["variant"];
        $noWa = $data["noWa"];
        
        header("location: https://api.whatsapp.com/send?phone=$noWa&text=Menu%20:%20$menu%0D%0AVariant%20:%20$variant&text=Nama%20:%20$nama");
    }
}
