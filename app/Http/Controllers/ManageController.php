<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Teepluss\Theme\Facades\Theme;

class ManageController extends BaseController
{
    protected $manager = null;

    public function __construct()
    {
        parent::__construct();
        $routeName = Route::currentRouteName();
        $this->middleware(['auth']);
        $this->middleware(['permission:' . $routeName]);
        $this->setTheme('manage', 'manage_base');
        $this->setBreadCrumbs();
        $this->setManager();
        var_dump(Auth::user());
    }

    public function setManager()
    {
        $this->manager = Auth::user();
    }

    public function setSideBar()
    {

    }

    public function setBreadCrumbs()
    {
        $this->theme->partial('manage_breadcrumbs', ['crumbs' => [['label'=> '321312', 'url'=>'baidu.com'], ['label'=> '33333', 'url'=>'baidu.com']]]);
    }
}
