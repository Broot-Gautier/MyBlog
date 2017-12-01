<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Suscriptor;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = User::find(Auth::id())->posts;
        return view('home')->with('posts',$posts)->with('user_id',Auth::id());
    }
}
