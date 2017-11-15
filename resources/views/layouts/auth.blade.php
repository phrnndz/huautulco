<!DOCTYPE html>
<html lang="en">
<head>
 <title>{{ config('app.name', 'Laravel') }}</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/bootstrap-responsive.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/maruti-login.css') }}" />
</head>
<body>

    @yield('content')


<script src="{{ asset('js/excanvas.min.js') }}"></script> 
<script src="{{ asset('js/jquery.min.js') }}"></script> 
<script src="{{ asset('js/jquery.ui.custom.js') }}"></script> 
<script src="{{ asset('js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('js/jquery.flot.min.js') }}"></script> 
<script src="{{ asset('js/jquery.flot.resize.min.js') }}"></script> 
<script src="{{ asset('js/jquery.peity.min.js') }}"></script> 
<script src="{{ asset('js/fullcalendar.min.js') }}"></script> 
<script src="{{ asset('js/maruti.js') }}"></script> 
<script src="{{ asset('js/maruti.dashboard.js') }}"></script> 
<script src="{{ asset('js/maruti.chat.js') }}"></script> 
 

</body>
</html>
