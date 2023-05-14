@extends('layout.v_template')
@section('title','Edit Data User | Admin')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>EDIT USER</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit User</h3>
            </div>
            {{-- akhir judul --}}

            <div class="card-body">

                <form action="/m_user/update_users/{{ $users->id_user }}" method="POST">
                    @csrf

                    <div class="content">
                        <div class="row">

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Nama user</label>
                                    <input name="nama_user" class="form-control" value="{{ $users->nama_user }}">
                                    <div class="text-danger">
                                      @error('nama_user')
                                      {{ $message }}
                                      @enderror
                                    </div> 
                                    
 
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Email user</label>
                                    <input name="email_user" class="form-control" value="{{ $users->email_user }}" readonly>
                                    <div class="text-danger">
                                      @error('email_user')
                                      {{ $message }}
                                      @enderror
                                    </div> 
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Password user</label>
                                    <input name="password_user" class="form-control" value="{{ $users->password_user }}">
                                    <div class="text-danger">
                                      @error('password_user')
                                      {{ $message }}
                                      @enderror
                                    </div> 
                                </div>
                            </div>

                        </div>
                    </div>
            </div>

              <div class="card-footer">
                  <a href="/m_user" class="btn btn-primary btn-sm">Kembali</a>
                  <button class="btn btn-success btn-sm float-right">Simpan</button>
               
              </div>
            </form>
        </div>

    </section>

</div>
<br>

@endsection