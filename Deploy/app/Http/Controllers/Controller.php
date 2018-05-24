<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\User;
use App\jam_nyala;
use App\pelanggan;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function adminIndex()
    {
        return view('admin.index');
    }

    public function adminCreate(){
    	return view('admin.buatakun');
    }

    public function manajemenakun(){

    	$datauser = User::all();
        return view('admin.manajemenakun', ['datauser' => $datauser]);
    }

    public function tambahakun(Request $request){
      $newadmin = new User();
      $newadmin->nip = $request->nip;
      $newadmin->password = $request->password;
      $newadmin->level = $request->level;

      $newadmin->save();

      $datauser = User::all();
        return view('admin.manajemenakun', ['datauser' => $datauser]);

    }

    public function ubahpassword(Request $request){

      // dd($request->new_password);
      $calon = User::where('nip', $request->nip)->first();
      $calon->password = $request->new_password;
      $calon->save();

      // return redirect()->route('manajemenakun')
      // $datauser = User::all();
        return view('admin.manajemenakun', ['datauser' => $datauser])->with('alert-success', 'Password Berhasil Diubah.');
    }

    public function deleteakun($id){
      $calon = User::where('nip', $id)->delete();
      $datauser = User::all();
      return view('admin.manajemenakun', ['datauser' => $datauser]);
    }

    public function tambahdata(){
      
    }

    public function workpage(){
      return view('workpage');
    }

    public function getTime(Request $request){
      $area = $request->area;
      $waktu = jam_nyala::whereHas('pelanggan', function($query) use($area){
        $query->whereHas('area', function($query) use($area){
          $query->where('area', $area);
        });
      })
      ->selectRaw('max(bulan) as bulan, max(tahun) as max_tahun, min(tahun) as min_tahun')
      ->first();

      return response()->json(array('waktu' => $waktu), 200);
    }

    public function getPelanggan(Request $request){
      $area = $request->area;
      $bln_now = $request->bulan;
      $thn_now = $request->tahun;

      if($bln_now < 12){
        $bln_bef = $bln_now + 1;
        $thn_bef = $thn_now - 1;
      }
      else{
        $bln_bef = 1;
        $thn_bef = $thn_now;
      }

      $pelanggan = pelanggan::whereHas('area', function($query) use($area){
        $query->where('area', $area);
      })
      ->with(['jam_nyala' => function($query) use($bln_bef, $bln_now, $thn_bef, $thn_now){
        $query->where(function($query) use($bln_bef, $thn_bef){
                $query->whereBetween('bulan', [$bln_bef, 12])
                      ->where('tahun', $thn_bef);
              })
              ->orWhere(function($query) use($bln_now, $thn_now){
                $query->whereBetween('bulan', [1, $bln_now])
                      ->where('tahun', $thn_now);
              });
      }])
      ->get()
      ->take(25);

      return response()->json(array('pelanggan' => $pelanggan), 200);
    }

    public function getChart(Request $request){
        $id = $request->id;
        $tahun = $request->tahun;
        $pelanggan = pelanggan::find($id);

        $jamnyala = array();
        for($i = 1; $i <= 12; $i++){
            $jamnyala[$i-1]['tahun'] = 2013;
            $jamnyala[$i-1]['bulan'] = $i;
            $jamnyala[$i-1]['jam_nyala'] = $pelanggan->jam_nyala->where('bulan', $i)->first()['jam_nyala'];
        } 

        return response()->json(array('pelanggan' => $pelanggan, 'jamnyala' => $jamnyala), 200);
    }

    public function search(Request $request){
      $value = $request->value;
      $area = $request->area;
      $bln_now = $request->bulan;
      $thn_now = $request->tahun;

      if($bln_now < 12){
        $bln_bef = $bln_now + 1;
        $thn_bef = $thn_now - 1;
      }
      else{
        $bln_bef = 1;
        $thn_bef = $thn_now;
      }

      $pelanggan = pelanggan::whereHas('area', function($query) use($area){
        $query->where('area', $area);
      })
      ->with(['jam_nyala' => function($query) use($bln_bef, $bln_now, $thn_bef, $thn_now){
        $query->where(function($query) use($bln_bef, $thn_bef){
                $query->whereBetween('bulan', [$bln_bef, 12])
                      ->where('tahun', $thn_bef);
              })
              ->orWhere(function($query) use($bln_now, $thn_now){
                $query->whereBetween('bulan', [1, $bln_now])
                      ->where('tahun', $thn_now);
              });
      }]);
      $pelanggan = $pelanggan->where('id', 'LIKE', '%'.$value.'%')
                             ->orWhere('nama', 'LIKE', '%'.$value.'%')
                             ->orWhere('alamat', 'LIKE', '%'.$value.'%')
                             ->get()
                             ->take(25);

      return response()->json(array('pelanggan' => $pelanggan), 200);
    }



    public function changePasswordPegawai(Request $request){
      $calon = User::where('nip', $request->nip)->first();

      if($request->current_pass = $calon->password && $request->new_pass == $request->repeat_new_pass){
        $calon->password = bcrypt($request->new_pass);
        $calon->save();

        return view('workpage')->with('alert', 'Password telah berhasil diganti !');
      }
      else{
        return view('workpage')->with('alert', 'Password gagal terganti');
      }


    }
}
