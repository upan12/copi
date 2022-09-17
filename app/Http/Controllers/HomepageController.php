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

    public function mesanMenu()
    {
        $data = $_POST;

        $nama = $data["name"];
        $menu = $data["menu"];
        $variant = $data["variant"];
        $amount = $data["amount"];
        $notes = $data["notes"];
        $noWa = $data["noWa"];

        if (!$notes) {
            return redirect("https://api.whatsapp.com/send?phone=$noWa&text=Hai%20kak,%0D%0ASaya%20pesan%20menu%20\"$menu\"%20:%20$amount,%20yang%20$variant%0D%0AAtas%20Nama%20:%20$nama%0D%0ATerimakasih%20kak:)");
        }
        return redirect("https://api.whatsapp.com/send?phone=$noWa&text=Hai%20kak,%0D%0ASaya%20pesan%20menu%20\"$menu\"%20:%20$amount,%20yang%20$variant%0D%0ANotes%20:%20$notes%0D%0AAtas%20Nama%20:%20$nama%0D%0ATerimakasih%20kak:)");
    }

    public function mesanProduct()
    {
        $data = $_POST;
        // dd($data);


        $nama = $data["name"];
        $product = $data["product"];
        $amount = $data["amount"];
        $notes = $data["notes"];
        $noWa = $data["noWa"];


        if (!$notes) {
            return redirect("https://api.whatsapp.com/send?phone=$noWa&text=Hai%20kak,%0D%0ASaya%20pesan%20produk%20\"$product\"%20:%20$amount,%0D%0AAtas%20Nama%20:%20$nama%0D%0ATerimakasih%20kak:)");
        }
        return redirect("https://api.whatsapp.com/send?phone=$noWa&text=Hai%20kak,%0D%0ASaya%20pesan%20produk%20\"$product\"%20:%20$amount,%0D%0ANotes%20:%20$notes%0D%0AAtas%20Nama%20:%20$nama%0D%0ATerimakasih%20kak:)");
        
    }
}
