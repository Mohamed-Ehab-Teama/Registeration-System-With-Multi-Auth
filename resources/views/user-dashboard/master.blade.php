<!doctype html>
<html lang="en">

@include('user-dashboard.partials.head')

<body class="vertical  light  ">
    <div class="wrapper">

        @include('user-dashboard.partials.nav')

        @include('user-dashboard.partials.aside')


        <main role="main" class="main-content">

            @yield('content')

        </main> <!-- main -->


    </div> <!-- .wrapper -->

    @include('user-dashboard.partials.scripts')

</body>

</html>