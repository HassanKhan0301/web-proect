<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillable=[
        'cat_id',
        'name',
        'slug',
        'small_descrip',
        'description',
        'origninal_price',
        'selling_price',
        'image',
        'qty',
        'tax',
        'meta_title',
        'meta_keywords',
        'meta_discrip',

    ];

    public function add()
    {
        return $this->belongsTo(add::class,'cat_id','id');
    }


    

}
