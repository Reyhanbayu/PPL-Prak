<?php

namespace App\Http\Controllers;

use App\Models\BahanKajian;
use App\Models\Pemetaan;
use App\Models\PemetaanCplBk;
use App\Models\PemetaanBkMk;
use App\Models\PemetaanCpl;
use Illuminate\Http\Request;

class PemetaanController extends Controller
{
    public function indexPemetaan(Request $request){

        return view('pemetaan/index', [
            'data1'=>PemetaanCpl::all(),
            'data2'=>BahanKajian::all(),
            'data3'=>PemetaanBkMk::all(),
            'data4'=>PemetaanCplBk::all()
        ]);
    }
}
