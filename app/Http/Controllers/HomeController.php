<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;
class HomeController extends BaseController
{
    public function index()
    {
        if(!Session::get('user_id')){
            return redirect('login');
        }
        // Leggiamo lo username
        $user = User::find(Session::get('user_id'));
        return view('home')->with('email', $user->email);
    }

    public function showFeed(){
        if(!Session::get('user_id')){
            return redirect('login');
        }

        //this posts need to come in descending order
        $posts = Post::orderBy('created_at', 'desc');

        return $posts->get();
    }

}
