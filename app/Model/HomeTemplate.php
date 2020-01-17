<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HomeTemplate extends Model
{
    protected $table = 'home_template';
    protected $fillable = ['content'];
}
