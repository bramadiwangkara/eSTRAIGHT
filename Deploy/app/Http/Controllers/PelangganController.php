<?php

namespace App\Http\Controllers;

use App\pelanggan;
use App\jam_nyala;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\LengthAwarePaginator;

use Lava;
use Excel;
use App;
use PDF;

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

    public function index2(Request $request)
    {
        return view('pelanggan.index2', ['pelanggans' => pelanggan::whereHas('jam_nyala', function($query){
            $query->where('bulan', '12')->where('tahun', '2013');
        })->paginate(25)]);
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
            $array = $reader->toArray();
            $ctr = 0;
            $sql = "";
            foreach ($array as $row) {
                // print_r($row);
                // echo "<br/>";
                // echo "<br/>";

                $alamat = trim($row["alamat"]);
                if($row["rt"] != null && $row["rt"] != 0)
                    $alamat = $alamat . " RT " . trim($row["rt"]);
                if($row["rw"] != null && $row["rw"] != 0)
                    $alamat = $alamat . " RW " . trim($row["rw"]);

                $sql .= "INSERT INTO pelanggans VALUES ('".$row["idpel"]."', '".$row["nama"]."', '".$alamat."', '".$row["tarif"]."', '".$row["daya"]."', '".$row["fakm"]."', '".$row["fakmkvarh"]."', '".$row["slalwbp"]."', '".$row["sahlwbp"]."', '".$row["slawbp"]."', '".$row["sahwbp"]."', '".$row["slakvarh"]."', '".$row["sahkvarh"]."', '".$row["pemkwh"]."', '".$row["unitup"]."', '".$row["kdgardu"]."', '".$row["dlpd"]."', '".$row["dlpd_fkm"]."', '".$row["dlpd_jnsmutasi"]."') ON DUPLICATE KEY UPDATE unitup='".$row["unitup"]."', nama='".$row["nama"]."', alamat='".$alamat."', tarif='".$row["tarif"]."', daya='".$row["daya"]."', fakm='".$row["fakm"]."', fakmvarh='".$row["fakmkvarh"]."', slalwbp='".$row["slalwbp"]."', sahlwbp='".$row["sahlwbp"]."', slawbp='".$row["slawbp"]."', sahwbp='".$row["sahwbp"]."', slakvarh='".$row["slakvarh"]."', sahkvarh='".$row["sahkvarh"]."', pemkwh='".$row["pemkwh"]."', kdgardu='".$row["kdgardu"]."', dlpd='".$row["dlpd"]."', dlpd_fkm='".$row["dlpd_fkm"]."', dlpd_jnsmutasi='".$row["dlpd_jnsmutasi"]."';";

                // $arr[$ctr] = array($row["idpel"], $row["unitap"], $row["nama"], $alamat, $row["tarif"], $row["daya"], $row["fakm"], $row["fakmkvarh"], $row["kdgardu"], $row["dlpd"], $row["dlpd_fkm"], $row["dlpd_jnsmutasi"]);

                // print_r($arr[$ctr]);
                // echo "<br/>";
                // echo "<br/>";

                // $ctr = $ctr + 1;
            }

            $conn = mysqli_connect("127.0.0.1", "root", "", "pln");
            if(!$conn)
                die("Connection failed: ".$conn->connect_error);

            if($conn->multi_query($sql) === TRUE)
                echo "yeay";
            else
                echo mysqli_error($conn);

            echo $sql;

            $conn->close();
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

    public function search(Request $request)
    {
        if($request->btn == "search")
            $pelanggan = pelanggan::where('id', 'LIKE', "%".$request->searchstring.'%')->paginate(25);
        else
            $pelanggan = pelanggan::paginate(25);
        return view('pelanggan.index2', ['pelanggans' => $pelanggan]);
    }

    public function tetap(Request $request)
    {
        $p = pelanggan::whereIn('id', jam_nyala::tetap($request->bulan, $request->tahun))->paginate(25)->appends(request()->input);
        if($request->btn == 'export')
        {
            Excel::create('test', function($excel){
                $excel->sheet('test', function($sheet){
                    $sheet->fromArray(pelanggan::get()->toArray(), null, 'A1', false, false);
                });
            })->export('xls');
        }
        return view('pelanggan.index2', ['pelanggans' => $p]);
            
    }

    public function turun(Request $request)
    {
        $jb = $request->jumlah_bulan;
        $bulan = $request->bulan;
        $tahun = $request->tahun;

        $having = '';
        for($i = 1; $i <= $jb; $i++){
            if($bulan == 1){
                $bulan_bef = 12;
                $tahun_bef = $tahun - 1;
            }
            else{
                $bulan_bef = $bulan - 1;
                $tahun_bef = $tahun;
            }


            $having .= 'SUM(IF(bulan = '.$bulan.' AND tahun = '.$tahun.', jam_nyala, null)) < 
                       SUM(IF(bulan = '.$bulan_bef.' AND tahun = '.$tahun_bef.', jam_nyala, null))';

            if($i != $jb)
                $having .= ' AND ';

            $bulan--;

            if($bulan == 0){
                $bulan = 12;
                $tahun--;
            }
        }

        $pelanggans = pelanggan::whereHas('jam_nyala', function($query) use($having){
            $query->groupBy('idpel')
                  ->havingRaw($having);
        })->paginate(25);

        return view('pelanggan.index2', ['pelanggans' => $pelanggans]);
    }

    public function pln(Request $request)
    {
        $bBawah = $request->bBawah;
        $bAtas = $request->bAtas;

        $bln_now = $request->bulan;
        $thn_now = $request->tahun;     

        if($bln_now == 1){
            $bln_bef = 12;
            $thn_bef = $thn_now - 1;
        }
        else{
            $bln_bef = $bln_now - 1;
            $thn_bef = $thn_now;
        }

        if($request->btn == '1')
        {
            $having = $bBawah. ' <= ((SUM(IF(bulan = '.$bln_now.' AND tahun = '.$thn_now.', jam_nyala, null)) / SUM(IF(bulan = '.$bln_bef.' AND '.$thn_bef.', jam_nyala, null))) - 1 ) * 100 AND ((SUM(IF(bulan = '.$bln_now.' AND tahun = '.$thn_now.', jam_nyala, null)) / SUM(IF(bulan = '.$bln_bef.' AND '.$thn_bef.', jam_nyala, null))) - 1 ) * 100 <= ' .$bAtas;

            $pelanggans = pelanggan::whereHas('jam_nyala', function($query) use($having){
                $query->groupBy('idpel')
                      ->havingRaw($having);
            })->paginate(25);

            return view('pelanggan.index2', ['pelanggans' => $pelanggans]);            
        }
        else if($request->btn == '3')
        {
            if($bln_bef == 1){
                $bln_bef2 = 12;
                $thn_bef2 = $thn_bef - 1;
            }
            else{
                $bln_bef2 = $bln_bef - 1;
                $thn_bef2 = $thn_bef;
            }

            $bln1 = 'SUM(IF(bulan = '.$bln_now.' AND tahun = '.$thn_now.', jam_nyala, null))';
            $bln2 = 'SUM(IF(bulan = '.$bln_bef.' AND tahun = '.$thn_bef.', jam_nyala, null))';
            $bln3 = 'SUM(IF(bulan = '.$bln_bef2.' AND tahun = '.$thn_bef2.', jam_nyala, null))';

            $dev1 = '(('.$bln2.' / '.$bln3.') - 1) * 100';
            $dev2 = '(('.$bln1.' / '.$bln3.') - 1) * 100';

            $having = $bBawah. ' <= ' .$dev2. ' AND ' .$dev2. ' <= ' .$bAtas. ' AND ' .$dev1. ' <= ' .$dev2;

            $pelanggans = pelanggan::whereHas('jam_nyala', function($query) use($having){
                $query->groupBy('idpel')
                      ->havingRaw($having);
            })->paginate(25);

            return view('pelanggan.index2', ['pelanggans' => $pelanggans]);
        }
    }

    public function chart(Request $request)
    {
        $id = $request->id;
        $pelanggan = pelanggan::find($id);

        Lava::DateFormat(['pattern' => 'MMMyy']);

        $table = Lava::Datatable();
        $table  ->addDateColumn('Bulan')
                ->addNumberColumn('Jam Nyala');

        for($i = 1; $i <= 12; $i++){
            $table->addRow(['2013-' . $i . '-1', $pelanggan->jam_nyala->where('bulan', $i)->first()['jam_nyala']]);
        }

        $title = $id . ' - ' . $pelanggan->nama;

        Lava::LineChart('sorek', $table, [
            'elementId' => 'chart',
            'title' => $title,
            'pointsize' => 100,
            'png' => true,
        ]);

        echo Lava::render('LineChart', 'sorek');

        return view('pelanggan.chart');
    }

    public function export(Request $request)
    {   
        $id = $request->id;
        $pelanggan = pelanggan::find($id);

        Lava::DateFormat(['pattern' => 'MMMyy']);

        $table = Lava::Datatable();
        $table  ->addDateColumn('Bulan')
                ->addNumberColumn('Jam Nyala');

        for($i = 1; $i <= 12; $i++){
            $table->addRow(['2013-' . $i . '-1', $pelanggan->jam_nyala->where('bulan', $i)->first()['jam_nyala']]);
        }

        $title = $id . ' - ' . $pelanggan->nama;

        Lava::LineChart('sorek', $table, [
            'elementId' => 'chart',
            'title' => $title,
            'pointsize' => 100,
            'png' => true,
        ]);

        echo Lava::render('LineChart', 'sorek');

        $pdf = PDF::loadview('pelanggan.chart', $table);
        return $pdf->download('chart.pdf');

        //return view('pelanggan.chart');
    }
}
