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

class adminController extends Controller
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function adminhome(){
      $datauser = User::all();

      $pelanggans = pelanggan::whereHas('jam_nyala', function($query){
        $query->where('bulan', '12')->where('tahun', '2013');
      })->get()->take(25);

        return view('admin2.layouts.masteradmin', ['datauser' => $datauser, 'pelanggans' => $pelanggans]); 
    }

    public function workpage(){
      $bjn_thn = jam_nyala::select('tahun')->groupBy('tahun')->get();
      $bjn_bln = jam_nyala::selectRaw('bulan')
                              ->groupBy('bulan')
                              ->groupBy('tahun')
                              ->havingRaw('tahun=MAX(tahun)')
                              ->get();

      return view('admin2.workpage', ['bjn_thn' => $bjn_thn, 'bjn_bln' => $bjn_bln]);
    }

    public function adduser(Request $request){
      $newadmin = new User();
      $newadmin->nip = $request->nip;
      $newadmin->password = $request->password;
      $newadmin->level = $request->level;

      $newadmin->save();

      $datauser = User::all();
      // return view('admin2.layouts.masteradmin', ['datauser' => $datauser]);
        return redirect('admin2');
    }
}
