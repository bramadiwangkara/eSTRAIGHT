@extends('admin.layouts.masteradmin')
@section('content')
<div class="wrapper">
  <button type="button" name="add-user" class="btn add_user"><i class="fa fa-user-plus" aria-hidden="true"></i></button>
  <!-- <form method="GET" action="">
    <input type="hidden" id="id_user" name="id" value="">
    <button type="submit" class="btn del_user"><i class="fa fa-user-times" aria-hidden="true"></i></button>
  </form> -->
  <!-- <button type="button" name="edit-user" class="btn edit_user"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button> -->
  <table class="user_list">
    <tr>
      <!-- <th><input type="checkbox" id="select_all"/></th> -->
      <!-- <th>Id</th> -->
      <th>NIP</th>
      <th>Level</th>
      <th>Opsi</th>
    </tr>
    <tbody>

      @foreach ($datauser as $value)

      <tr>
      <!-- <td><input type="checkbox" class="select_row" id="{{$value-> id}}"/></td> -->
      <!-- <td><a href="#"></a></td> -->
      <td>{{$value -> nip}}</td>
    <td>
      @if($value->level== 0)
        Pegawai
      @else
        Admin
      @endif
    </td>
    <td>
      <button type="button" name="add-user" class="btn del_user" id="{{ $value->id }}" style="color:crimson;"><i class="fa fa-user-times" aria-hidden="true"></i></button>
      <button type="button" name="edit-user" class="btn edit_user" id="{{ $value->nip }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
    </td>
    </tr>
      @endforeach
    </tbody>
  </table>
</div>

<div class="add_user_form_box">
  <div class="add_user_form">
    <h3><span></span> Pengguna</h3>
    <form method="post" action="{{ route('admin.pegawai.tambah') }}" >
      @csrf
      <input type="number" name="nip" id="nip" value="" placeholder="Nomor Induk Pegawai">
      <input type="password" name="password" id="password" value="" placeholder="Password (default: pegawaiPLN)">
      <div>
        <input type="checkbox" name="add_user_pass_show" id="add_user_pass_show">
        <label for="add_user_pass_show"><i class="fa fa-eye" aria-hidden="true"></i> Show Password</label>
      </div>
      <select name="level" id="level">
        <option value="0">Pegawai</option>
        <option value="1">Admin</option>
      </select>
      <div class="form_button">
        <button type="button" name="cancel_add" id="cancel_add">Cancel</button>
        <button type="submit" name="submit_user" id="submit_user">Submit</button>
<!--         <button type="submit" >Tambah</button> -->
      </div>
    </form>
  </div>
</div>

<div class="edit_user_form_box">
  <div class="edit_user_form">
    <h3><span></span> Pengguna</h3>
    <form method="post" action="{{ route('admin.pegawai.edit') }}" >
      @csrf
      <input type="number" name="nip" id="edit_user_id" value="" readonly>
      <input type="password" name="password" id="edit_user_password" value="" placeholder="Password (default: pegawaiPLN)">
      <div>
        <input type="checkbox" name="edit_user_pass_show" id="edit_user_pass_show">
        <label for="edit_user_pass_show"><i class="fa fa-eye" aria-hidden="true"></i> Show Password</label>
      </div>
      <select name="level" id="edit_user_level">
        <option value="0">Pegawai</option>
        <option value="1">Admin</option>
      </select>
      <div class="form_button">
        <button type="button" name="cancel_edit" id="cancel_edit">Cancel</button>
        <button type="submit" id="sumbit_edit">Submit</button>
      </div>
    </form>
</div>
</div>



<script>

  var pass = "default";
  var nama_form = "Lorem Ipsum";
  var selected_rows_number = 0;
  var selected_rows_id = "";

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
  };
  var clear_form_edit = function() {
    $('#edit_user_id').val("");
    $('#edit_user_password').val("");
  };

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

  var close_form_edit = function(){
    $('.edit_user_form_box').hide();
    clear_form_edit();
  }

  $('#submit_user').on('click', function() {
    if ($('#add_user_id').val() != "" && $('#add_user_level').val() != ""){
      add_user($('#add_user_id').val(), pass, $('#add_user_level').val() );
      close_form();
    }
    else {
      alert("Please fill the form!");
    }
  });

  $('#cancel_add').on('click', function() {
    close_form();
  });

  $('#cancel_edit').on('click', function(){
    close_form_edit();
  });

  $('.add_user_form_box').on('click', function() {
    close_form();
  });
  $('.add_user_form_box *').on('click', function(e) {
    e.stopPropagation();
  });

  $('.edit_user').on('click', function() {
    var id = $(this).attr('id');
    $('.edit_user_form_box').show();
    $('.edit_user_form').find('span').html('Tambah');
    $('#edit_user_id').val(id)
    $('#edit_user_level').prop('disabled', false);
    $('#edit_user_id').focus();
  });


  $('.del_user').on('click', function() {
    if (confirm("Are you Sure?")) {
      var id = $(this).attr('id');
      window.location =  "/admin/manajemenpegawai/hapus/" + id;
    }
  });

  $('#add_user_pass_show').on('click', function() {
    $('#password').attr('type', $('#add_user_pass_show').prop('checked') ? 'text' : 'password' );
  });

  $('#edit_user_pass_show').on('click', function() {
    $('#edit_user_password').attr('type', $('#edit_user_pass_show').prop('checked') ? 'text' : 'password' );
  });

  $('#select_all').on('change', function() {
    $('.select_row').prop("checked", $('#select_all').prop("checked"));
    // $('.del_user').prop('disabled', !$('#select_all').prop("checked"));
    selected_rows_number = $('.user_list input:checked').length - Number($('#select_all').prop("checked"));
    if (selected_rows_number <= 1) {
      // $('.edit_user').prop('disabled', !$('#select_all').prop("checked"));
      // console.log($('#select_row:checked').parent().parent().attr("id"));
    }
    // console.log($('.user_list input:checked').parent().attr('id'));
    // console.log(selected);
  });

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
        // $('.del_user').prop('disabled', false);
        // $('.edit_user').prop('disabled', false);
        selected_rows_id = $(this).parent().parent().attr('id');
        // console.log(selected_rows_id);
      }
      else {
        // $('.del_user').prop('disabled', false);
        // $('.edit_user').prop('disabled', true);
      }
    }
    else {
      // $('.del_user').prop('disabled', true);
      // $('.edit_user').prop('disabled', true);
    }
  });




  // WHEN DOCUMENT IS READY
  $(function() {
    // $('.del_user').prop('disabled', true);
    // $('.edit_user').prop('disabled', true);
    $('#select_all').prop('disabled', true);

    // add user from database

  });


</script>
@endsection
