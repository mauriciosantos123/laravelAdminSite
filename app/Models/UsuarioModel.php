<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioModel extends Model
{
     use HasFactory;

    const CREATED_AT = "date_created";
    const UPDATED_AT = "date_modified";
    
    protected $table = "usuario";
    
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'email',
        'gender',
        'birthdate',
        'password',
        'phone',

    ];
}
