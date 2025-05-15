<!doctype html>
<html lang="en">

@include('admin-dashboard.partials.head')

<body class="vertical  light  ">
    <div class="wrapper">

        @include('admin-dashboard.partials.nav')

        @include('admin-dashboard.partials.aside')


        <main role="main" class="main-content">

            @yield('content')

        </main> <!-- main -->


    </div> <!-- .wrapper -->

    @include('admin-dashboard.partials.scripts')

</body>

</html>