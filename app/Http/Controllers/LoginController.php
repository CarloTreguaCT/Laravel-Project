<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;
class LoginController extends BaseController
{
    public function login_form(){
        if(Session::get('user_id')){
            return redirect('home');
        }
        return view('register');
    }

    public function do_login(){
        if(Session::get('user_id')){
            return redirect('home');
        }

        //validiamo i dati
        if(strlen(request('email')) == 0 || strlen(request('password')) == 0){
            return redirect('login')->withInput();
        }

        $user = User::where('email', request('email'))->first();
        if($user->email !== request('email') || !password_verify(request('password'), $user->password)){
            redirect('register')->withInput();
        }else if($user && password_verify(request('password'), $user->password)){
            Session::put('user_id', $user->id);
            //redirect home
            return redirect('home');
        }

       /*  Session::put('user_id', $user->id);
        //redirect home
        return redirect('home'); */


    }




    public function register_form(){
        if(Session::get('user_id')){
            return redirect('home');
        }
        return view('register');
    }

    public function do_register(){
        if(Session::get('user_id')){
            return redirect('home');
        }

        

        //validiamo i dati
        if(strlen(request('r_email')) == 0 || strlen(request('r_password')) == 0 || strlen(request('repeat_password')) == 0){
            return redirect('register')->withInput();
        }else if(!filter_var(request('r_email'), FILTER_VALIDATE_EMAIL)){
            return redirect('register')->withInput();
        }
        else if(User::where('email', request('r_email'))->first()){
            redirect('register')->withInput();
        }
        else if (request('r_password') != request('repeat_password')){
            return redirect('register')->withInput();
        }

        // creazione utente
        $user = new User();
        $user->email = request('r_email');
        $user->password =  bcrypt(request('r_password'));
        $user->save();

        //login
        Session::put('user_id', $user->id);
        //redirect home
        return redirect('home');

    }

    public function logout(){
        Session::flush();
        return redirect('login');
    }

    public function check($email){
        if(Session::get('user_id')){
            return redirect('home');
        }
        if(User::where('email', $email)->first()){
            return ['error' => 'Email already exists'];
        } else{
            return ['success' => 'Email available'];
        }
    }
    
    public function checkEmail($email){
        if(Session::get('user_id')){
            return redirect('home');
        }
        if(User::where('email', $email)->first()){
           return ['success' => 'Email available'];
        } else {
            return ['error' => 'Email not available'];
        }   
    }
}
