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

    public function adduser(Request $request){
      $newadmin = new User();
      $newadmin->nip = $request->nip;
      $newadmin->password = $request->password;
      $newadmin->level = $request->level;

      $newadmin->save();

      $datauser = User::all();
      // return view('admin2.layouts.masteradmin', ['datauser' => $datauser]);
        return redirect('admin');
    }

    public function deleteuser(Request $request){
      $user = User::find($request->id);
      $user->delete();

      return redirect('admin');
    }

    public function addpelanggan(Request $request){

    }
}
