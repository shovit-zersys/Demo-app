<?php

namespace Shovit\DemoPackage\Models;

use Illuminate\Database\Eloquent\Model;

class Wish extends Model{
    protected $fillable = [
        'name', 'gender',
    ];
}