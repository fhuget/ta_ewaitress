<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class foodmenu extends Model
{
    use HasFactory;

     protected $fillable = [
            'foodmenu_name','foodmenu_detail','foodmenu_image','foodmenu_status'
        ];
        protected $primaryKey = 'foodmenu_id';
}
