<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    use HasFactory;

    const CREATED_AT = "date_created";
    const UPDATED_AT = "date_modified";
    
    protected $table = 'products';
    
    protected $primaryKey = 'product_id';


    protected $fillable = [
        'name',
        'price',
        'desc',
        'img_1',
        'img_2',
        'img_3',
        'img_destaque',
        'thumbnail',
        'sale',
        'status',
        'categoria',
        'destaque',
        'lancamento',
 
     ];
}
