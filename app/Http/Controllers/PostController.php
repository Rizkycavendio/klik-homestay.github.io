<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Post;
use \App\Models\Category;



class PostController extends Controller
{
    // postingan yang banyak
    public function index()
    {
        $title = '';

        if (request('category')) {
            // jika terdapat request dari category, maka jalankan di bawah ini
            $category = Category::firstWhere('slug', request('category'));
            // $category di isi dengan Category firstWhere di mana pertama slug yang value nya sesuai request categorynya.
            $title = ' in ' . $category->name;
            // maka title akan di isi dengan in ambil dari $category berdasarkan nama
        }

        return view('posts', [
            "title" => "All Homestay" . $title,
            "posts" => Post::latest()->filter(request(['search', 'category', 'room']))->paginate(8)
        ]);
    }

    // detail postingan dari sebuah postingan
    public function show(Post $post)
    {
        return view('post', [
            "title" => "Detail Homestay",
            "post" => $post
        ]);
    }

    public function booking(Post $post)
    {

        return view('booking', [
            "title" => "Booking",
            "post" => $post
        ]);
    }
}
