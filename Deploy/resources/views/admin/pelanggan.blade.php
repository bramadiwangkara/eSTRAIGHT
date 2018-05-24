@extends('admin.layouts.masteradmin')
@section('content')
<div class="wrapper">
  <button type="button" name="add-cust" class="btn add_cust"><i class="fa fa-user-plus" aria-hidden="true"></i></button>
  <button type="button" name="del-cust" class="btn del_cust"><i class="fa fa-user-times" aria-hidden="true"></i></button>
  <button type="button" name="edit-cust" class="btn edit_cust"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
  <select class="customer_area_select" name="customer_area_select" id="customer_area_select">
    @foreach($area as $a)
        <option value="{{ $a->area }}" class="option_area">{{ $a->area }}</option>
    @endforeach
  </select>
  <table class="cust_list" id="cust_list">
  </table>
</div>

<div class="add_cust_form_box">
  <div class="add_cust_form">
    <h3><span></span> Pelanggan</h3>
    <form action="{{ route('admin.pelanggan.tambah') }}" method="post" enctype="multipart/form-data">
    <input type="hidden" value="{{ csrf_token() }}" name="_token" /><br>
    <input type="file" name="add_cust" value="" accept=".xls,.xlsx"/ id="add_cust_file">
     <label for="add_cust_file"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Add File
    </label><br>
    <div class="form_button">
      <button type="button" name="cancel_add" id="cancel_addc">Cancel</button>
      <button type="submit" name="submit_user" id="submit_cust">Submit</button>
    </div>
    </form>

    <!-- <form action="{{ route('admin.pelanggan.tambah') }}" method="POST" enctype="multipart/form-data">
      <input type="file" name="file">
    </form>
     -->
  </div>
</div>

<script>

var selected_rows_numberc = 0;
var selected_rows_idc = "";


var add_cust = function(cust) {


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
    var jn_id = parent.next().attr('id');
    var jn_val = '1';
    $('#jam_nyala_' + jn_val + '_' + jn_id).show();
    $('#bulan_' + jn_val + '_' + jn_id).show();
    $('#tahun_' + jn_val + '_' + jn_id).show();


  }
  else {
    //$('.cust_details_box').hide();
    parent.next().hide();
    parent.css('border-bottom', '1px solid #607D8B');
    parent.find('td').css('border-bottom', '1px solid #607D8B');
      $('.jam').hide();
  $('.bl').hide();
  $('.th').hide();

  }
});


$('#select_allc').on('change', function() {
  $('.select_rowc').prop("checked", $('#select_allc').prop("checked"));
  $('.del_cust').prop('disabled', !$('#select_allc').prop("checked"));
  selected_rows_numberc = $('.cust_list input:checked').length - Number($('#select_allc').prop("checked"));
  if (selected_rows_numberc <= 1) {
    $('.edit_cust').prop('disabled', !$('#select_allc').prop("checked"));
    // console.log($('#select_row:checked').parent().parent().attr("id"));
  }
  // console.log($('.cust_list input:checked').parent().attr('id'));
  // console.log(selected_rows_number);
})

$(document).on('click', '.select_rowc', function() {
  $('#select_allc').prop("checked", false);
  if ($(this).prop('checked')) {
    selected_rows_numberc++;
  }
  else {
    selected_rows_numberc--;
  }
  console.log(selected_rows_numberc);
  if (selected_rows_numberc != 0 ) {
    if (selected_rows_numberc == 1) {
      $('.del_cust').prop('disabled', false);
      $('.edit_cust').prop('disabled', false);
      selected_rows_idc = $(this).parent().parent().attr('id');
      // console.log(selected_rows_id);
    }
    else {
      $('.del_cust').prop('disabled', false);
      $('.edit_cust').prop('disabled', true);
    }
  }
  else {
    $('.del_cust').prop('disabled', true);
    $('.edit_cust').prop('disabled', true);
  }
});

var show_jam_nyala = function() {
  //asu 
}

$(document).on('change', '.jam_nyala_opt', function() {
  $('.jam').hide();
  // $('.bl').hide();
  // $('.th').hide();

  var jn_id = $(this).parent().parent().parent().parent().parent().parent().parent().attr('id');
  var jn_val = $(this).val();

  $('#jam_nyala_' + jn_val + '_' + jn_id).show();
  // $('#bulan_' + jn_val + '_' + jn_id).show();
  // $('#tahun_' + jn_val + '_' + jn_id).show();
});

