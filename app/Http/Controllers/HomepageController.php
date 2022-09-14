<?php

namespace App\Http\Controllers;

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
            'menus' => Menu::latest()->filter(request(['search']))->get(),
            'products' => Product::latest()->filter(request(['search']))->get()
        ]);
    }
    public function pesan()
    {
        $data = $_POST;
        // var_dump($data);
        

        $nama = $data["name"];
        $email = $data["email"];
        $pesan = $data["pesan"];
        $noWa = $data["noWa"];
        header("location: https://api.whatsapp.com/send?phone=$noWa&text=Nama%20:%20$nama%0D%0AEmail%20:%20$email%0D%0APesan%20:%20$pesan");
    }
}
