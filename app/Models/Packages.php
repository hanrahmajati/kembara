<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    use HasFactory;
    protected $table = 'packages';
    protected $primaryKey = "id";
    protected $fillable= ['name', 'time', 'description', 'price'];
}
