<!DOCTYPE html>
<html lang="en">

@include('admin.layouts.header')

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      
@include('admin.layouts.navbar')

@include('admin.layouts.sidebar')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
            @yield('content')
        </section>
      </div>
      
@include('admin.layouts.footer')
</body>
</html>