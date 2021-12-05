<?php

namespace Controllers;

use App\Event;
use App\Helper;
use Models\Common;


class DashboardController
{

    public function index()
    {

        Helper::render(
            'Pages/Admin/Dashboard/dashboard',
            [
                'page_title' => 'Accueil',
                'page_subtitle' => 'Bienvenu sur mon blog'
            ]
        );
    }
}
?>