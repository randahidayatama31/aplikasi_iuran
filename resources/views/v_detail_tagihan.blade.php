@extends('layout.v_template')

@section('title','Detail Master Tagihan | Admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DETAIL MASTER TAGIHAN</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Detail</h3>

                <div class="card-tools">
                        
                </div>

            </div>
            <div class="card-body">

                <table>
                    <tr>
                        <th width="150px">Kode Tagihan</th>
                        <th width="30px">:</th>
                        <th>{{ $tagihan->kode_tagihan }}</th>
                    </tr>

                    <tr>
                        <th width="150px">Nama Tagihan</th>
                        <th width="30px">:</th>
                        <th>{{ $tagihan->nama_tagihan }}</th>
                    </tr>

                    <tr>
                        <th width="150px">Nominal Tagihan</th>
                        <th width="30px">:</th>
                        <th>RP {{ number_format($tagihan->nominal_tagihan,0) }}.00</th>
                    </tr>
                </table>


            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <a href="/m_tagihan" class="btn btn-success btn-sm">Kembali</a>
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<br>

@endsection