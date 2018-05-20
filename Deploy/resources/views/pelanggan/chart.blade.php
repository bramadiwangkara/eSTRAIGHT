@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <!-- <div id='stocks-chart'>
                @linechart('sorek', 'stocks-chart')
                </div> -->
                <div id='chart'>
                </div>
                <form action="{{ route('export') }}" method="GET">
                    <input type="hidden" name="id" value= "{{ $_GET['id'] }}">
                    <button type="submit">Export</button>
                </form>
        </div>
    </div>
</div>
@endsection
