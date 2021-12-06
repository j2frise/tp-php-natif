<?php

namespace Controllers;

use App\Event;
use App\Helper;
use Models\Common;
use App\UserInfo;

class ProfileController
{

    public function index()
    {
        $current_user = UserInfo::current();

        Helper::render(
            'Pages/Admin/Profile/profile',
            [
                'page_title' => 'Accueil',
                'page_subtitle' => 'Bienvenu sur mon blog',
                'current_user' => $current_user
            ]
        );
    }

    public function edit()
    {
       
    }
}
?>