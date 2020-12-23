<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    protected $table = "blog";
    protected $primaryKey  = "blog_id";

    protected $fillable = [
       'titulo',
       'autor',
       'desc',
       'dateblog',

    ];
}