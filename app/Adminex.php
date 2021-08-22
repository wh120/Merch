<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adminex extends Model
{
    
    protected $fillable = [
        'id', 'Exhibition_Name', 'Full_Name', 'Mobile_Number', 'Email', 'Password', 'Type_of_Exhibition', 'Number_of_Attendees', 'Number_of_Exhibiting_Companies', 'Event_Budget'];
}
