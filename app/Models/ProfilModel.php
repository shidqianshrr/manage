<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilModel extends Model
{
    protected $connection = "mysql";
    protected $table = "profile";
    public $timestamps = false;
}
