<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\User;
use App\pelanggan;
use App\jam_nyala;
use App\area;

class adminController extends Controller
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(Request $request){
      $datauser = User::all();

      if($request == null)
        $area = 'BANYUWANGI';
      else
        $area = $request->area;

      $pelanggans = pelanggan::whereHas('jam_nyala', function($query){
        $query->where('bulan', '12')->where('tahun', '2013');
      })
      ->whereHas('area', function($query) use($area){
        $query->where('area', $area);
      })
      ->get()
      ->take(25);

      $area = area::select('area')->groupBy('area')->get();

      return view('admin.layouts.masteradmin', ['datauser' => $datauser, 'pelanggans' => $pelanggans, 'area' => $area]); 
    }

    // public function cust_area_change(Request $request){
    //   $area = $request->area;
    //   $pelanggans = pelanggan::whereHas('jam_nyala')
    //                   ->whereHas('area', function($query) use($area){
    //                     $query->where('area', $area);
    //                   })
    //                   ->get()
    //                   ->take(25);

    //   return response()->json(array('pelanggan' => $pelanggans), 200);
    // }

    // public function deleteuser(Request $request){
    //   $user = User::find($request->id);
    //   $user->delete();

    //   return redirect('admin');
    // }

    // public function addpelanggan(Request $request){

    // }

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

    public function tambahPelanggan(){

      
    }

}
