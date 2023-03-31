@extends('layouts.main')

@section('container')



    <title>SI OBE Kurikulum</title>
    <div class="container">
        <div class="row">
            <div style="display:flex">
                <div style="padding-top:30px;color:white;font-size:26px;font-weight:bold;">
                    CPL-BK-MK
                </div>
                
            
            
                
                <div style="padding-top:30px;padding-left:900px;color:white;font-size:26px;font-weight:bold;color:rgb(138, 138, 138)">
                    CPL-BK-MK / Data
                    
                </div>
            </div>
               
            </div>
        
        
        
    <div class="row">
        <div class="card mt-5" style="padding: 2rem">
            <div class="card-body" >
            
    
            <div class="container">
                <table class="table table-hover rounded table-bordered mb-0">
                    <thead class="table-secondary">
                        <tr class="text-center">
                            <th scope="col"></th>
                            @foreach ($data2 as $bk)
                                <th scope="col">{{ $bk->kode_bk }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data1 as $cpl)
                            <tr class="text-center">
                                <th scope="row">{{ $cpl->kode_cpl }}</th>
                                @foreach ($data2 as $bk)
                                    <td>
                                        @if ($data4->where('kode_bk', $bk->kode_bk)->where('kode_cpl', $cpl->kode_cpl)->count() != 0)
                                            @foreach ($data3->where('kode_bk', $bk->kode_bk) as $pemetaanbkmk)
                                                {{ $pemetaanbkmk->kode_mk }}
                                            @endforeach
                                        @endif
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
        </div>

    </div>
    </div>
       
   

@endsection