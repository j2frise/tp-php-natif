<?php

namespace Controllers;

use App\Event;
use App\Helper;
use Models\Common;


class BlogController
{

    public function index()
    {

        Helper::render(
            'Pages/Blog/articles',
            [
                'page_title' => 'Accueil',
                'page_subtitle' => 'Bienvenu sur mon blog'
            ]
        );
    }

    public function detail(string $slug)
    {
        Helper::render(
            'Pages/Blog/article',
            [
                'page_title' => '',
                'page_subtitle' => ''
            ]
        );
    }
}
?>