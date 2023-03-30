<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemetaanCpl extends Model
{
    use HasFactory;
    public function pemetaancpls(){
        return $this->hasMany(Pemetaan::class);
    }
}
