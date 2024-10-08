@extends('template')
@section('content')
<!-- Content Header (Page header) -->

    <!-- Default box -->
    <br>
    @if(session('info'))
      <p class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ session('success') }}</p>
    @endif

    @if(session('success'))
      <p class="alert alert-success" style="background-color: blue;"><button type="button" class="close" data-dismiss="alert">×</button>{{ session('success') }}</p>
    @endif

    @if(session('error'))
      <p class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>{{ session('error') }}</p>
    @endif

    @if (count($errors) > 0)
      @foreach ($errors->all() as $error)
        <p class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>{{ $error }}</p>
      @endforeach
    @endif
    <div class="card card-success">
      <div class="card-header">
        <h3 class="card-title">Header Form</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->

      <form class="form-horizontal" action="{{ route('trHeaderTanjungOutKabuauDrt.add') }}" method="POST">
         @csrf
        <div class="card-body">          
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label>No LPT</label>
                  <input type="text" class="form-control" id="no_tpn_out" name="no_tpn_out" placeholder="" value="LPT/720/{{ App\Http\Controllers\UserController::getNewNoTpkOut('720'); }}-OUT">
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group">
                <label>Tanggal</label>
                  <input type="text" class="form-control" name="tgl_input_tpn_out" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask>                
              </div>
            </div>
            <div class="col-sm-1">
              <div class="form-group">
                <label>Trip</label>
                  <input type="text" class="form-control" id="trip" name="trip" placeholder="" value="">
              </div>
            </div>           
            <div class="col-sm-2">
              <div class="form-group">
                <label>Lokasi</label>                
                  <input type="text" class="form-control" name="" value="Tanjung" disabled>
                  <input type="hidden" name="lokasi_tpn" id="lokasi_tpn" value="720">                
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group">
                <label>Tujuan</label>                
                  <input type="text" class="form-control" name="" value="Kabuau Drt" disabled>
                  <input type="hidden" name="tujuan" id="tujuan" value="730">                
              </div>
            </div>
            <input type="hidden" class="form-control" id="kode_periode" name="kode_periode" value="{{ App\Http\Controllers\UserController::getKodePeriodeOperasional(); }}">             
          </div>
          <div class="row">            
            <div class="col-sm-2">
              <div class="form-group">
                <label>Opt Muat</label>
                  <select class="form-control select2" name="optMuat" id="optMuat" style="width: 100%;">
                    <option value="" selected="selected">-- Operator --</option>
                    @foreach ($driver as $drv)
                      <option value="{{ $drv->kode_driver }}">{{ $drv->nama_driver }}</option>
                    @endforeach
                  </select>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group">
                <label>Unit</label>
                  <select class="form-control select2" name="muatUnit" id="muatUnit" style="width: 100%;">
                    <option value="" selected="selected">-- Unit --</option>
                    @foreach ($unitAlat as $ual)
                      <option value="{{ $ual->kode_unit_a }}">{{ $ual->nomor_pintu }}</option>
                    @endforeach
                  </select>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group">
                <label>Opt Bongkar</label>
                  <select class="form-control select2" name="optBongkar" id="optBongkar" style="width: 100%;">
                    <option value="" selected="selected">-- Operator --</option>
                    @foreach ($driver as $drv)
                      <option value="{{ $drv->kode_driver }}">{{ $drv->nama_driver }}</option>
                    @endforeach
                  </select>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group">
                <label>Unit</label>
                  <select class="form-control select2" name="bongkarUnit" id="bongkarUnit" style="width: 100%;">
                    <option value="" selected="selected">-- Unit --</option>
                    @foreach ($unitAlat as $ual)
                      <option value="{{ $ual->kode_unit_a }}">{{ $ual->nomor_pintu }}</option>
                    @endforeach
                  </select>
              </div>
            </div> 
            <div class="col-sm-2">
              <div class="form-group">
                <label>Opt Angkut</label>
                  <select class="form-control select2" name="optAngkut" id="optAngkut" style="width: 100%;">
                    <option value="" selected="selected">-- Operator --</option>
                    @foreach ($driverAng as $drv)
                      <option value="{{ $drv->kode_driver }}">{{ $drv->nama_driver }}</option>
                    @endforeach
                  </select>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group">
                <label>Unit</label>
                  <select class="form-control select2" name="angkutUnit" id="angkutUnit" style="width: 100%;">
                    <option value="" selected="selected">-- Unit --</option>
                    @foreach ($unitAlatAng as $ual)
                      <option value="{{ $ual->kode_unit_a }}">{{ $ual->nomor_pintu }}</option>
                    @endforeach
                  </select>
              </div>
            </div>
            <input type="hidden" class="form-control" id="kode_periode" name="kode_periode" value="{{ App\Http\Controllers\UserController::getKodePeriodeOperasional(); }}">             
          </div>
        <!-- /.card-body -->
        </div>
        <div class="card-footer">
          <button type="submit" id="addBtn" class="btn btn-success">Simpan</button>
          <button type="button" id="clear" class="btn btn-warning" style="color: white;">Clear</button>
        </div>
        <!-- /.card-footer -->
      </form>              
    </div>
      <!-- /.card -->
    
    <div class="card">
      <!-- /.card-header -->
      <div class="card-body">
        <table id="trHeaderTanjungOutKabuauDrt" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>No LSD Out</th>
            <th>Tanggal</th>
            <th>Trip</th>
            <th>Tujuan</th>
            <th>Op.Muat</th>
            <th>Unit Muat</th>
            <th>Op.Bongkar</th>
            <th>Unit Bongkar</th>
            <th>Op.Angkut</th>
            <th>Unit Angkut</th>  
            <th>Action</th>
          </tr>
          </thead>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
    <!-- Modal -->
    <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Warning !!!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('trHeaderTanjungOutKabuauDrtDestroy.del') }}" method="post">
                  {{ csrf_field() }}
                  <div class="modal-body">
                      Apakah Anda yakin akan menghapus
                      <span id="id-destroy2"></span> ?
                      <input type='hidden' name='del_id' id='id-destroy'>
                      <input type='hidden' name='notpn_del' id='notpn_del'>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                      <button type="submit" class="btn btn-danger">Ya</button>
                  </div>
                </form>
            </div>
        </div>
    </div>
