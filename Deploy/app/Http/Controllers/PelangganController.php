<?php

namespace App\Http\Controllers;

use App\pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Excel;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pelanggan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        // $rules = array(
        //     'file' => 'required',
        //     'num_records' => 'required',
        // );

        // $validatorFactory = app('Illuminate\Validation\Factory');
        // $validator = $validatorFactory->make(Input::all(), $rules);
        // //process the form
        // if($validator->fails())
        //     return redirect()->action('Controller@adminIndex');
        // else
        // {
        //     try{
        //         Excel::load(Input::file('file'), function($reader) {
        //             foreach ($reader->toArray() as $row) {
        //                 dd($row);
        //             }
        //         });
        //         \Session::flash('success', 'Users uploaded successfully.');
        //         return redirect(route('users.index'));
        //     } catch (\Exception $e) {
        //         \Session::flash('error', $e->getMessage());
        //         return redirect(route('users.index'));
        //     }
        
        // }

        $file = Input::file('file');
        $file_name = $file->getClientOriginalName();
        $file->move('files', $file_name);
        Excel::load("files/".$file_name, function($reader){
           foreach ($reader->toArray() as $row) {
                dd($row);
            } 
        });
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function show(pelanggan $pelanggan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function edit(pelanggan $pelanggan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pelanggan $pelanggan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function destroy(pelanggan $pelanggan)
    {
        //
    }
}
