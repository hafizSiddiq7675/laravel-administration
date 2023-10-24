<?php

namespace Bitsoftsol\LaravelAdministration\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AuthGroup;
use App\Models\User;

class AuthUserGroup extends Model
{
    use HasFactory;

    public function auth_group()
    {
        return $this->belongsTo(AuthGroup::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
