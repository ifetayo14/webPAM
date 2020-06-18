@extends('layout.main')

@section('title')
    <title>Tambah Data Administrator</title>
@endsection

@section('main-content')
    <h3 style="text-align: center">TAMBAH DATA ADMINISTRATOR</h3>
    <br>

    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form class="form-horizontal" method="post" action="{{ url('/addNewAdministrator') }}">
            @csrf
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Nama:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" placeholder="Username" name="username">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Password:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                </div>
            </div>
            <input type="hidden" class="form-control" id="role" name="role" value="administrator">
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
@endsection
