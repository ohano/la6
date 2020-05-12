<?php


namespace App\Modules\Manage\Models;

use Spatie\Permission\Models\Permission;

class PermissionModel extends Permission
{
    public function createPermission()
    {
        $permission = self::create(['name' => 'editAdmin']);
    }


}
