  Customer
  <div class="wrapper">
    <button type="button" name="add-cust" class="btn add_cust"><i class="fa fa-user-plus" aria-hidden="true"></i></button>
    <button type="button" name="del-cust" class="btn del_cust"><i class="fa fa-user-times" aria-hidden="true"></i></button>
    <button type="button" name="edit-cust" class="btn edit_cust"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
    <select class="customer_area_select" name="customer_area_select">
      <option value="Surabaya" class="option_area">Area 1</option>
      <option value="Gresik" class="option_area">Area 2</option>
      <option value="Lamongan" class="option_area">Area 3</option>
    </select>
    <table class="cust_list">
      <tr>
        <th><input type="checkbox" id="select_all"/></th>
        <th>Id</th>
        <th>Nama Pelanggan</th>
      </tr>
      <tr id='+new_id+' class="cust">
        <td><input type="checkbox" class="select_row"></td>
        <td><input type="checkbox" class="opt">'+new_id+'</td>
        <td>'+new_name+'</td>
      </tr>
      <tr class="cust_details_box">
        <td colspan="3">
          <div class="cust_details">
            <table id="sub_table">
              <tr>
                <td>unitap</td>
                <td>'+new_unitap+'</td>
              </tr>
              <tr>
                <td>Alamat Pelanggan</td>
                <td>'+new_alamat+'</td>
              </tr>
              <tr>
                <td>Tarif Pelanggan</td>
                <td>'+new_tarif+'</td>
              </tr>
              <tr>
                <td>Daya Pelanggan</td>
                <td>'+new_daya+'</td>
              </tr>
              <tr>
                <td>Fakm Pelanggan</td>
                <td>'+new_fakm+'</td>
              </tr>
              <tr>
                <td>Fakmvarh Pelanggan</td>
                <td>'+new_fakmvarh+'</td>
              </tr>
              <tr>
                <td>Kdgardu Pelanggan</td>
                <td>'+new_kdgardu+'</td>
              </tr>
              <tr>
                <td>dlpd pelanggan</td>
                <td>'+new_dlpd+'</td>
              </tr>
              <tr>
                <td>dlpd fkm pelanggan</td>
                <td>'+new_dlpd_fakm+'</td>
              </tr>
              <tr>
                <td>dlpd instrumentasi pelanggan</td>
                <td>'+new_dlpd_inst+'</td>
              </tr>
            </table>
          </div>
        </td>
      </tr>
    </table>
  </div>

<div class="add_cust_form_box">
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
</div>

<script>


var add_cust = function(cust) {

  var selected_rows_number = 0;
  var selected_rows_id = "";

  // add table Pelanggan to cust
  var cust = {
    new_id : "09712",
    new_name : "Budi",
    new_unitap : "ABCDE",
    new_alamat : "Jl. Jalan ke Surabaya",
    new_tarif : "lorem ipsum",
    new_daya : "80000",
    new_fakm : "80000",
    new_fakmvarh : "80000",
    new_kdgardu : "Surabaya",
    new_dlpd : "lorem ipsum",
    new_dlpd_fakm : "lorem ipsum",
    new_dlpd_inst : "lorem ipsum",
    new_jam_nyala: {
      jam_pemakaian: "20",
      bulan: "12",
      tahun: "2017"
    }
  };

  // console.log(cust['new_jam_nyala']['jam_pemakaian']);

  $('.add_cust_form_box').show();
  $('.add_cust_form_box').find('span').html('Tambah');
  // $('#select_all').prop('disabled', false);

  //$('.cust_list').append('<tr id='+new_id+' class="cust"> <td><input type="checkbox" class="select_row"></td><td><input type="checkbox" class="opt">'+new_id+'</td><td>'+new_name+'</td></tr><tr class="cust_details_box"> <td colspan="3"> <div class="cust_details"> <table id="sub_table"> <tr> <td>unitap</td><td>'+new_unitap+'</td></tr><tr> <td>Alamat Pelanggan</td><td>'+new_alamat+'</td></tr><tr> <td>Tarif Pelanggan</td><td>'+new_tarif+'</td></tr><tr> <td>Daya Pelanggan</td><td>'+new_daya+'</td></tr><tr> <td>Fakm Pelanggan</td><td>'+new_fakm+'</td></tr><tr> <td>Fakmvarh Pelanggan</td><td>'+new_fakmvarh+'</td></tr><tr> <td>Kdgardu Pelanggan</td><td>'+new_kdgardu+'</td></tr><tr> <td>dlpd pelanggan</td><td>'+new_dlpd+'</td></tr><tr> <td>dlpd fkm pelanggan</td><td>'+new_dlpd_fakm+'</td></tr><tr> <td>dlpd instrumentasi pelanggan</td><td>'+new_dlpd_inst+'</td></tr></table> </div></td></tr>');
  };

  var close_form = function() {
    $('.add_cust_form_box').hide();
  };

  $('.add_cust').click(function() {
    add_cust();
  });


  $('#cancel_addc').on('click', function() {
    close_form();
  });


  $('.add_cust_form_box').on('click', function() {
    close_form();
  });
  $('.add_cust_form_box *').on('click', function(e) {
    e.stopPropagation();
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
        $('.del_user').prop('disabled', false);
        $('.edit_user').prop('disabled', false);
        selected_rows_id = $(this).parent().parent().attr('id');
        // console.log(selected_rows_id);
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
    $('.del_cust').prop('disabled', true);
    $('.edit_cust').prop('disabled', true);
    $('#select_all').prop('disabled', true);


  })

</script>
