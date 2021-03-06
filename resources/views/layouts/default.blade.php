<!doctype html>
<html>
    <head>
        @include('includes.head')
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>
            window.Laravel = { csrfToken: '{{ csrf_token() }} '}
        </script>
    </head>
    <body>
        <div class="container">
            <header class="row">
                @include('includes.header')
            </header>

            <div id="" class="">
                <!-- main content -->
                <div id="content">
                    @yield('content')
                </div>
            </div>
            <!-- footer content -->
            <footer class="row footer-row">
                @include('includes.footer')
            </footer>
        </div>
    </body>
</html>