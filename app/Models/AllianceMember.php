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
        'source_page',
        'source_section',
        'source_button',
        'source_program_slug',
        'source_program_title',
        'source_url',
        'referrer_url',
    ];
}
