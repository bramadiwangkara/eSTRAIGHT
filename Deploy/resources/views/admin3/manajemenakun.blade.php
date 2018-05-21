@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard Admin </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   	<h2>Manajemen Akun</h2>
                    @include('admin/layouts/modal')
                   	<button class="btn btn-primary" data-toggle="modal" data-target="#addpegawai">Tambah Pegawai</button>
                   	<hr>

                   	<table class="table table-hover">
              		<thead>
              			<tr>
	              			<th>NIP</th>
	              			<th>Level</th>
	              			<th>Operation</th>
	              		</tr>
              		</thead>
              		<tbody>

              			@foreach ($datauser as $value)
              			<tr>
              			<td><a href="#">{{$value -> nip}}</a></td>
          				  <td>{{$value -> level}}</td>
             			<td>
              @include('admin/layouts/modalpass')
              <button class="btn btn-primary" data-toggle="modal" data-target="#{{$value->nip}}">Ubah Password</button>
							<a href="/admin/manajemenakun/delete/{{$value->nip}}" class="btn btn-danger" role="button">Delete</a>
             			</td>
             			</tr>
              			@endforeach
              		</tbody>


              	</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
