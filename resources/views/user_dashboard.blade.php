@extends('layout.v_template_users')

@section('title','Dashboard | Users')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">

            <div class="card-header">
                <h3 class="card-title">Jenis Tagihan</h3>
                {{-- <a href="/m_tagihan/add_Mtagihan" type="button" class="btn btn-primary btn-sm float-right">
                    <i class=" fas fa-plus"> Tambah Data</i>
                </a> --}}

                {{-- @if (session('pesan'))
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i>Berhasil</h5>{{ session('pesan') }}</div>
                @endif --}}
            </div>

            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Tagihan</th>
                            <th>Tanggal Tagihan</th>
                            <th>Nominal Tagihan</th>
                            <th>Catatan Admin</th>
                            <th>Nominal Pembayaran</th>
                            <th>Bukti Pembayaran</th>
                            <th>Tanggal Pembayaran</th>
                            <th>Catatan User</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>
                        @foreach ($iuran as $value)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $value->nama_tagihan }}</td>
                                <td>{{ $value->tanggal_tagihan }}</td>
                                <td>Rp. {{ number_format($value->nominal_tagihan,0) }}</td>
                                <td>d</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>{{ $value->nama_status }}</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                Footer
            </div>

        </div>
    </section>
</div>
<br>

@endsection
