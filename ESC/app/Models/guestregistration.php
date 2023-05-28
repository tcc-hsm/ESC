<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guestregistration extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'emergency_contact',
        'birthday',
        'zip_code',
        'city',
        'region',
        'country',
        'updated_at',
        'created_at',
    ];

    protected $table = "db_guest_registration";
}
