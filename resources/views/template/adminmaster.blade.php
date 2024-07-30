<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', env('WEB_TITLE'))</title>

    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/193851b937.js" crossorigin="anonymous"></script>
    <style>
        * {
            /* uncomment to check box model */
            /* border: solid black 1px; */
        }
    </style>

    <style>
        .socials {
            display: flex;
            text-align: center;
            justify-content: center;
            flex-direction: column;
            align-self: center;

        }

        .fag {
            padding: 19px;
            font-size: 20px;
            width: 20px;
            text-align: center;
            text-decoration: none;
            margin: 4px 4px;
            /* margin-bottom: 20px; */
            border-radius: 50%;
            border: 2px white solid;
            transition-duration: 0.14s;
            box-sizing: initial;
            color: white;
        }

        .fag:hover {
            color: white;
            background: black;
        }
    </style>
</head>

<body>

    @include('components.adminheader')
    <div class="container-fluid p-0">
        @yield('content')
    </div>

    @include('components.footer')

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>

    @stack('jsscripts')
</body>

</html>
