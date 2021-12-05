<?php

namespace Controllers;

use App\Event;
use App\Helper;
use Models\Common;


class ProfileController
{

    public function index()
    {

        Helper::render(
            'Pages/Admin/Profile/profile',
            [
                'page_title' => 'Accueil',
                'page_subtitle' => 'Bienvenu sur mon blog'
            ]
        );
    }
}
?>