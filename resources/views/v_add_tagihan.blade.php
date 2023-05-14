@extends('layout.v_template')
@section('title','Tambah Data Master Tagihan | Admin')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>TAMBAH MASTER TAGIHAN</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Master Tagihan</h3>
            </div>
            {{-- akhir judul --}}

            <div class="card-body">

                <form action="/m_tagihan/insert" method="POST">
                    @csrf

                    <div class="content">
                        <div class="row">

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Kode Tagihan</label>
                                    <input name="kode_tagihan" class="form-control" value="{{ old('kode_tagihan') }}">
                                    <div class="text-danger">
                                      @error('kode_tagihan')
                                      {{ $message }}
                                      @enderror
                                    </div> 
                                    
 
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Nama Tagihan</label>
                                    <input name="nama_tagihan" class="form-control" value="{{ old('nama_tagihan') }}">
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
                                    <label for="">Nominal Tagihan</label>
                                    <input name="nominal_tagihan" class="form-control" value="{{ old('nominal_tagihan') }}">
                                    <div class="text-danger">
                                      @error('nominal_tagihan')
                                      {{ $message }}
                                      @enderror
                                    </div> 
                                </div>
                            </div>

                        </div>
                    </div>
            </div>

              <div class="card-footer">
                  <a href="/m_tagihan" class="btn btn-primary btn-sm">Kembali</a>
                  <button class="btn btn-success btn-sm float-right">Simpan</button>
               
              </div>
            </form>
        </div>

    </section>

</div>
<br>

@endsection