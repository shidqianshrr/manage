<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingModel extends Model
{
    protected $connection = "mysql";
    protected $table = "shopping";
    public $timestamps = false;
}
