<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> E-SHOPER- @yield('title') </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('public/admin/node_modules/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/admin/node_modules/simple-line-icons/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{asset('public/admin/node_modules/flag-icon-css/css/flag-icon.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/admin/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}">
  <!-- endinject -->
   <!-- plugin css for table -->
  <link rel="stylesheet" href="{{asset('public/admin/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" />
  <!-- End plugin css for table -->
   <!-- plugin css for  select -->
  <link rel="stylesheet" href="{{asset('public/admin/node_modules/icheck/skins/all.css')}}" />
  <link rel="stylesheet" href="{{asset('public/admin/node_modules/select2/dist/css/select2.min.css')}}" />
  <link rel="stylesheet" href="{{asset('public/admin/node_modules/select2-bootstrap-theme/dist/select2-bootstrap.min.css')}}" />
  <!-- End plugin css for select -->
  <!-- editor -->
   <link rel="stylesheet" href="{{asset('public/admin/node_modules/summernote/dist/summernote-bs4.css')}}">
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('public/admin/node_modules/font-awesome/css/font-awesome.min.css')}}" />
  <link rel="stylesheet" href="{{asset('public/admin/node_modules/jquery-bar-rating/dist/themes/fontawesome-stars.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('public/admin/css/style.css')}}">
  <!-- endinject -->
  
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('Admin.include.header')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        
        @include('Admin.include.menu')
        <!-- partial -->

        <!-- content-wrapper ends -->
       @yield('mainContent')
       @yield('javaScript')
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('public/admin/node_modules/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('public/admin/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{asset('public/admin/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('public/admin/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for select related-->
  <script src="{{asset('public/admin/node_modules/icheck/icheck.min.js')}}"></script>
  <script src="{{asset('public/admin/node_modules/typeahead.js/dist/typeahead.bundle.min.js')}}"></script>
  <script src="{{asset('public/admin/node_modules/select2/dist/js/select2.min.js')}}"></script>
  <!-- End plugin js for select related-->
  <!-- Custom js for select-->
  <script src="{{asset('public/admin/js/file-upload.js')}}"></script>
  <script src="{{asset('public/admin/js/iCheck.js')}}"></script>
  <script src="{{asset('public/admin/js/typeahead.js')}}"></script>
  <script src="{{asset('public/admin/js/select2.js')}}"></script>
  <!-- End custom js for select-->
  <!-- Plugin js for this page-->
  <script src="{{asset('public/admin/node_modules/jquery-bar-rating/dist/jquery.barrating.min.js')}}"></script>
  <script src="{{asset('public/admin/node_modules/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('public/admin/node_modules/raphael/raphael.min.js')}}"></script>
  <script src="{{asset('public/admin/node_modules/morris.js/morris.min.js')}}"></script>
  <script src="{{asset('public/admin/node_modules/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
  <!-- End plugin js for this page-->
  <!--summer editor -->
  <script src="{{asset('public/admin/node_modules/summernote/dist/summernote-bs4.min.js')}}"></script>
   <script src="{{asset('public/admin/js/editorDemo.js')}}"></script>
<!--   summer editor -->
  <!-- inject:js -->
  <script src="{{asset('public/admin/js/off-canvas.js')}}"></script>
  <script src="{{asset('public/admin/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('public/admin/js/misc.js')}}"></script>
  <script src="{{asset('public/admin/js/settings.js')}}"></script>
  <script src="{{asset('public/admin/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for table-->
  <script src="{{asset('public/admin/node_modules/datatables.net/js/jquery.dataTables.js')}}"></script>
  <script src="{{asset('public/admin/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
  <!-- End plugin js for table-->
  <!--custom js for table-->
   <script src="{{asset('public/admin/js/data-table.js')}}"></script>

  <!--custom js for table-->
  <!-- Custom js for this page-->

  <script src="{{asset('public/admin/js/dashboard.js')}}"></script>
  <!-- End custom js for this page-->

</body>



</html>
