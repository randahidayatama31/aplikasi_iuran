@extends('layout.v_template')

@section('title','Master Tagihan | Admin')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>MASTER TAGIHAN</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">

            <div class="card-header">
                <h3 class="card-title">Jenis Tagihan</h3>
                <a href="/m_tagihan/add_Mtagihan" type="button" class="btn btn-primary btn-sm float-right">
                    <i class=" fas fa-plus"> Tambah Data</i>
                </a>

                @if (session('pesan'))
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i>Berhasil</h5>{{ session('pesan') }}</div>
                @endif
            </div>

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
                        <?php $no=1; ?>
                        @foreach ($tagihan as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->kode_tagihan }}</td>
                            <td>{{ $item->nama_tagihan }}</td>
                            <td>RP {{ number_format($item->nominal_tagihan,0)  }}.00</td>
                            <td>
                                {{-- <a href="/m_tagihan/detail_Mtagihan/{{ $item->id_tagihan }}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a> --}}
                                <a href="/m_tagihan/edit_Mtagihan/{{ $item->id_tagihan }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                <button data-toggle="modal" data-target="#delete{{ $item->id_tagihan }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
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



@foreach ($tagihan as $item)
  <div class="modal fade" id="delete{{ $item->id_tagihan }}">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title">Delete</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">

                  <h5>Apakah Anda Yakin Ingin Menghapus Data Ini...?</h5>

              </div>
              <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <a href="/m_tagihan/delete_Mtagihan/{{ $item->id_tagihan }}" class="btn btn-primary">Delete</a>
              </div>

          </div>
      </div>
  </div>
  @endforeach
@endsection
