<?php

namespace Bitsoftsol\LaravelAdministration\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AuthGroup;
use App\Models\AuthPermission;

class AuthGroupPermission extends Model
{
    use HasFactory;

    public function auth_group()
    {
        return $this->belongsTo(AuthGroup::class, 'group_id');
    }

    public function auth_permission(){
        return $this->belongsTo(AuthPermission::class, 'permission_id');
    }
}
