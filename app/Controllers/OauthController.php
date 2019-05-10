<?php


namespace App\Controllers;


use GuzzleHttp\Client;
use Moon\Controller;

class OauthController extends Controller
{
    public function redirect(){
        //dump($_GET, $_POST);
        $code = \request()->get('code');
        if(!empty($code)){
            $client = new Client();
            $response = $client->post('https://github.com/login/oauth/access_token?format=json', [
                'form_params'=>[
                    'client_id'=>config('oauth.client_id'),
                    'client_secret'=>config('oauth.client_secret'),
                    'code'=>$code
                ]
            ]);

            $res = $response->getBody()->getContents();
            $res = json_decode($res, 1);
            //dd($res);
            // {"access_token":"c179e0bef217e23cf64a8719a6ce111f6685d5b4","token_type":"bearer","scope":""}
            $response = $client->get('https://api.github.com/user', [
                'headers'=>[
                    'Accept'=>'application/json',
                    'Authorization'=> 'Bearer '.$res['access_token']
                ]
            ]);

            $res = $response->getBody()->getContents();
            $res = json_decode($res, 1);

            echo '<h3>'.$res['login'].'</h3>';
            echo '<img src="'.$res['avatar_url'].'" width="100">';
            dd($res);
        }
    }
}