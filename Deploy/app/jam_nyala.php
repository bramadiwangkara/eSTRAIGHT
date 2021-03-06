<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jam_nyala extends Model
{
    public $timestamps = false;
    //
    public function pelanggan()
    {
    	return $this->belongsTo('App\pelanggan', 'idpel', 'id');
    }

    public static function tetap($bulan, $tahun)
    {
    	if($bulan == 1){
    		$bulan_bef = 12;
    		$tahun_bef = $tahun - 1;
    	}
    	else{
    		$bulan_bef = $bulan - 1;
    		$tahun_bef = $tahun;
    	}

    	return jam_nyala::
					select('idpel')
    				->where(function($query) use($bulan, $tahun) {
    					$query->where('bulan', $bulan)
    						  ->where('tahun', $tahun);
    				})
    				->orwhere(function($query) use($bulan_bef, $tahun_bef){
    					$query->where('bulan', $bulan_bef)
    						  ->where('tahun', $tahun_bef);
    				})
    				->groupBy('idpel', 'jam_nyala')
    				->havingRaw('COUNT(jam_nyala) > 1');
    }

    public static function waktu_terakhir(){
        $tahun = jam_nyala::selectRaw('max(tahun) as tahun')->get();

        return jam_nyala::selectRaw('max(bulan) as bulan, tahun')
                        ->groupBy('tahun')
                        ->having('tahun', $tahun[0]->tahun)
                        ->get();
    }

    public static function bulan_terakhir($tahun){
        return jam_nyala::selectRaw('max(bulan) as bulan')
                        ->groupBy('tahun')
                        ->having('tahun', $tahun[0]->tahun)
                        ->get();
    }
}
