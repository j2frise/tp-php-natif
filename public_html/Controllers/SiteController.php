<?php

namespace Controllers;

use App\Event;
use App\Helper;
use Models\Common;


class SiteController
{

    public function index()
    {

        Helper::render(
            'Pages/Admin/Site/site',
            [
                'page_title' => 'Accueil',
                'page_subtitle' => 'Bienvenu sur mon blog'
            ]
        );
    }
}
?>