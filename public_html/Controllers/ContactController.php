<?php

namespace Controllers;

use App\Event;
use App\Helper;
use Models\Common;


class ContactController
{

    public function index()
    {

        Helper::render(
            'Pages/Contact/contact',
            [
                'page_title' => 'Accueil',
                'page_subtitle' => 'Bienvenu sur mon blog'
            ]
        );
    }
}
?>