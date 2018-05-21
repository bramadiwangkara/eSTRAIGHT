<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\User;
use App\jam_nyala;


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
      $bjn_thn = jam_nyala::select('tahun')->groupBy('tahun')->get();
      $bjn_bln = jam_nyala::selectRaw('bulan')
                              ->groupBy('bulan')
                              ->groupBy('tahun')
                              ->havingRaw('tahun=MAX(tahun)')
                              ->get();

      return view('workpage', ['bjn_thn' => $bjn_thn, 'bjn_bln' => $bjn_bln]);
    }
}
