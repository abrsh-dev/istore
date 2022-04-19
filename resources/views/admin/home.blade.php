<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
        <!-- Admin Sidebar -->
        @include('admin.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
        <!-- Admin Navbar-->
        @include('admin.navbar')
        <!-- Admin Body -->
        @include('admin.body')
        {{-- Admin Script --}}
        @include('admin.script')
    
  </body>
</html>