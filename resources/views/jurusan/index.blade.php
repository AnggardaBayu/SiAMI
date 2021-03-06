@extends('layouts.jurusan')

@section('jurusan')

@if(session('sukses'))
<div class="alert alert-success" role="alert">
    {{session('sukses')}}
</div>
@endif
<section>
    <div class="container-fluid">
        <header>
            <h1 class="h1 display">Data Jurusan</h1>
        </header>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h1 class="h1 display">Jurusan
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                                Tambah Jurusan
                            </button>
                        </h1>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>NAMA JURUSAN</th>
                                        <th>TOMBOL AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($table_jurusan as $jurusan)
                                    <tr>
                                        <td>{{$jurusan->nama_jurusan}}</td>
                                        <td>
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModalLabel">
                                                Edit
                                            </button>
                                            <a href="/jurusan/{{$jurusan->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Konfirmasi hapus ?')">Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Jurusan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/jurusan/create" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Jurusan</label>
                        <input name="nama_jurusan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Jurusan Baru">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="editModalLabel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Jurusan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="/jurusan/{{$jurusan->id}}/update" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jurusan</label>
                        <input name="nama_jurusan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Jurusan" value="{{$jurusan->nama_jurusan}}">
                    </div>
                    <button type="submit" class="btn btn-secondary">Cancel</button>
                    <button type="submit" class="btn btn-warning">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection