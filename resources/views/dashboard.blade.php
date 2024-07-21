<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!--boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />

    <script src="{{ asset('js/sidebar.js')}}"></script>

    <title>Jamkrindo</title>

</head>

<body>

    <div class="d-flex" id="wrapper">

        <!--sidebar-->
        <div class="bg-light border-light" id="sidebar-wrapper">
            <div class="sidebar-heading">Jamkrindo</div>
            <div class="list-group list-group-flush">
                <a href="{{url('lob')}}" class="list-group-item list-group-item-action bg-light">LOB</a>
                <a href="{{url('log')}}" class="list-group-item list-group-item-action bg-light">Activity Log</a>
            </div>
        </div>

        <!--page content-->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom justify-content-between">
                <button class="btn" id="menu-toggle"><span class="navbar-toggler-icon"></span></button>
                <a class="navbar-brand">Jamkrindo</a>
            </nav>
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>