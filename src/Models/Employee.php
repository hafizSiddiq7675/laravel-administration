<?php

namespace Bitsoftsol\LaravelAdministration\Models;

use App\Traits\LaravelAdmin;
use App\Traits\LaravelAdminAPI;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'email',
        'profile_image',
        'id_card_image',
        'age',
        'height',
        'city',
        'joining_date',
        'joining_date_time',
        'is_married',
        'status'
    ];

    use HasFactory;

    use LaravelAdminAPI;

    use LaravelAdmin;
}
