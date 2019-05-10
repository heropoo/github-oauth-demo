<?php


namespace App\Controllers;


use Moon\Controller;
use Symfony\Component\HttpFoundation\Request;

class OauthController extends Controller
{
    public function redirect(){
        dump($_GET, $_POST);
    }
}