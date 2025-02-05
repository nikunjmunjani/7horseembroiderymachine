<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.include.head')
</head>
<body>
    @include('layouts.include.header')
    
    <div class="content">
        @yield('content')
    </div>
    
    @include('layouts.include.footer')
    @include('layouts.include.footer-scripts')
</body>
</html>