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
    <div class="row">
        <div class="col-md-8 offset-sm-2">
            <form action="{{ url('/result') }}" method="post">
            @csrf
                <div class="form-group">
                    <label for="nim">NIM:</label>
                    <input class="form-control" type="text" name="nim">
                </div>
                <div class="form-group">
                    <label for="idquis">ID Quiz:</label>
                    <input class="form-control" type="text" name="idquis">
                </div>
                <div class="form-group">
                    <label for="idquestion">ID Question:</label>
                    <input class="form-control" type="text" name="idquestion">
                </div>
                <div class="form-group">
                    <label for="idanswer">ID Answer:</label>
                    <input class="form-control" type="text" name="idanswer">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection