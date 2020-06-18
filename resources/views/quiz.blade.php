@extends('layout.main')

@section('title')
    <title>Result</title>
@endsection
<style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>
@section('main-content')
<div class="col-md-2"></div>
<a href="{{ url('/quiz/create') }}" class="btn btn-success mb-1">Add</a>
    <div class="row">
    <div class="col-md-2"></div>
        <div class="col-md-8">
            
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Duration</th>
                    <th colspan="2">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($quiz as $row)
                        <tr>
                            <td>{{ $loop -> iteration }}</td>
                            <td>{{ $row['title'] }}</td>
                            <td>{{ $row['duration'] }}</td>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <a href="{{ url('/editQuiz/'.$row -> quiz_id) }}" class="btn btn-warning">Edit</a>
                                        </td>
                                        <td>
                                            <form action="/deleteQuiz/{{ $row -> quiz_id }}" method="post">
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
    </div>
@endsection