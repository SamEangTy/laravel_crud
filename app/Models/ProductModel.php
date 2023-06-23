<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $primaryKey = 'p_id';
    protected $guarded = ['p_id'];
    // protected $fillable = ['name','qty','price','updated_at','created_at'];

}
