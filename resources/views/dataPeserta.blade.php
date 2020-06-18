@extends('layout.main')

@section('title')
    <title>Data Peserta</title>
@endsection

@section('main-content')
    <h3 style="text-align: center">DATA PESERTA</h3>
    <br>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-1">
            <a class="btn btn-primary" href="{{ url('/addPeserta') }}">Daftar Peserta</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
        
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th colspan="2">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($dataPeserta as $row)
                        <tr>
                            <td>{{ $loop -> iteration }}</td>
                            <td>{{ $row['nim'] }}</td>
                            <td>{{ $row['nama'] }}</td>
                            <td>{{ $row['prodi'] }}</td>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <a href="{{ url('/editPeserta/'.$row->id) }}" class="btn btn-warning">Edit</a>
                                        </td>
                                        <td>
                                            <form action="/dataPeserta/{{ $row -> id }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection
