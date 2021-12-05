<?php

namespace Controllers;

use App\Event;
use App\Helper;
use Models\Common;


class SlideController
{

    public function index()
    {

        Helper::render(
            'Pages/Admin/Slide/slide',
            [
                'page_title' => 'Accueil',
                'page_subtitle' => 'Bienvenu sur mon blog'
            ]
        );
    }
}
?>