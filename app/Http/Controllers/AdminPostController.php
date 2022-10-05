<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\IndexController;

class AdminPostController extends Controller
{
    public function index()
    {
        $select_movie = IndexController::youtube();
        return view('dashboard',[
            'posts' => Post::all(),
            'select_movie' => $select_movie,
        ]);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store()
    {
        Post::create(array_merge($this -> validatePost(), [
            'user_id' => request()->user()->id,
            'thumbnail' => request()->file('thumbnail')->store('thumbnails')
        ]));
        return redirect('/')->with('success', '게시글이 잘 저장 되었습니다.');

    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit',['post'=>$post]);
    }

    public function update(Post $post)
    {
        $attributes = $this -> validatePost($post);

        if ($attributes['thumbnail'] ?? false) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }

        $post->update($attributes);

        return back()->with('success', '잘 수정되었습니다.');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return back()->with('success', '글이 삭제되었습니다.');
    }

    protected function validatePost(?Post $post=null)
    {

        $post ??= new Post();

        return request()->validate([
            'title' => 'required',
            'thumbnail' => $post->exists ? ['image'] : ['required','image'],
            'slug' => ['required', Rule::unique('posts', 'slug')->ignore($post)],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')],
        ]);

    }
}
