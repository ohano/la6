<?php


namespace App\Modules\Manage\Http\Controllers;


use App\Http\Controllers\ManageController;
use App\Modules\Manage\Models\ManageModel;
use App\Modules\Manage\Models\PermissionModel;
use App\Modules\Manage\Models\RoleModel;

class PermissionController extends ManageController
{

    public function createRole(RoleModel $roleModel)
    {
        $roleModel->createRole();
        dd('success');
    }

    public function createPermission(PermissionModel $permissionModel)
    {
        $permissionModel->createPermission();
        dd('success');
    }

    public function giveRole()
    {
        //分配用户给角色
        $obj = ManageModel::find(1);
//        $obj->assignRole('Super-Admin');

        //分配权限给角色
//        RoleModel::find(2)->givePermissionTo('editAdmin');
        \Barryvdh\Debugbar\Facade::info(666666666);

//        $permissions = $obj->getAllPermissions();
//        \Barryvdh\Debugbar\Facade::info($permissions);
//        //验证权限
        $res = $obj->hasAnyPermission('edit articles');
        \Barryvdh\Debugbar\Facade::info($res);
        return 1111;
    }
}
