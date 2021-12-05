<?php

namespace Controllers;

use App\Event;
use App\Helper;
use Models\Common;


class CategorieController
{

    public function index()
    {

        Helper::render(
            'Pages/Admin/Categorie/categorie',
            [
                'page_title' => 'Accueil',
                'page_subtitle' => 'Bienvenu sur mon blog'
            ]
        );
    }
}
?>