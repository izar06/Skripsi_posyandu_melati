<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Dashboard Posyandu Melati 04</title>

  @include('includes.admin.style')
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
     @include('includes.admin.navbar')

     @include('includes.admin.sidebar')

      <!-- Main Content -->
  @yield('content')
     @include('includes.admin.footer')
    </div>
  </div>

 @include('includes.admin.script')
</body>
</html>