$('#customer_area_select').on('change', function(){
  getPelanggan();
  $('.jam_nyala_opt').parent().css({
    'border-right': '1px solid #607D8B',
    'vertical-align': 'top'
  });

  // $('.jam').hide();
  // $('.bl').hide();
  // $('.th').hide();
});

function getPelanggan(){
    var area = $('#customer_area_select').val();
    $.ajax({
      url: "{{ route('admin.pelanggan.get') }}",
      data: {
        area: area
      },
      success: function(response){
        // console.log(response);
        $('#cust_list').html("<tr><th>Id</th><th>Nama Pelanggan</th></tr>");

        var pelanggan = response.pelanggan;
        $.each(pelanggan, function(index, val){
          // alert(index + " : " + value.id);

          var months = [ "Januari", "Februari", "Maret", "April", "Mei", "Juni", 
               "Juli", "Agustus", "September", "Oktober", "November", "Desember" ];

          var jamnyalaopt = "";
          var jamnyala = "";
          $.each(val.jam_nyala, function(index, val){
            jamnyalaopt += "<option value='"+ index +"'>"+ months[val.bulan-1] +" - "+ val.tahun +"</option>";
            jamnyala += "<td class='jam' style='display: none;' id='jam_nyala_"+ index +"_"+ val.idpel +"'>"+ val.jam_nyala +"</td>"
          });

          // console.log(jamnyala);

          var custlist = $('#cust_list').html();
          $('#cust_list').html(custlist +
                               "<tr class='cust'>" +
                               "<td><input type='checkbox' class='opt'>" + val.id + "</td>" +
                               "<td>" + val.nama + "</td>" +
                               "</tr>" +
                               "<tr class='cust_details_box' id='"+ val.id +"'>" +
                               "<td colspan='3'>" +
                               "<div class='cust_details'>" +
                               "<table class='sub_table'>" +
                               "<tr><td>Alamat</td><td colspan='2'>" + val.alamat + "</td></tr>" +
                               "<tr><td>Tarif</td><td colspan='2'>"+ val.tarif +"</td></tr>" +
                               "<tr><td>Daya</td><td colspan='2'>"+ val.daya +"</td></tr>" +
                               "<tr><td>Fakm</td><td colspan='2'>"+ val.fakm +"</td></tr>" +
                               "<tr><td>Fakmvarh</td><td colspan='2'>"+ val.fakmvarh +"</td></tr>" +
                               "<tr><td>Unitup</td><td colspan='2'>"+ val.unitup +"</td></tr>" +
                               "<tr><td>Kdgardu</td><td colspan='2'>"+ val.kdgardu +"</td></tr>" +
                               "<tr><td>DLPD</td><td colspan='2'>"+ val.dlpd +"</td></tr>" +
                               "<tr><td>DLPD FKM</td><td colspan='2'>"+ val.dlpd_fkm +"</td></tr>" +
                               "<tr><td>DLPD Jenis Mutasi</td><td colspan='2'>"+ val.dlpd_jnsmutasi +"</td></tr>" +
                               "<tr>" +
                               "<td rowspan='3'><select class='jam_nyala_opt'>"+ jamnyalaopt +"</select></td>"+
                               "<td>Jam Nyala</td>" + jamnyala +
                               "</tr>" +
                               "</table>" +
                               "</div>" +
                               "</td>" +
                               "</tr>");
        });
      }
    });
}

// WHEN DOCUMENT IS READY
$(function() {
  $('.del_cust').prop('disabled', true);
  $('.edit_cust').prop('disabled', true);
  //$('#select_allc').prop('disabled', true);


  $('.jam_nyala_opt').parent().css({
    'border-right': '1px solid #607D8B',
    'vertical-align': 'top'
  });

  $('.jam').hide();
  $('.bl').hide();
  $('.th').hide();

  getPelanggan();
  // $('.jam').next().hide();
  // $('.bl').next().hide();
  // $('.th').next().hide();
})

</script>

@endsection