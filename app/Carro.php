<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use  Illuminate\Database\Eloquent\SoftDeletes;

class Carro extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'marca', 'modelo', 'ano',
    ];
}
