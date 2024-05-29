<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
        <title>Medcare24 | @yield('title', 'Catalogo')</title>
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <div id="logo">
                    <h1><a href="">Medcare24  </a></h1>
                    <p> Attivi dal 2024</p>
                </div>
            </div>

            <!-- end #header -->
            <div id="menu">
                @include('layouts/_navpublic')
            </div>

            <!-- end #menu -->
            <div id="page">
                <div id="page-bgtop">
                    <div id="page-bgbtm">
                        @yield('content')
                        <div style="clear: both;">&nbsp;</div>
                    </div>
                </div>
            </div>

            <!-- end #content -->
            <div id="footer">
                <br>
                <p>copyright- SEGUICI ANCHE SUI SOCIAL</p>
            </div>
            <!-- end #footer -->
        </div>
    </body>
</html>