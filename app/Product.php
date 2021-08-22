<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['Brand', 'Model', 'Price', 'Warranty', 'Description', 'id_categorie', 'id_Exhibtion'];
}
