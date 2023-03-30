<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemetaan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function bahankajiank(){
        return $this->belongsTo(BahanKajian::class);
    }

    public function pemetaancpl(){
        return $this->belongsTo(PemetaanCpl::class);
    }

    public function pemetaancplbk(){
        return $this->belongsTo(PemetaanCplBk::class);
    }

    public function pemetaanbkmk(){
        return $this->belongsTo(PemetaanBkMk::class);
    }
}
