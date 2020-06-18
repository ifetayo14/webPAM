@extends('layout.main')

@section('title')
    <title>Tambah Data Peserta</title>
@endsection

@section('main-content')
    <h3 style="text-align: center">EDIT DATA PESERTA</h3>
    <br>

    <div class="col-md-2"></div>
    <div class="col-md-8">
            <form class="form-horizontal" action="/updatePeserta/{{ $peserta -> id }}" method="post" >
            @method('patch')
            @csrf
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">NIM:</label>
                <div class="col-sm-10">
                    <input disabled type="text" class="form-control" id="nim" placeholder="NIM" name="nim" value="{{ $peserta -> nim }}">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Nama:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" value="{{ $peserta -> nama }}">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Prodi:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="prodi" placeholder="Prodi" name="prodi" value="{{ $peserta -> prodi }}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
@endsection
