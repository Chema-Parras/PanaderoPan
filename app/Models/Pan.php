<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pan extends Model
{
    use HasFactory;
    public function panaderos(){
        return $this->hasMany(Panadero::class);
    }
    protected $primaryKey = 'id_Pan';
}
