<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;
class createController extends BaseController
{
    public function index()
    {
        if(!Session::get('user_id')){
            return redirect('login');
        }
        // Leggiamo lo username
        $user = User::find(Session::get('user_id'));
        return view('create')->with('email', $user->email);
    }

    public function showProfile(){
        if(!Session::get('user_id')){
            return redirect('login');
        }

        $user = User::find(Session::get('user_id'));
        $posts = Post::where('user_id', $user->id)->orderBy('created_at', 'desc');

        return $posts->get();
    }

}
