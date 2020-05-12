<?php


namespace App\Modules\Manage\Models;

use App\User;
use Spatie\Permission\Traits\HasRoles;

class UsersModel extends User
{
    use HasRoles;
}
