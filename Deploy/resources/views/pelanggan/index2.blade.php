@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            	<form action="{{ route('pelanggansearch') }}" method="GET">
            		<input type="text" name="searchstring"/>
            		<button type="submit" name="btn" value='search'>Submit</button>
            		<button type="submit" name="btn" value='clear'>Clear</button>
            	</form>

            	<form action="{{ route('pelangganturun') }}" method="GET">
            		<input type="number" min="1" max="12" name="jumlah_bulan">
            		<input type="hidden" name="bulan" value="12">
            		<input type="hidden" name="tahun" value="2013">
            		<button type="submit">Turun X bulan</button>
            	</form>

            	<form action="{{ route('pelanggantetap') }}" method="GET">
            		<input type="hidden" name="bulan" value="12">
            		<input type="hidden" name="tahun" value="2013">
            		<button type="submit" name="btn" value="query">Pelanggan Tetap</button>
            		<button type="submit" name="btn" value="export">Export</button>
            	</form>

            	<form action="{{ route('chart') }}" method="GET">
            		<label>IDPEL : </label>
            		<input type="text" name="id"/>
            		<button type="submit">Chart</button>
            	</form>

            	<form action="{{ route('pln') }}" method="GET">
            		<input type="hidden" name="bulan" value="12">
            		<input type="hidden" name="tahun" value="2013">
            		<label>Batas Bawah : </label>
            		<input type="number" name="bBawah">
            		<label>Batas Atas : </label>
            		<input type="number" name="bAtas">
            		<button type="submit" name="btn" value="1">1 Bulan</button>
            		<button type="submit" name="btn" value="3">3 Bulan</button>
            	</form>

                <div class="card-body">
                	<table class="table table-responsive table-condensed table-hover" style="white-space: nowrap;">
                		<tr>
                			<th>IDPEL</th>
                			<th>NAMA</th>
                			<th>ALAMAT</th>
                			<th>TARIF</th>
                			<th>DAYA</th>
                			<th>FAKM</th>
                			<th>FAKMVARH</th>
                			@for($i=1; $i<=12; $i++)
								<th>{{ strtoupper(date('My', mktime(0, 0, 0, $i, 1, 2013))) }}</th>
                			@endfor
                			<th>SLALWBP</th>
                			<th>SAHLWBP</th>
                			<th>SLAWBP</th>
                			<th>SAHWBP</th>
                			<th>SLAKVARH</th>
                			<th>SAHKVARH</th>
                			<th>PEMKWH</th>
                			<th>UNITUP</th>
                			<th>KDGARDU</th>
                			<th>DLPD</th>
                			<th>DLPD_FKM</th>
                			<th>DLPD_JNSMUTASI</th>
                		</tr>
                    @foreach($pelanggans as $p)
                    	<tr>
                    		<td>{{ $p->id }}</td>
                    		<td>{{ $p->nama }}</td>
                    		<td>{{ $p->alamat }}</td>
                    		<td>{{ $p->tarif }}</td>
                    		<td>{{ $p->daya }}</td>
                    		<td>{{ $p->fakm }}</td>
                    		<td>{{ $p->fakmvarh }}</td>
                    			@for($i = 1; $i <= 12; $i++)
                    				@if(!empty($p->jam_nyala->where('bulan', $i)->first()['jam_nyala']))
                    					<td>{{ $p->jam_nyala->where('bulan', $i)->first()['jam_nyala'] }} </td>
	                    			@else
    	                				<td>-</td>
        	            			@endif
        	            		@endfor
                    		<td>{{ $p->slalwbp }}</td>
                    		<td>{{ $p->sahlwbp }}</td>
                    		<td>{{ $p->slawbp }}</td>
                    		<td>{{ $p->sahwbp }}</td>
                    		<td>{{ $p->slakvarh }}</td>
                    		<td>{{ $p->sahkvarh }}</td>
                    		<td>{{ $p->pemkwh }}</td>
                    		<td>{{ $p->unitup }}</td>
                    		<td>{{ $p->kdgardu }}</td>
                    		<td>{{ $p->dlpd }}</td>
                    		<td>{{ $p->dlpd_fkm }}</td>
                    		<td>{{ $p->dlpd_jnsmutasi }}</td>
                    	</tr>
                    @endforeach
                    </table>
                </div>

                {{ $pelanggans->appends(request()->input())->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
