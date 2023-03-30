<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\BahanKajian;
use App\Models\PemetaanCpl;
use App\Models\PemetaanBkMk;
use App\Models\PemetaanCplBk;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        PemetaanCpl::create([
            'kode_cpl' => 'cpl01',
            'nama_cpl' => 'Lorem Ipsum'
        ]);

        PemetaanCpl::create([
            'kode_cpl' => 'cpl02',
            'nama_cpl' => 'Lorem Ipsum'
        ]);

        PemetaanCpl::create([
            'kode_cpl' => 'cpl03',
            'nama_cpl' => 'Lorem Ipsum'
        ]);

        PemetaanCpl::create([
            'kode_cpl' => 'cpl04',
            'nama_cpl' => 'Lorem Ipsum'
        ]);

        PemetaanCpl::create([
            'kode_cpl' => 'cpl05',
            'nama_cpl' => 'Lorem Ipsum'
        ]);

        PemetaanCpl::create([
            'kode_cpl' => 'cpl06',
            'nama_cpl' => 'Lorem Ipsum'
        ]);

        PemetaanCpl::create([
            'kode_cpl' => 'cpl07',
            'nama_cpl' => 'Lorem Ipsum'
        ]);

        PemetaanCpl::create([
            'kode_cpl' => 'cpl09',
            'nama_cpl' => 'Lorem Ipsum'
        ]);

        PemetaanCpl::create([
            'kode_cpl' => 'cpl10',
            'nama_cpl' => 'Lorem Ipsum'
        ]);

        PemetaanCpl::create([
            'kode_cpl' => 'cpl11',
            'nama_cpl' => 'Lorem Ipsum'
        ]);

        PemetaanCpl::create([
            'kode_cpl' => 'cpl12',
            'nama_cpl' => 'Lorem Ipsum'
        ]);

        PemetaanCpl::create([
            'kode_cpl' => 'cpl13',
            'nama_cpl' => 'Lorem Ipsum'
        ]);

        BahanKajian::create([
            'kode_bk' => 'bk01',
            'nama_bk' => 'Lorem Ipsum'
        ]);

        BahanKajian::create([
            'kode_bk' => 'bk02',
            'nama_bk' => 'Lorem Ipsum'
        ]);

        BahanKajian::create([
            'kode_bk' => 'bk03',
            'nama_bk' => 'Lorem Ipsum'
        ]);

        BahanKajian::create([
            'kode_bk' => 'bk04',
            'nama_bk' => 'Lorem Ipsum'
        ]);

        BahanKajian::create([
            'kode_bk' => 'bk05',
            'nama_bk' => 'Lorem Ipsum'
        ]);

        BahanKajian::create([
            'kode_bk' => 'bk06',
            'nama_bk' => 'Lorem Ipsum'
        ]);

        BahanKajian::create([
            'kode_bk' => 'bk07',
            'nama_bk' => 'Lorem Ipsum'
        ]);

        BahanKajian::create([
            'kode_bk' => 'bk09',
            'nama_bk' => 'Lorem Ipsum'
        ]);

        BahanKajian::create([
            'kode_bk' => 'bk10',
            'nama_bk' => 'Lorem Ipsum'
        ]);

        BahanKajian::create([
            'kode_bk' => 'bk11',
            'nama_bk' => 'Lorem Ipsum'
        ]);

        BahanKajian::create([
            'kode_bk' => 'bk12',
            'nama_bk' => 'Lorem Ipsum'
        ]);

        BahanKajian::create([
            'kode_bk' => 'bk13',
            'nama_bk' => 'Lorem Ipsum'
        ]);

        PemetaanCplBk::create([
            'kode_cpl' => 'cpl08',
            'kode_bk' => 'bk01'
        ]);
        
        PemetaanCplBk::create([
            'kode_cpl' => 'cpl04',
            'kode_bk' => 'bk02'
        ]);

        PemetaanCplBk::create([
            'kode_cpl' => 'cpl09',
            'kode_bk' => 'bk03'
        ]);

        PemetaanCplBk::create([
            'kode_cpl' => 'cpl08',
            'kode_bk' => 'bk04'
        ]);

        PemetaanCplBk::create([
            'kode_cpl' => 'cpl05',
            'kode_bk' => 'bk05'
        ]);
        
        PemetaanCplBk::create([
            'kode_cpl' => 'cpl07',
            'kode_bk' => 'bk06'
        ]);
        
        PemetaanCplBk::create([
            'kode_cpl' => 'cpl05',
            'kode_bk' => 'bk07'
        ]);
        
        PemetaanCplBk::create([
            'kode_cpl' => 'cpl13',
            'kode_bk' => 'bk07'
        ]);
        
        PemetaanCplBk::create([
            'kode_cpl' => 'cpl07',
            'kode_bk' => 'bk08'
        ]);
        
        PemetaanCplBk::create([
            'kode_cpl' => 'cpl09',
            'kode_bk' => 'bk08'
        ]);
        
        PemetaanCplBk::create([
            'kode_cpl' => 'cpl06',
            'kode_bk' => 'bk09'
        ]);
        
        PemetaanCplBk::create([
            'kode_cpl' => 'cpl01',
            'kode_bk' => 'bk10'
        ]);
        
        PemetaanCplBk::create([
            'kode_cpl' => 'cpl02',
            'kode_bk' => 'bk10'
        ]);
        
        PemetaanCplBk::create([
            'kode_cpl' => 'cpl11',
            'kode_bk' => 'bk11'
        ]);
        
        PemetaanCplBk::create([
            'kode_cpl' => 'cpl04',
            'kode_bk' => 'bk12'
        ]);

        PemetaanCplBk::create([
            'kode_cpl' => 'cpl10',
            'kode_bk' => 'bk12'
        ]);

        PemetaanCplBk::create([
            'kode_cpl' => 'cpl11',
            'kode_bk' => 'bk12'
        ]);

        PemetaanCplBk::create([
            'kode_cpl' => 'cpl04',
            'kode_bk' => 'bk12'
        ]);

        PemetaanCplBk::create([
            'kode_cpl' => 'cpl01',
            'kode_bk' => 'bk13'
        ]);
        
        PemetaanCplBk::create([
            'kode_cpl' => 'cpl02',
            'kode_bk' => 'bk13'
        ]);
        
        PemetaanCplBk::create([
            'kode_cpl' => 'cpl03',
            'kode_bk' => 'bk14'
        ]);
        
        PemetaanCplBk::create([
            'kode_cpl' => 'cpl12',
            'kode_bk' => 'bk14'
        ]);
        
        PemetaanCplBk::create([
            'kode_cpl' => 'cpl07',
            'kode_bk' => 'bk15'
        ]);
        
        PemetaanCplBk::create([
            'kode_cpl' => 'cpl05',
            'kode_bk' => 'bk16'
        ]);
        
        PemetaanCplBk::create([
            'kode_cpl' => 'cpl03',
            'kode_bk' => 'bk17'
        ]);
        
        PemetaanCplBk::create([
            'kode_cpl' => 'cpl12',
            'kode_bk' => 'bk17'
        ]);
        
        PemetaanCplBk::create([
            'kode_cpl' => 'cpl03',
            'kode_bk' => 'bk18'
        ]);
        
        PemetaanCplBk::create([
            'kode_cpl' => 'cpl12',
            'kode_bk' => 'bk18'
        ]);
        
        PemetaanCplBk::create([
            'kode_cpl' => 'cpl02',
            'kode_bk' => 'bk19'
        ]);

        PemetaanBkMk::create([
            'kode_bk' => 'bk01',
            'kode_mk' => 'mk14'
        ]);

        PemetaanBkMk::create([
            'kode_bk' => 'bk02',
            'kode_mk' => 'mk26'
        ]);
        
        PemetaanBkMk::create([
            'kode_bk' => 'bk02',
            'kode_mk' => 'mk27'
        ]);
        
        PemetaanBkMk::create([
            'kode_bk' => 'bk03',
            'kode_mk' => 'mk31'
        ]);
               
        PemetaanBkMk::create([
            'kode_bk' => 'bk03',
            'kode_mk' => 'mk32'
        ]);
               
        PemetaanBkMk::create([
            'kode_bk' => 'bk03',
            'kode_mk' => 'mk38'
        ]);
               
        PemetaanBkMk::create([
            'kode_bk' => 'bk03',
            'kode_mk' => 'mk39'
        ]);
                       
        PemetaanBkMk::create([
            'kode_bk' => 'bk04',
            'kode_mk' => 'mk68'
        ]);
                               
        PemetaanBkMk::create([
            'kode_bk' => 'bk05',
            'kode_mk' => 'mk34'
        ]);
                               
        PemetaanBkMk::create([
            'kode_bk' => 'bk05',
            'kode_mk' => 'mk35'
        ]);
                               
        PemetaanBkMk::create([
            'kode_bk' => 'bk05',
            'kode_mk' => 'mk77'
        ]);
                               
        PemetaanBkMk::create([
            'kode_bk' => 'bk06',
            'kode_mk' => 'mk60'
        ]);
                                       
        PemetaanBkMk::create([
            'kode_bk' => 'bk06',
            'kode_mk' => 'mk63'
        ]);
                                       
        PemetaanBkMk::create([
            'kode_bk' => 'bk06',
            'kode_mk' => 'mk68'
        ]);
                                       
        PemetaanBkMk::create([
            'kode_bk' => 'bk06',
            'kode_mk' => 'mk73'
        ]);
                                       
        PemetaanBkMk::create([
            'kode_bk' => 'bk06',
            'kode_mk' => 'mk76'
        ]);
                                       
        PemetaanBkMk::create([
            'kode_bk' => 'bk07',
            'kode_mk' => 'mk18'
        ]);
                                               
        PemetaanBkMk::create([
            'kode_bk' => 'bk07',
            'kode_mk' => 'mk19'
        ]);
                                               
        PemetaanBkMk::create([
            'kode_bk' => 'bk07',
            'kode_mk' => 'mk28'
        ]);
                                               
        PemetaanBkMk::create([
            'kode_bk' => 'bk07',
            'kode_mk' => 'mk29'
        ]);
                                               
        PemetaanBkMk::create([
            'kode_bk' => 'bk07',
            'kode_mk' => 'mk42'
        ]);
                                               
        PemetaanBkMk::create([
            'kode_bk' => 'bk07',
            'kode_mk' => 'mk43'
        ]);
                                               
        PemetaanBkMk::create([
            'kode_bk' => 'bk07',
            'kode_mk' => 'mk44'
        ]);
                                               
        PemetaanBkMk::create([
            'kode_bk' => 'bk07',
            'kode_mk' => 'mk45'
        ]);
                                       
        PemetaanBkMk::create([
            'kode_bk' => 'bk07',
            'kode_mk' => 'mk52'
        ]);
                                               
        PemetaanBkMk::create([
            'kode_bk' => 'bk07',
            'kode_mk' => 'mk53'
        ]);
                                               
        PemetaanBkMk::create([
            'kode_bk' => 'bk07',
            'kode_mk' => 'mk67'
        ]);
                                               
        PemetaanBkMk::create([
            'kode_bk' => 'bk07',
            'kode_mk' => 'mk75'
        ]);
                                               
        PemetaanBkMk::create([
            'kode_bk' => 'bk07',
            'kode_mk' => 'mk18'
        ]);

        PemetaanBkMk::create([
            'kode_bk' => 'bk08',
            'kode_mk' => 'mk48'
        ]);

        PemetaanBkMk::create([
            'kode_bk' => 'bk09',
            'kode_mk' => 'mk65'
        ]);

        PemetaanBkMk::create([
            'kode_bk' => 'bk10',
            'kode_mk' => 'mk61'
        ]);

        PemetaanBkMk::create([
            'kode_bk' => 'bk10',
            'kode_mk' => 'mk62'
        ]);

        PemetaanBkMk::create([
            'kode_bk' => 'bk10',
            'kode_mk' => 'mk78'
        ]);
        
        PemetaanBkMk::create([
            'kode_bk' => 'bk11',
            'kode_mk' => 'mk11'
        ]);
                
        PemetaanBkMk::create([
            'kode_bk' => 'bk11',
            'kode_mk' => 'mk13'
        ]);
                
        PemetaanBkMk::create([
            'kode_bk' => 'bk11',
            'kode_mk' => 'mk17'
        ]);
                
        PemetaanBkMk::create([
            'kode_bk' => 'bk11',
            'kode_mk' => 'mk22'
        ]);
                
        PemetaanBkMk::create([
            'kode_bk' => 'bk11',
            'kode_mk' => 'mk30'
        ]);
                
        PemetaanBkMk::create([
            'kode_bk' => 'bk11',
            'kode_mk' => 'mk33'
        ]);
                
        PemetaanBkMk::create([
            'kode_bk' => 'bk11',
            'kode_mk' => 'mk64'
        ]);
                
        PemetaanBkMk::create([
            'kode_bk' => 'bk12',
            'kode_mk' => 'mk36'
        ]);
                        
        PemetaanBkMk::create([
            'kode_bk' => 'bk12',
            'kode_mk' => 'mk37'
        ]);
                        
        PemetaanBkMk::create([
            'kode_bk' => 'bk12',
            'kode_mk' => 'mk54'
        ]);
                        
        PemetaanBkMk::create([
            'kode_bk' => 'bk12',
            'kode_mk' => 'mk55'
        ]);
                        
        PemetaanBkMk::create([
            'kode_bk' => 'bk12',
            'kode_mk' => 'mk64'
        ]);
                        
        PemetaanBkMk::create([
            'kode_bk' => 'bk12',
            'kode_mk' => 'mk66'
        ]);
                        
        PemetaanBkMk::create([
            'kode_bk' => 'bk12',
            'kode_mk' => 'mk69'
        ]);
                        
        PemetaanBkMk::create([
            'kode_bk' => 'bk12',
            'kode_mk' => 'mk70'
        ]);
                        
        PemetaanBkMk::create([
            'kode_bk' => 'bk12',
            'kode_mk' => 'mk71'
        ]);
                        
        PemetaanBkMk::create([
            'kode_bk' => 'bk12',
            'kode_mk' => 'mk72'
        ]);
                        
        PemetaanBkMk::create([
            'kode_bk' => 'bk12',
            'kode_mk' => 'mk74'
        ]);
                                
        PemetaanBkMk::create([
            'kode_bk' => 'bk13',
            'kode_mk' => 'mk01'
        ]);
                                        
        PemetaanBkMk::create([
            'kode_bk' => 'bk13',
            'kode_mk' => 'mk02'
        ]);
                                        
        PemetaanBkMk::create([
            'kode_bk' => 'bk13',
            'kode_mk' => 'mk03'
        ]);
                                        
        PemetaanBkMk::create([
            'kode_bk' => 'bk13',
            'kode_mk' => 'mk04'
        ]);
                                        
        PemetaanBkMk::create([
            'kode_bk' => 'bk13',
            'kode_mk' => 'mk05'
        ]);
                                        
        PemetaanBkMk::create([
            'kode_bk' => 'bk13',
            'kode_mk' => 'mk06'
        ]);
                                        
        PemetaanBkMk::create([
            'kode_bk' => 'bk13',
            'kode_mk' => 'mk07'
        ]);
                                        
        PemetaanBkMk::create([
            'kode_bk' => 'bk13',
            'kode_mk' => 'mk08'
        ]);
                                        
        PemetaanBkMk::create([
            'kode_bk' => 'bk13',
            'kode_mk' => 'mk12'
        ]);
                                        
        PemetaanBkMk::create([
            'kode_bk' => 'bk13',
            'kode_mk' => 'mk16'
        ]);
                                        
        PemetaanBkMk::create([
            'kode_bk' => 'bk13',
            'kode_mk' => 'mk20'
        ]);
                                        
        PemetaanBkMk::create([
            'kode_bk' => 'bk13',
            'kode_mk' => 'mk21'
        ]);
                                        
        PemetaanBkMk::create([
            'kode_bk' => 'bk13',
            'kode_mk' => 'mk23'
        ]);
                                        
        PemetaanBkMk::create([
            'kode_bk' => 'bk13',
            'kode_mk' => 'mk41'
        ]);
                                        
        PemetaanBkMk::create([
            'kode_bk' => 'bk13',
            'kode_mk' => 'mk47'
        ]);
                                        
        PemetaanBkMk::create([
            'kode_bk' => 'bk13',
            'kode_mk' => 'mk49'
        ]);
                                        
        PemetaanBkMk::create([
            'kode_bk' => 'bk13',
            'kode_mk' => 'mk58'
        ]);
                                        
        PemetaanBkMk::create([
            'kode_bk' => 'bk13',
            'kode_mk' => 'mk59'
        ]);
                                        
        PemetaanBkMk::create([
            'kode_bk' => 'bk14',
            'kode_mk' => 'mk24'
        ]);
                                        
        PemetaanBkMk::create([
            'kode_bk' => 'bk14',
            'kode_mk' => 'mk25'
        ]);
                                                
        PemetaanBkMk::create([
            'kode_bk' => 'bk15',
            'kode_mk' => 'mk40'
        ]);
                                                        
        PemetaanBkMk::create([
            'kode_bk' => 'bk15',
            'kode_mk' => 'mk56'
        ]);
                                                        
        PemetaanBkMk::create([
            'kode_bk' => 'bk15',
            'kode_mk' => 'mk57'
        ]);
                                                        
        PemetaanBkMk::create([
            'kode_bk' => 'bk16',
            'kode_mk' => 'mk50'
        ]);
                                                               
        PemetaanBkMk::create([
            'kode_bk' => 'bk16',
            'kode_mk' => 'mk51'
        ]);
                                                               
        PemetaanBkMk::create([
            'kode_bk' => 'bk17',
            'kode_mk' => 'mk40'
        ]);
                                                               
        PemetaanBkMk::create([
            'kode_bk' => 'bk17',
            'kode_mk' => 'mk46'
        ]);
                                                               
        PemetaanBkMk::create([
            'kode_bk' => 'bk17',
            'kode_mk' => 'mk50'
        ]);
                                                          
        PemetaanBkMk::create([
            'kode_bk' => 'bk18',
            'kode_mk' => 'mk46'
        ]);
                                                                  
        PemetaanBkMk::create([
            'kode_bk' => 'bk18',
            'kode_mk' => 'mk49'
        ]);
                                                                          
        PemetaanBkMk::create([
            'kode_bk' => 'bk19',
            'kode_mk' => 'mk09'
        ]);
                                                                                  
        PemetaanBkMk::create([
            'kode_bk' => 'bk19',
            'kode_mk' => 'mk10'
        ]);
                                                                                  
        PemetaanBkMk::create([
            'kode_bk' => 'bk19',
            'kode_mk' => 'mk15'
        ]);
    }
}
