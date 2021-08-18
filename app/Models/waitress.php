<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class waitress extends Model
{
    use HasFactory;

        protected $fillable = [
            'waitress_name','waitress_code','waitress_password','waitress_status'
        ];
        protected $primaryKey = 'waitress_id';
}
