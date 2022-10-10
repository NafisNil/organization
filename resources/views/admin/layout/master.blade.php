<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WebFoundation| Dashboard </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('admin')}}/plugins/fontawesome-free/css/all.min.css">

  <!--datatables -->
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('admin')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('admin')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('admin')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <script src="https://cdn.ckeditor.com/4.17.1/full/ckeditor.js"></script>
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin')}}/dist/css/adminlte.min.css">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
@include('admin.layout.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@include('admin.layout.sidebar')
<div class="content-wrapper">
@yield('content')
</div>
  <!-- Main Footer -->
@include('admin.layout.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('admin')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{asset('admin')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="{{asset('admin')}}/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('admin')}}/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('admin')}}/dist/js/pages/dashboard3.js"></script>

<!-- DataTables  & Plugins -->
<script src="{{asset('admin')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('admin')}}/plugins/jszip/jszip.min.js"></script>
<script src="{{asset('admin')}}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{asset('admin')}}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#image').change(function(e){
      var reader = new FileReader();
      reader.onload = function(e){
        $('#showImage').attr('src', e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
    })
  })
</script>
</body>
</html>
