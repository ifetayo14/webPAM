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
<a href="{{ url('/result/create') }}" class="btn btn-success mb-1">Add</a>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID Result</th>
                        <th>NIM</th>
                        <th>ID Quiz</th>
                        <th>Id Question</th>
                        <th>Id Answer</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($result as $p)
                    <tr>
                        <td>{{ $p->result_id }}</td>
                        <td>{{ $p->nim }}</td>
                        <td>{{ $p->quiz_id }}</td>
                        <td>{{ $p->question_id }}</td>
                        <td>{{ $p->answer_id }}</td>
                        <td><a class="btn btn-primary" href="{{ url("result/{$p->result_id}/edit") }}">Edit</a></td>
                        <td><button disabled="disabled">Delete</button></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
