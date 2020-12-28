<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaModel extends Model
{
        protected $table = "categoria_models";
        protected $primaryKey  = "categoria_id";

    protected $fillable = [
        'name',
        'collection',
        'img_categoria',
        
    ];
}
