@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('tambahdata') }}" method="post" enctype="multipart/form-data">
                        <label>Upload file : </label><br>
                        <input type="file" name="file" /><br>
                        <input type="hidden" value="{{ csrf_token() }}" name="_token" /><br>
                        <input type="submit" value="Upload"><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
