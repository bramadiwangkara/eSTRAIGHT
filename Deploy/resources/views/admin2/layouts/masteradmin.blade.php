<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style_Admin2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <title>Admin Panel</title>
</head>
<body>
  <div class="nav">
    <ul>
      <li><div class="nav-button" data-id="Dashboard"><i class="fa fa-tachometer"></i></i>Dashboard</div></li>
      <li><div class="nav-button" data-id="Userm"><i class="fa fa-users"></i>Pegawai</div></li>
      <li><div class="nav-button" data-id="Customer">Pelanggan</div></li>
      <li><div class="nav-button" data-id="About">About</div></li>
      <li><div class="nav-button" data-id="Developer">Developer</div></li>
      <a href="admin2/workpage"><li><div class="nav-button" id="workpage">Workpage</div></li></a>
      <li><div class="nav-button" id="logout">Log Out</div></li>
    </ul>
  </div>
  <div class="page" id="Dashboard">
    Dashboard
  </div>
  <div class="page" id="Userm">
    @include('admin2.user_management')
  </div>

  <div class="page" id="Customer">
    @include('admin2.customers_management')
  </div>

  <div class="page" id="About">
    About
  </div>
  <div class="page" id="Developer">
    Developer
  </div>

  <script>
    $(function() {
      var curr = "Customer";

      $('.page').hide();
      $('#'+curr).show();

      $('.nav-button[data-id='+curr+']').addClass("selected");

      $('.nav-button:not(#logout, #workpage)').on('click', function() {
        $('.nav-button').each(function() {
          $(this).removeClass("selected");
        })
        $(this).addClass("selected");
        $('#'+curr).hide();
        curr = $(this).data('id');
        $('#'+curr).show();
      })
    });

  </script>
</body>
</html>
