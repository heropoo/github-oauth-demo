<?php
/**
 * Created by PhpStorm.
 * User: ttt
 * Date: 2018/7/12
 * Time: 23:40
 */

namespace App\Controllers;

use Moon\Controller;

class UserController extends Controller
{
    public function login(){
        //return 'login';
        $login_url = 'https://github.com/login/oauth/authorize?client_id='.config('oauth.client_id')
            .'&redirect_uri=http://localhost/github/github-oauth-demo/public/oauth/redirect';
        return $this->render('login', ['login_url'=>$login_url]);
    }

    public function post_login(){

    }

    public function logout(){
        return redirect('login');
    }

    public function register(){
        return $this->render('register');
    }

    public function post_register(){

    }
}