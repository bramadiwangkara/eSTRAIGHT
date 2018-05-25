<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\pelanggan;
use App\jam_nyala;
use App\area;
use Excel;

class adminController extends Controller
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function pegawai(){
      $user = User::all();

      return view('admin.pegawai', ['datauser' => $user]);
    }

    public function tambahpegawai(Request $request){
      $newadmin = new User();
      $newadmin->nip = $request->nip;
      if(empty($request->password))
        $newadmin->password = bcrypt("pegawaiPLN");
      else
        $newadmin->password = bcrypt($request->password);

      $newadmin->level = $request->level;
      $newadmin->save();

      $datauser = User::all();
      return redirect('admin/manajemenpegawai');
    }

    public function hapuspegawai(User $id){
      $id->delete();

      return redirect('admin/manajemenpegawai');
    }

    public function getPegawai(Request $request){
      $id = $request->id;
      $pegawai = User::find($id);
      return response()->json(array('pegawai' => $pegawai), 200);
    }

    public function edit(Request $request){
      $pegawai = User::find($request->id);
      
      if($request->btn == "change"){
        $pegawai->level = $request->level;
      } else{
        $pegawai->password = bcrypt('pegawaiPLN');
      }

      $pegawai->save();
      return redirect('/admin/manajemenpegawai');
    }

    public function pelanggan(Request $request){
      $area = area::select('area')->groupBy('area')->get();
      return view('admin.pelanggan', ['area' => $area]); 
    }

    public function getPelanggan(Request $request){
      $area = $request->area;
      $pelanggan = pelanggan::whereHas('area', function($query) use($area){
        $query->where('area', $area);
      })
      ->with('jam_nyala')
      ->get()
      ->take(25);

      return response()->json(array('pelanggan' => $pelanggan), 200);
    }

    public function tambahPelanggan(Request $request){
      $waktu = jam_nyala::waktu_terakhir();
      
      if($waktu[0]->bulan == 12){
        $bulan = 1;
        $tahun = $waktu[0]->tahun + 1;
      } else{
        $bulan = $waktu[0]->bulan + 1;
        $tahun = $waktu[0]->tahun;
      }
      
      $file = Input::file('add_cust');
      $file_name = $file->getClientOriginalName();
      $file->move('files', $file_name);
      Excel::load("files/".$file_name, function($reader) use($bulan, $tahun){
            $array = $reader->toArray();
            $ctr = 0;
            foreach ($array as $row) {
                $alamat = trim($row["alamat"]);
                if($row["rt"] != null && $row["rt"] != 0)
                    $alamat = $alamat . " RT " . trim($row["rt"]);
                if($row["rw"] != null && $row["rw"] != 0)
                    $alamat = $alamat . " RW " . trim($row["rw"]);

              $arr = array('id' => $row['idpel'],
                           'nama' => $row['nama'],
                           'alamat' => $alamat,
                           'tarif' => $row['tarif'],
                           'daya' => $row['daya'],
                           'fakm' => $row['fakm'],
                           'fakmvarh' => $row['fakmkvarh'],
                           'slalwbp' => $row['slalwbp'],
                           'sahlwbp' => $row['sahlwbp'],
                           'slawbp' => $row['slawbp'],
                           'sahwbp' => $row['sahwbp'],
                           'slakvarh' => $row['slakvarh'],
                           'sahkvarh' => $row['sahkvarh'],
                           'pemkwh' => $row['pemkwh'],
                           'unitup' => $row['unitup'],
                           'kdgardu' => $row['kdgardu'],
                           'dlpd' => $row['dlpd'],
                           'dlpd_fkm' => $row['dlpd_fkm'],
                           'dlpd_jnsmutasi' => $row['dlpd_jnsmutasi'],
                          );
              pelanggan::updateOrCreate($arr);

              $arr_jn[$ctr] = array('idpel' => $row['idpel'], 'jam_nyala' => $row['jamnyala'], 'bulan' => $bulan, 'tahun' => $tahun);
              $ctr = $ctr + 1;
              // $jamnyala = new jam_nyala;
              // $jamnyala->idpel = $row['idpel'];
              // $jamnyala->jam_nyala = $row['jamnyala'];
              // $jamnyala->bulan = $bulan;
              // $jamnyala->tahun = $tahun;
              // $jamnyala->save();
            }
            jam_nyala::insert($arr_jn);
        });

      return redirect('/admin/manajemenpelanggan');
    }

    public function hapusPelanggan(Request $request){
      $waktu = jam_nyala::waktu_terakhir();
      $bulan = $waktu[0]->bulan;
      $tahun = $waktu[0]->tahun;

      jam_nyala::where('bulan', $bulan)->where('tahun', $tahun)->delete();

      return redirect('/admin/manajemenpelanggan');
    }

}