@stop
@section('custom-js')
<script type="text/javascript">
var table; // Declare table variable in global scope
$(document).ready(function() {
  $('#trHeaderTanjungOutKabuauDrt').DataTable({
      responsive: true,
      processing: true,
      serverSide: true,
      ajax: '{!! route('trHeaderTanjungOutKabuauDrt.data') !!}', // memanggil route yang menampilkan data json
      columns: 
      [
          { // mengambil & menampilkan kolom sesuai tabel database
              data: 'no_tpn_out',
              name: 'no_tpn_out'
          },
          {
              data: 'tgl_input_tpn_out',
              name: 'tgl_input_tpn_out'
          },
          {
              data: 'trip',
              name: 'trip'
          },
          {
              data: 'nama_lokasi',
              name: 'nama_lokasi'
          },
          {
              data: 'md',
              name: 'md'
          },
          {
              data: 'mua',
              name: 'mua'
          },
          {
              data: 'mdb',
              name: 'mdb'
          },
          {
              data: 'muab',
              name: 'muab'
          },
          {
              data: 'mda',
              name: 'mda'
          },
          {
              data: 'muaa',
              name: 'muaa'
          },
          {
              data: 'action',
              name: 'action',
              orderable: false, 
              searchable: false
          }
      ],
      
  });

  $('#trHeaderTanjungOutKabuauDrt').on('click', '.item-edit', function() {
      var id = $(this).attr('onclick').match(/\d+/)[0]; // Mendapatkan ID dari tombol edit
      
      // Ambil data berdasarkan ID
      $.ajax({
          url: 'trHeaderTanjungOutKabuauDrt/' + id + '/edit',
          method: 'GET',
          success: function(response) {
              // Isi form dengan data yang diterima dari response
              $('#no_tpn_out').val(response.no_tpn_out);
              $('input[name="tgl_input_tpn_out"]').val(response.tgl_input_tpn_out);
              $('#trip').val(response.trip);
              $('#optMuat').val(response.optMuat).trigger('change');
              $('#muatUnit').val(response.muatUnit).trigger('change');
              $('#optBongkar').val(response.optBongkar).trigger('change');
              $('#bongkarUnit').val(response.bongkarUnit).trigger('change');
              $('#optAngkut').val(response.optAngkut).trigger('change');
              $('#angkutUnit').val(response.angkutUnit).trigger('change');
              $('#kode_periode').val(response.kode_periode);

              $('#no_tpn_out').prop('readonly', true);
              // Ubah action form menjadi update dengan method POST
              $('form').attr('action', 'trHeaderTanjungOutKabuauDrt/' + id);
              $('form').append('<input type="hidden" name="_method" value="PUT">');
              
              // Ubah label tombol menjadi 'Ubah'
              $('#addBtn').text('Ubah');
          }
      });
  });  

  // Reset form to its original state
  $('#clear').on('click', function() {
      $('form').trigger('reset');
      $('form').attr('action', '{{ route("trHeaderTanjungOutKabuauDrt.add") }}');
      $('form select').each(function() {
        $(this).val($(this).find('option:first').val()).trigger('change');
      });
      $('#no_tpn_out').prop('readonly', false);
      $('input[name="_method"]').remove();
      $('#addBtn').text('Simpan');
  });


  // Reset form after successful update
  $('form').on('submit', function() {
      setTimeout(function() {
          $('form').trigger('reset');
          $('form').attr('action', '{{ route("trHeaderTanjungOutKabuauDrt.add") }}');
          $('input[name="_method"]').remove();
          $('#addBtn').text('Simpan');
      }, 1000); // Adjust delay as needed
  });

});


</script>
@stop