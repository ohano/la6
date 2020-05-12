<?php


namespace App\Modules\Manage\Http\Controllers;


use App\Http\Controllers\ManageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BackendController extends ManageController
{
    public function __construct(Request $request)
    {
        parent::__construct();
        var_dump(request()->session());exit();
        $this->theme->setTitle('后台首页');
    }

    public function index()
    {
        var_dump(request()->session());exit();

        return $this->theme->scope('backend.index', ['data'=>1231])->render();
    }
}
