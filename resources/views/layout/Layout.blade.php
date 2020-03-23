
<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <script src="/js/bootstrap.js"></script>
    <script src="/js/app.js"></script>

    <style>

    </style>
</head>
<body>
<div>
    <ul>
        <li><a class="active" href="/">خانه</a></li>
        <li><a  href="/members">عضوها</a></li>
        <li style="float:left"><a href="/about">درباره ما</a></li>
    </ul>


</div>


@if(count($errors))

    <div style="direction:rtl;text-align: right;" class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        @foreach($errors->all() as $error)

            {{$error}}

        @endforeach
    </div>

@endif

<div class="contentpage">



    <div class="headercontent">
        <h2>

            @yield('contentheader')



        </h2>
        <h6>
            @yield('name')
        </h6>
        <br/>
        <h6>
            @yield('email')
        </h6>
        <h6>
            @yield('form')
        </h6>

    </div>
</div>
<div class="footer"></div>


{{--<div class="container">--}}
{{--<div class="content">--}}


{{--</div>--}}
{{--</div>--}}
</body>
</html>
