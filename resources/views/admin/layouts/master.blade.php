<!DOCTYPE html>
<html lang="en">

@include('admin.includes.head')
<body>
    @include('admin.includes.sidebar')
    <div class="wrapper d-flex flex-column min-vh-100 bg-white">
        @include('admin.includes.header')
        <div class="body bg-white flex-grow-1 px-3">
            @yield('content')
        </div>
        <br>
        <br>
        @include('admin.includes.footer')
    </div>
    @include('admin.includes.script')
    @yield('scripts')
</body>
</html>

