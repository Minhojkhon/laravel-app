<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="{{ route('about.index') }}">Home </a>
                    <a class="nav-item nav-link" href="{{ route('main.index') }}">Main</a>
                    <a class="nav-item nav-link" href="{{ route('user.index') }}">Users</a>
                    <a class="nav-item nav-link " href="{{ route('contact.index') }}">Contacts</a>
                    <a class="nav-item nav-link " href="{{ route('tasks.index') }}">Tasks</a>
                    <a class="nav-item nav-link " href="{{ route('math.index') }}">Math</a>
                    <a class="nav-item nav-link " href="{{ route('course.index') }}">Course</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="text-center text-uppercase">
        @yield('content') {{--  указываем директиву  --}}
    </div>
</div>
</body>
</html>
