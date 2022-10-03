<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $arr_movie = array(
            "https://youtu.be/KmafPs7Ljxw",
            "https://youtu.be/HrmWAdF_s6Y",
            "https://youtu.be/Dw1BhP7WJbo",
            "https://youtu.be/0snKAXOdY20",
            "https://youtu.be/_y8Rg4hgF1k",
            "https://youtu.be/vqT7ADQmZ7o",
            "https://youtu.be/10X1siLTuac",
            "https://youtu.be/3sE_YweJ4E4",
            "https://youtu.be/rsUnpWA_kRw",
            "https://youtu.be/YAyfr_mR9rk",
        );

        $select_index_movie = array_rand($arr_movie);
        $select_movie = $arr_movie[$select_index_movie];

        $categories = Category::all();
        $posts = Post::all();

        $newposts = Post::where('created', '>=', Carbon::now()->subMonth())->get();

        return view('index2', [
            'select_movie' => $select_movie,
            'posts' => $posts,
            'newposts' => $newposts,
            'categories' => $categories,
        ]);
    }
}
