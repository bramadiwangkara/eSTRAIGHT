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

<div class="add_user_form_box">
  <div class="add_user_form">
    <h3><span></span> Pengguna</h3>
    <input type="number" name="add_user_id" id="add_user_id" value="" placeholder="Nomor Induk Pegawai">
    <input type="password" name="add_user_pass" id="add_user_pass" value="" placeholder="Password (default: pegawaiPLN)">
    <div>
      <input type="checkbox" name="add_user_pass_show" id="add_user_pass_show">
      <label for="add_user_pass_show"><i class="fa fa-eye" aria-hidden="true"></i> Show Password</label>
    </div>
    <select name="cars" id="add_user_level">
      <option value="0">Pegawai</option>
      <option value="1">Admin</option>
    </select>
    <div class="form_button">
      <button type="button" name="cancel_add" id="cancel_add">Cancel</button>
      <button type="submit" name="submit_user" id="submit_user">Submit</button>
    </div>
  </div>
</div>

<script>

  var pass = "default";
  var nama_form = "Lorem Ipsum";
  var selected_rows_number = 0;
  //var selected_rows_id = "";

  $('.add_user').on('click', function() {
    $('.add_user_form_box').show();
    $('.add_user_form').find('span').html('Tambah');
    $('#add_user_id').prop('disabled', false);
    $('#add_user_level').prop('disabled', false);
    $('#add_user_id').focus();
  })

  var clear_form = function() {
    $('#add_user_id').val("");
    // $('#add_user_pass').val("default");
  }

  var add_user = function(new_id, new_pass, new_level) {
    $('.add_user_form_box').hide();
    // $.ajax({
    //   url:'conn/set_user.php',
    //   method: 'POST',
    //   dataType: 'text',
    //   data: {
    //     key: 'addNew',
    //     user_id: new_id,
    //     user_name: nama_form,
    //     user_password: new_pass,
    //     user_level: new_level
    //   }, success: function(response) {
    //     alert(response);
    //   }
    // });
    var level_text = Boolean(Number(new_level)) ? 'Admin' : 'Pegawai';

    $('.user_list').append("<tr id="+new_id+"><td><input type='checkbox' class='select_row' value="+new_id+"></td><td class='table_user_name'>"+nama_form+"</td><td class='table_user_id'>"+new_id+"</td><td class='table_user_pass'>"+new_pass+"</td><td class='table_user_level'>"+new_level+" ("+level_text+")</td></tr>")
    $('#select_all').attr('disabled', false);
    clear_form();
  }

  var close_form = function() {
    $('.add_user_form_box').hide();
    clear_form();
  }

  $('#submit_user').on('click', function() {
    if ($('#add_user_id').val() != "" && $('#add_user_level').val() != ""){
      add_user($('#add_user_id').val(), pass, $('#add_user_level').val() );
      close_form();
    }
    else {
      alert("Please fill the form!");
    }
  })


  $('#cancel_add').on('click', function() {
    close_form();
  });

  $('.add_user_form_box').on('click', function() {
    close_form();
  });
  $('.add_user_form_box *').on('click', function(e) {
    e.stopPropagation();
  });

  $('.edit_user').on('click', function() {
    $('.add_user_form_box').show();
    $('.add_user_form').find('span').html('Edit');
    $('#add_user_pass').focus();
    // console.log($('#'+selected_rows_id+">.table_user_name").html());
    $('#add_user_id').val($('#'+selected_rows_id+" .table_user_id").html());
    $('#add_user_pass').val($('#'+selected_rows_id+" .table_user_pass").html());
    $('#add_user_id').prop('disabled', true);
    $('#add_user_level').prop('disabled', true);

  });


  $('.del_user').on('click', function() {
    if (confirm("Are you Sure?")) {
      // for (var i = 0; i < )
      // console.log('hapus user');
    }
  });

  $('#add_user_pass_show').on('click', function() {
    $('#add_user_pass').attr('type', $('#add_user_pass_show').prop('checked') ? 'text' : 'password' );
  })

  $(document).on('click', '.select_row', function() {
    $('#select_all').prop("checked", false);
    if ($(this).prop('checked')) {
      selected_rows_number++;
    }
    else {
      selected_rows_number--;
    }
    // console.log(selected_rows_number);
    if (selected_rows_number != 0 ) {
      if (selected_rows_number == 1) {
        $('.del_user').prop('disabled', false);
        $('.edit_user').prop('disabled', false);
        selected_rows_id = $(this).parent().parent().attr('id');
        console.log(selected_rows_id);
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




  // WHEN DOCUMENT IS READY
  $(function() {
    $('.del_user').prop('disabled', true);
    $('.edit_user').prop('disabled', true);
    $('#select_all').prop('disabled', true);

    // add user from database

  });


</script>
