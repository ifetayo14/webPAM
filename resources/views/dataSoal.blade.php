@extends('layout.main')

@section('title')
    <title>Data Soal</title>
@endsection

@section('main-content')
    <h3 style="text-align: center">DATA SOAL</h3>
    <br>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-1">
            <a class="btn btn-primary" href="{{ url('/addQuestion') }}">Daftar Soal</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">

            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Pertanyaan</th>
                    <th>Tipe Pertanyaan</th>
                    <th>Tingkat Kesulitan</th>
                    <th>Nilai</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($dataSoal as $row)
                    <tr>
                        <td>{{ $loop -> iteration }}</td>
                        <td>{{ $row['question'] }}</td>
                        <td>{{ $row['type'] }}</td>
                        <td>{{ $row['difficulties'] }}</td>
                        <td>{{ $row['grade'] }}</td>
                        <td>
                            <table>
                                <tr>
                                    <td>
                                        <form action="/deleteSoal/{{ $row -> question_id }}" method="post">
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
