<?php

namespace Controllers;

use App\Event;
use App\Helper;
use Models\Common;


class AboutController
{

    public function index()
    {

        Helper::render(
            'Pages/About/about',
            [
                'page_title' => 'Accueil',
                'page_subtitle' => 'Bienvenu sur mon blog'
            ]
        );
    }
}
?>