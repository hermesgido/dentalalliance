<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AllianceMember extends Model
{
    protected $fillable = [
    'full_name',
    'phone',
    'email',
    'country',
    'role',
    'message',
];

}
