@extends('layout.v_template')
@section('title','Input Tagihan User | Admin')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>TAMBAH TAGIHAN USER</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Tagihan User</h3>
            </div>
            {{-- akhir judul --}}

            <div class="card-body">

                <form action="/tagihan/insert_tagihan" method="POST">
                    @csrf

                    <div class="content">
                        <div class="row">

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>USER</label>
                                    <select name="id_user" id="id_user" class="form-control">
                                      <option value="">--- PILIH USER ---</option>
                                      @foreach ( $user as $value)
                                      <option value="{{ $value->id_user }}">{{ $value->nama_user }}</option>
                                      @endforeach
                                          
                                  </select>
                                    <div class="text-danger">
                                      @error('nama_user')
                                      {{ $message }}
                                      @enderror
                                    </div> 
                                    
 
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Jenis Tagihan</label>
                                    <select name="id_tagihan" id="id_tagihan" class="form-control" >
                                      <option value="">--- PILIH JENIS TAGIHAN ---</option>
                                      @foreach ( $tagihan as $value)
                                      <option value="{{ $value->id_tagihan }}">{{ $value->nama_tagihan }}</option>
                                      @endforeach
                                  </select>
                                    <div class="text-danger">
                                      @error('nama_tagihan')
                                      {{ $message }}
                                      @enderror
                                    </div> 
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nominal Tagihan</label>
                                    <input id="nominal_tagihan" name="nominal_tagihan" class="form-control" readonly>
                                    <div class="text-danger">
                                      @error('nominal_tagihan')
                                      {{ $message }}
                                      @enderror
                                    </div> 
                                </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="form-group">
                                  <label for="">Catatan Admin</label>
                                  <input name="catatan_admin" class="form-control" value="{{ old('catatan_admin') }}">
                                  <div class="text-danger">
                                    @error('catatan_admin')
                                    {{ $message }}
                                    @enderror
                                  </div> 
                              </div>
                          </div>

                        </div>
                    </div>
            </div>

              <div class="card-footer">
                  <a href="/tagihan" class="btn btn-primary btn-sm">Kembali</a>
                  <button class="btn btn-success btn-sm float-right">Simpan</button>
               
              </div>
            </form>
        </div>

    </section>

</div>
<br>

@endsection

<script>
  $(document).ready(function() {

      loadtagihan();
  });

  function loadtagihan() {

      $("#id_tagihan").change(function() {
          var gettagihan = $("#id_tagihan").val();

          $.ajax({

              type: "POST",
              dataType: "JSON",
              url: "/tagihan/getDataTagihan",
              data: {
                  tagihan: gettagihan
              },
              success: function(data) {
                  console.log(data);

                  var html = "";
                  var i;
                  for (i = 0; i < data.length; i++) {

                      html += '<option value="' + data[i].id_tagihan + '">' + data[i].nama_tagihan + '</option>';
                  }

                  $("#nominal_tagihan").html(html);
                  $("#nominal_tagihan").show();

              }
          });
      });

  }
</script>