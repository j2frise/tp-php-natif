<?php

namespace Controllers;

use App\Event;
use App\Helper;
use Models\Common;


class ArticleController
{

    public function index()
    {

        Helper::render(
            'Pages/Admin/Article/article',
            [
                'page_title' => 'Accueil',
                'page_subtitle' => 'Bienvenu sur mon blog'
            ]
        );
    }

    public function edit(string $slug)
    {

        Helper::render(
            'Pages/Admin/Article/articleDetail',
            [
                'page_title' => 'Accueil',
                'page_subtitle' => 'Bienvenu sur mon blog'
            ]
        );
    }
}
?>