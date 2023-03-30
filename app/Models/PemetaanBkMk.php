<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemetaanBkMk extends Model
{
    use HasFactory;
    public function pemetaanbkmks(){
        return $this->hasMany(Pemetaan::class);
    }
}
