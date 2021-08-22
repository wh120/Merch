<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merch extends Model
{
    protected $guard = 'merches';

    protected $fillable = ['Full_Name', 'Company_Name', 'Email', 'Password', 'Type_of_goods', 'Space_Required', 'image','id_Exhibtion'];
}
