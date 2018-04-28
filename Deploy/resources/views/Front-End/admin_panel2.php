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
      <li><div class="nav-button" id="logout">Log Out</div></li>
    </ul>
  </div>
  <div class="page" id="Dashboard">
    Dashboard
  </div>
  <div class="page" id="Userm">
    User Management
    <div class="wrapper">
      <button type="button" name="add-user" class="btn add_user"><i class="fa fa-user-plus" aria-hidden="true"></i></button>
      <button type="button" name="del-user" class="btn del_user"><i class="fa fa-user-times" aria-hidden="true"></i></button>
      <button type="button" name="edit-user" class="btn edit_user"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
      <table class="user_list">
        <tr>
          <th><input type="checkbox" id="select_all"/></th>
          <th>Nama</th>
          <th>Id</th>
          <th>Password</th>
          <th>Level</th>
        </tr>
      </table>
    </div>
  </div>
  <div class="page" id="Customer">
    Customer
    <div class="wrapper">
      <button type="button" name="add-cust" class="btn add_cust"><i class="fa fa-user-plus" aria-hidden="true"></i></button>
      <button type="button" name="del-cust" class="btn del_cust"><i class="fa fa-user-times" aria-hidden="true"></i></button>
      <button type="button" name="edit-cust" class="btn edit_cust"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
      <table class="cust_list">
        <tr>
          <th><input type="checkbox" id="select_all"/></th>
          <th>Id</th>
          <th>Nama Pelanggan</th>
        </tr>
      </table>
    </div>
  </div>
  <div class="page" id="About">
    About
  </div>
  <div class="page" id="Developer">
    Developer
  </div>

  <div class="add_user_form">
    <h3><span></span> Pengguna</h3>
      <input type="number" name="add_user_id" id="add_user_id" value="" placeholder="Nomor Induk Pegawai">
      <input type="password" name="add_user_pass" id="add_user_pass" value="" placeholder="Password (default: pegawaiPLN)">
      <select name="cars" id="add_user_level">
        <option value="0">Pegawai</option>
        <option value="1">Admin</option>
      </select>
      <div class="form_button">
        <button type="button" name="cancel_add" id="cancel_add">Cancel</button>
        <button type="submit" name="submit_user" id="submit_user">Submit</button>
      </div>
  </div>

  <div class="add_cust_form">
    <h3><span></span> Pelanggan</h3>
      <input type="file" name="add_cust" id="add_cust_file" value="" accept=".xls,.xlsx">
      <label for="add_cust_file"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Add File
      </label><br>
      <div class="form_button">
        <button type="button" name="cancel_add" id="cancel_addc">Cancel</button>
        <button type="submit" name="submit_user" id="submit_cust">Submit</button>
      </div>
  </div>

  <div class="logout_box">

  </div>

  <script>
    $(function() {
      var curr = "Userm";
      var nama_form = "Lorem Ipsum";
      var id_form = "";
      var pass = "pegawaiPLN";
      var selected = 0;
      var selected_id = "";

      $('.page').hide();
      $('#'+curr).show();

      $('.nav-button[data-id='+curr+']').addClass("selected");

      $('.nav-button').on('click', function() {
        $('.nav-button').each(function() {
          $(this).removeClass("selected");
        })
        $(this).not('#logout').addClass("selected");
        $('#'+curr).hide();
        curr = $(this).data('id');
        $('#'+curr).show();
      })


      $('.select_all').prop('disabled', true);
      $('.del_user').prop('disabled', true);
      $('.edit_user').prop('disabled', true);
      $('#select_all').prop('disabled', true);

      $('.add_user').on('click', function() {
        $('.add_user_form').show().css('display', 'flex');
        $('.add_user_form').find('span').html('Tambah');
        $('#add_user_id').focus();
      })



      $('#cancel_addc').on('click', function() {
        $('.add_cust_form').hide();
        $('#add_cust_file').val("");
      })



      var add_cust = function( ) {
        var new_id = "09712";
        var new_name = "Budi";
        var new_unitap = "ABCDE";
        var new_alamat = "Jl. Jalan ke Surabaya";
        var new_tarif = "lorem ipsum";
        var new_daya = "80000";
        var new_fakm = "80000";
        var new_fakmvarh = "80000";
        var new_kdgardu = "Surabaya";
        var new_dlpd = "lorem ipsum";
        var new_dlpd_fakm = "lorem ipsum";
        var new_dlpd_inst = "lorem ipsum";

        $('.add_cust_form').show();
        $('.add_cust_form').find('span').html('Tambah');
        // $('#select_all').prop('disabled', false);

        //$('.cust_list').append('<tr id='+new_id+' class="cust"> <td><input type="checkbox" class="select_row"></td><td><input type="checkbox" class="opt">'+new_id+'</td><td>'+new_name+'</td></tr><tr class="cust_details_box"> <td colspan="3"> <div class="cust_details"> <table id="sub_table"> <tr> <td>unitap</td><td>'+new_unitap+'</td></tr><tr> <td>Alamat Pelanggan</td><td>'+new_alamat+'</td></tr><tr> <td>Tarif Pelanggan</td><td>'+new_tarif+'</td></tr><tr> <td>Daya Pelanggan</td><td>'+new_daya+'</td></tr><tr> <td>Fakm Pelanggan</td><td>'+new_fakm+'</td></tr><tr> <td>Fakmvarh Pelanggan</td><td>'+new_fakmvarh+'</td></tr><tr> <td>Kdgardu Pelanggan</td><td>'+new_kdgardu+'</td></tr><tr> <td>dlpd pelanggan</td><td>'+new_dlpd+'</td></tr><tr> <td>dlpd fkm pelanggan</td><td>'+new_dlpd_fakm+'</td></tr><tr> <td>dlpd instrumentasi pelanggan</td><td>'+new_dlpd_inst+'</td></tr></table> </div></td></tr>');
      }



      $('.add_cust').click(function() {
        add_cust();
      })

      $('#submit_user').click( function() {
        if ($('#add_user_id').val() != "" && $('#add_user_level').val() != ""){
          add_user($('#add_user_id').val(), pass, $('#add_user_level').val() );
        }
        else {
          alert("Isi data bro!");
        }
      })

      var selecting_rows = function() {

      }

      $('#select_all').on('change', function() {
        $('.select_row').prop("checked", $('#select_all').prop("checked"));
        $('.del_user').prop('disabled', !$('#select_all').prop("checked"));
        selected = $('.user_list input:checked').length - Number($('#select_all').prop("checked"));
        if (selected === 1) {
          $('.edit_user').prop('disabled', !$('#select_all').prop("checked"));
          // console.log($('#select_row:checked').parent().parent().attr("id"));
        }
        console.log($('.user_list input:checked').parent().attr('id'));
        console.log(selected);
      })

      $(document).on('click', '.select_row', function() {
        $('#select_all').prop("checked", false);
        if ($(this).prop('checked')) {
          selected++;
        }
        else {
          selected--;
        }
        console.log(selected);
        if (selected != 0 ) {
          if (selected == 1) {
            $('.del_user').prop('disabled', false);
            $('.edit_user').prop('disabled', false);
            selected_id = $(this).parent().parent().attr('id');
            console.log(selected_id);
          }
          else {
            $('.del_user').prop('disabled', false);
            $('.edit_user').prop('disabled', true);
          }
        }
        else {
          $('.del_user').prop('disabled', true);
          $('.edit_user').prop('disabled', true);
        }
      });

      $(document).on('click', '.cust td:not(:first-child)', function(e) {
        var opt = $('.opt');
        var parent = $(this).parent();
        opt.prop('checked', !opt.prop('checked') );
        if (opt.prop('checked')) {
          // $('.cust_details_box').show();
          parent.next().show();
          parent.css('border-bottom', 'none');
          parent.find('td').css('border-bottom', 'none');
        }
        else {
          //$('.cust_details_box').hide();
          parent.next().hide();
          parent.css('border-bottom', '1px solid #607D8B');
          parent.find('td').css('border-bottom', '1px solid #607D8B');
        }
      })


    })
  </script>
</body>
</html>
