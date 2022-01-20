<?php

namespace App\Http\Controllers;

use App\Models\Models\Post;
use Illuminate\Http\Request;
use App\Models\Models\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /*$this->middleware('auth');*/
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::all();
        $posts = Post::all();

        return view('posts', ['categories' => $categories, 'posts' => $posts]);
    }

    public function post()
    {
        return view('post');
    }

    public function postByCategory($category){
        $categories = Category::all();
        $category = Category::where('name' , '=' , $category)->first();
        $categoryIdSelected = $category->id;
        $posts = Post::where('category_id' , '=' , $categoryIdSelected)->get();
        return view('posts', ['categories' => $categories, 'posts' => $posts, 'categoryIdSelected' => $categoryIdSelected]);
    }
}
