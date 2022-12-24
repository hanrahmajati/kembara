<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'booking';
    protected $primaryKey = "id";
    protected $fillable= ['date', 'quantity', 'total_payment', 'status', 'id_package', 'name', 'email', 'phone_number'];

    public function package(){
        return $this->belongsTo('App\Models\Packages', 'id_package', 'id');
    }
}
