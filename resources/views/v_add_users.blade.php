@extends('layout.v_template')
@section('title','Tambah Data Users | Admin')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>TAMBAH USERS</h1>
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

                <form action="/m_user/insert_users" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama User</label>
                            <input class="form-control" name="nama_user" value="{{ old('nama_user') }}" placeholder="Input Nama...">
                            <div class="text-danger">
                                @error('nama_user')
                                {{ $message }}
                                @enderror
                              </div> 
                        </div>

                        <div class="form-group">
                            <label>Email Users</label>
                            <input type="email" class="form-control" name="email_user" value="{{ old('email_user') }}" placeholder="Input Email...">
                            <div class="text-danger">
                                @error('email_user')
                                {{ $message }}
                                @enderror
                              </div> 
                        </div>
                        <div class="form-group">
                            <label>Password Users</label>
                            <input type="password" class="form-control" name="password_user" placeholder="Input Password...">
                            <div class="text-danger">
                                @error('password_user')
                                {{ $message }}
                                @enderror
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