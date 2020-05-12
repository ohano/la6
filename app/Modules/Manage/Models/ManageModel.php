<?php


namespace App\Modules\Manage\Models;

use App\User;
use Spatie\Permission\Traits\HasRoles;

class ManageModel extends User
{
    protected $table = 'manage';
    protected $primaryKey = 'id';
    use HasRoles;

    public function giveRole()
    {
        $this->assignRole('writer');
    }
}
