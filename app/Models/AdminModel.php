<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    protected $table = "admin";
    protected $primaryKey  = "admin_id";

    protected $fillable = [
        'admin_id',
        'name',
        'email',
        'gender',
        'birthdate',
        'password',
        'phone',

    ];
}
