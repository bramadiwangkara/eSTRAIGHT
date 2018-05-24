<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/style_Admin2.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <title>Admin Panel</title>
</head>
<body>
  <div class="nav">
      <img src="https://vectordesignlogo.files.wordpress.com/2015/03/d6416-logo2bpln.png?w=440" width="150px">
    <ul>
      <a href="{{ route('admin.dashboard') }}"><li><div class="nav-button" id="dashboard"><i class="fa fa-tachometer"></i></i><span id="user_name">{{ Auth::user()->nip }} </span></div></li></a>
      <a href="{{ route('admin.pegawai') }}"><li><div class="nav-button" id="pegawai"><i class="fa fa-users"></i>Pegawai</div></li></a>
      <a href="{{ route('admin.pelanggan') }}"><li><div class="nav-button" id="pelanggan">Pelanggan</div></li></a>
      <a href="{{ route('admin.about') }}"><li><div class="nav-button" id="about">About</div></li></a>
      <a href="{{ route('admin.version') }}"><li><div class="nav-button" id="version">Version</div></li></a>
      <a href="{{ route('workpage') }}"><li><div class="nav-button" id="workpage">Workpage</div></li></a>
      <a href="{{ route('logout') }}"><li><div class="nav-button" id="logout" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">Log Out</div></li></a>
    </ul>
  </div>
       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
       </form>
  <div class="page">
    @yield('content')
  </div>
</body>
</html>
