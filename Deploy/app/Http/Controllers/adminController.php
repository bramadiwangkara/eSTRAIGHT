<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\User;

class adminController extends Controller
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function adminhome(){
      $datauser = User::all();
        return view('admin2.layouts.masteradmin', ['datauser' => $datauser]);
    }

    public function workpage(){
      return view('admin2.workpage');
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
