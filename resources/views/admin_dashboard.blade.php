@extends('layout.v_template')
@section('title','Dasboard | Admin')
@section('content') 

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DASHBOARD</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Dashboard</h3>
          <a href="#" type="button" class="btn btn-primary btn-sm float-right">
            <i class=" fas fa-plus"> Tambah Data</i>
        </a>
        </div>
{{-- akhir judul --}}

        <div class="card-body">

          <table class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode Tagihan</th>
                <th>Nama Tagihan</th>
                <th>Nominal Tagihan</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>
          
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
<br>

@endsection
