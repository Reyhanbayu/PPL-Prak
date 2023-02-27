<?php

namespace App\Http\Controllers;

use App\Models\CplDikti;
use Illuminate\Http\Request;

class CplDiktiController extends Controller
{
   public function indexDikti(Request $request){
        
        $data = CplDikti::query();
        
        // filter Kategori
        $data->when($request->kategori_cpl, function ($query) use ($request) {
            return $query->wherekategori_cpl($request->kategori_cpl);
        });

        return view('cpldikti/indexDikti', ['data' => $data->paginate(5)]);

        
    }

    public function tambahcpldikti(){
        return view('cpldikti/tambahiDikti');
    }

    public function insertcpldikti(Request $request){
        CplDikti::create($request->all());
        return redirect()->route('cpldikti')->with('success', 'Data CPL Dikti Berhasil di Tambahkan');
    }

    public function tampilcpldikti($id){
        $data = CplDikti::find($id);
        return view('cpldikti/tampilindex', compact('data'));
    }

    public function updatecpldikti(Request $request,$id){
        $data = CplDikti::find($id);
        $data->update($request->all());
        return redirect()->route('cpldikti')->with('success', 'Data CPL Dikti Berhasil di Ubah');
    }

    public function delete($id){
        //$CplDikti->id
        $data = CplDikti::find($id);
        $data->delete();
        return redirect()->route('cpldikti')->with('success', 'Data CPL Dikti Berhasil di Hapus');
    }
}
