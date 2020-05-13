<?php


namespace App\Http\Controllers;

use App\Facades\CommonFunc;
use App\Modules\Manage\Models\MenuModel;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
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
        $this->setManager();
        $this->setTheme('manage', 'manage_base');
//        $this->setBreadCrumbs();
//        $this->setSideBar();
    }

    public function setManager()
    {
        $this->middleware(function ($request, $next) {

            $this->manager = Auth::user();

            return $next($request);
        });

    }

    public function setSideBar()
    {
        $permissions = $this->manager->getAllPermissions();
        $menus = MenuModel::where('is_show', 1)
            ->orderBy('sort', 'DESC')
            ->orderBy('pid', 'ASC')
            ->get();
        $temp = [];
        foreach($menus as $k=>$v) {
            if($v['route_name'] && !$this->manager->can($v['route_name']))
            {
                $temp[] = $v;
            }
        }
        $manageMenuAll = Arr::except($menus, [$temp]);
        $manageMenuTree = CommonFunc::getTree($manageMenuAll);
    }

    public function setBreadCrumbs()
    {
        $this->theme->partial('manage_breadcrumbs', ['crumbs' => [['label'=> '321312', 'url'=>'baidu.com'], ['label'=> '33333', 'url'=>'baidu.com']]]);
    }
}
