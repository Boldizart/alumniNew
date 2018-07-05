<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>{{ config('alumni.name', 'Alumni') }}</title>
        
        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootswatch.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    </head>
    <body>

        @extends('layouts.nav')

        <main class="py-0">
            @yield('slider')
            <div class="main-content">
                @yield('content')
                @extends('inc.messages')
                @extends('modals.question')
            </div>
        </main>

    </body>
    <footer>
        <div class="share-buttons">
            <button type="button" class="btn btn-success">
                <i class="fas fa-folder-open"></i>
            </button>
            <button type="button" class="btn btn-info">
                <i class="fas fa-share-alt"></i>
            </button>
            <button type="button" class="btn btn-warning">
                <i class="fas fa-cloud-download-alt"></i>
            </button>
            <button onclick="window.location.href='{{ route('public.contact') }}'" type="button" class="btn btn-danger" href="/test">
                <i class="fas fa-envelope"></i>
            </button>
            <button type="button" class="btn btn-danger active">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        @extends('layouts.footer')
        
        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </footer>
</html>
