<?php


namespace App\Http\Controllers;


use Teepluss\Theme\Facades\Theme;

class BaseController extends Controller
{
    protected $theme = null;

    public function __construct()
    {
        define('ASSETS_PATH', '/themes/manage/assets');
    }

    public function setTheme($theme, $layout)
    {
        $this->theme = Theme::uses($theme)->layout($layout);
    }
}
