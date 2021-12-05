<?php

namespace Controllers;

use App\Event;
use App\Helper;
use Models\Common;
use Models\Auth;
use App\Middleware;


class LoginController
{

    public function index()
    {

        Helper::render(
            'Pages/Admin/Login/login',
            [
                'page_title' => 'Accueil',
                'page_subtitle' => 'Bienvenu sur mon blog'
            ]
        );
    }

    
    public function formLogin()
    {
        $request = json_decode(json_encode($_POST));
        $login = Auth::login($request);
        $output = [];
        if(!$login){
            $output['status'] = 'ERROR';
            $output['message'] = 'Identifiant ou mot de passe incorrect';
        } else {
            $output['status'] = 'OK';
        }
       
        unset($_POST);
        echo json_encode($output);
    }


    public function logout()
    {
        $output = [];

        if (Auth::logout()) {
            header('location: ' . URL_ROOT, true, 303);
            exit();
        } else {
            $output['status'] = 'ERROR';
            $output['message'] = 'Echec de déconnexion !';
        }

        echo json_encode($output);
    }
}
?>