<?php

namespace Controllers;

use App\Event;
use App\Helper;
use Models\Common;


class UsersController
{

    public function index()
    {

        Helper::render(
            'Pages/Admin/Users/users',
            [
                'page_title' => 'Accueil',
                'page_subtitle' => 'Bienvenu sur mon blog'
            ]
        );
    }
}
?>