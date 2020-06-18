<!DOCTYPE html>
<html lang="en">
<head>
    @yield('title')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ url('/dashboard') }}">QUIZ ADMINISTRATOR</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ url('/dashboard') }}">Beranda</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Data User
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ url('/addAdministrator') }}">Tambah Administrator</a></li>
                    <li><a href="{{ url('/dataPeserta') }}">Peserta</a></li>
                </ul>
            </li>
            <li><a href="{{ url('/quiz') }}">Data Quiz</a></li>
            <li><a href="#">Data Soal</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ url('logout') }}">Logout</a></li>
        </ul>
    </div>
</nav>

<div class="container">
    @yield('main-content')
</div>

</body>
</html>
