<!doctype html>
<html lang="en">

@include('admin-dashboard.auth.partials.head')
  
  <body class="light ">
    <div class="wrapper vh-100">
      <div class="row align-items-center h-100">
        
        @yield('content')

      </div>
    </div>


    @include('admin-dashboard.auth.partials.scripts')
    


  </body>
</html>
</body>
</html>