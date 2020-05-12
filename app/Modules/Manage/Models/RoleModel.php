<?php


namespace App\Modules\Manage\Models;

use Spatie\Permission\Models\Role;

class RoleModel extends Role
{
    public function createRole()
    {
        $role = self::create(['name' => 'Super-Admin']);
    }

    public function assignPermission($permission)
    {
        $this->givePermissionTo('edit articles');
    }
}
