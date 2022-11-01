<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BFB | @yield('title')</title>
    @include('admin.inc.style')
    
</head>
<body>
    <div class="container-scroller">
     
        @include('admin.inc.navbar')
        <div class="container-fluid page-body-wrapper">
            @include('admin.inc.topbar')
            @yield('content')
        </div>
    
    </div>
    @include('admin.inc.script')
</body>
</html>