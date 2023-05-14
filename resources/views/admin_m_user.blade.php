@extends('layout.v_template')

@section('title','Users | Admin')

@section('content') 

<div class="content-wrapper">
  <section class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1>USERS</h1>
              </div>
          </div>
      </div>
  </section>

  <section class="content">
      <div class="card">

          <div class="card-header">
              <h3 class="card-title">USER</h3>
              <a href="/m_user/add_users" type="button" class="btn btn-primary btn-sm float-right">
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
                          <th>Nama Users</th>
                          <th>Email_User</th>
                          <th>Password User</th>
                          <th>Actions</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php $no=1; ?>
                      @foreach ($users as $item)
                      <tr>
                          <td>{{ $no++ }}</td>
                          <td>{{ $item->nama_user }}</td>
                          <td>{{ $item->email_user }}</td>
                          <td>{{ $item->password_user }}</td>
                          <td>
                              {{-- <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a> --}}
                              <a href="/m_user/edit_users/{{ $item->id_user }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                              <button data-toggle="modal" data-target="#delete{{ $item->id_user }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
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

@foreach ($users as $item)
  <div class="modal fade" id="delete{{ $item->id_user }}">
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
                  <a href="/m_user/delete_users/{{ $item->id_user }}" class="btn btn-primary">Delete</a>
              </div>

          </div>
      </div>
  </div>
  @endforeach
@endsection
