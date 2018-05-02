<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\User;


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

    public function passwordakun(Request $request){
      $calon = User::where('nip', $request->nip)->first();
      $calon -> password = $request->new_password;
      $calon->save();

      return redirect()->route('manajemenakun')->with('alert-success', 'Password Berhasil Diubah.');
    }

    public function deleteakun($id){
      $calon = User::where('nip', $id)->delete();
      $datauser = User::all();
      return view('admin.manajemenakun', ['datauser' => $datauser]);
    }
}
