<?php

namespace App;

use Models\Setting;

class SiteInfo
{
    public static function data()
    {
        return Setting::index();
    }

    public static function info($id)
    {
        return Setting::get($id);
    }
}
