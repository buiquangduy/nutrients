<?php

namespace App\Http\Controllers;

use anlutro\LaravelSettings\SettingStore as Setting;

class SettingColorGradient extends Controller
{
    /**
     * @param Setting $settingStore
     *
     * @return int
     */
    public function index(Setting $settingStore)
    {
        return $settingStore->get('alpha', 0);
    }
}
