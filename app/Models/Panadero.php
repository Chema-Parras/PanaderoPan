<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panadero extends Model
{
    use HasFactory;
    public function pan(){
        return $this->belongsTo(Pan::class);
    }
    protected $primaryKey = 'id_Panadero';
}
