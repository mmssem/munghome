<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Contracts\Session\Session;




class IndexController extends Controller
{

    public static function youtube() {
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

        return $arr_movie[$select_index_movie];
    }

    public function index()
    {

        $viewed = Session::get('viewed_pages', []);
        dd($viewed);
        //if(!in_array($page->id, $viewed)){
        //    $page->increment('views');
        //    Session::push('viewed_pages', $page->id);
        //}


        $select_movie = IndexController::youtube();

        $categories = Category::all();
        $posts = Post::all();

        $newposts = Post::where('created', '>=', Carbon::now()->subMonth())->get();

        return view('index', [
            'select_movie' => $select_movie,
            'posts' => $posts,
            'newposts' => $newposts,
            'categories' => $categories,
        ]);
    }

}
