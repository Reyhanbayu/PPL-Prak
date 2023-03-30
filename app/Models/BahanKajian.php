<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BahanKajian extends Model
{
    use HasFactory;
    public function bahankajians(){
        return $this->hasMany(Pemetaan::class);
    }
}
