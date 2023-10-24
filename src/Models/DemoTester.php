<?php

namespace Bitsoftsol\LaravelAdministration\Models;

use App\Traits\LaravelAdmin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemoTester extends Model
{
    // These Fields will be displayed on Listing view of model crud
    protected $fillable = [
        'tester_name',
        'tester_email',
        'tester_image'
    ];

    use HasFactory;

    use LaravelAdmin;
}
