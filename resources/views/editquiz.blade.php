@extends('layout.main')

@section('title')
    <title>edit</title>
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
    <div class="row">
        <div class="col-md-8 offset-sm-2">
        @foreach($quiz as $row)
            <form action="/updateQuiz/{{ $row -> quiz_id }}" method="post">
            @method('patch')
            @csrf
            <?php
            echo($row -> quiz_id)
            ?>
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input value="{{ $row -> title }}" class="form-control" type="text" name="title">
                </div>
                <div class="form-group">
                    <label for="duration">Duration:</label>
                    <input class="form-control" type="time" value="{{ $row -> duration }}" name="duration">
                </div>
                
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
            @endforeach
        </div>
    </div>
@endsection