<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form 1 dan Form 2</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('Admin/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('Admin/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{asset('Admin/css/fontastic.css')}}">

    <!-- <link rel="stylesheet" href="{{asset('Admin/css/adminlte.min.css')}}"> -->
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="{{asset('Admin/css/grasp_mobile_progress_circle-1.0.0.min.css')}}">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="{{asset('Admin/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('Admin/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('Admin/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('Admin/img/favicon.ico')}}">

    <link rel="stylesheet" href="{{asset('Admin/vendor/new/datatables-bs4/css/dataTables.bootstrap4.css')}}">

</head>
@include('layouts.sidebar')

<body>

    <div class="page">
        @include('layouts.navbar')
        @yield('form1form2')
        @yield('dataform1')
        @yield('dataform2')
        @yield('editdataform1')
        @include('layouts.footer')

    </div>


    <!-- JavaScript files-->
    <script src="{{asset('Admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('Admin/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('Admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('Admin/js/grasp_mobile_progress_circle-1.0.0.min.js')}}"></script>
    <script src="{{asset('Admin/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('Admin/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('Admin/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('Admin/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('Admin/js/charts-home.js')}}"></script>
    <!-- Main File-->
    <script src="{{asset('Admin/js/front.js')}}"></script>

    <!-- tambahan script -->
    <script src="{{asset('Admin/vendor/new/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('Admin/vendor/new/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <script>
    $(function () {
        $("#data1").DataTable();
        $("#data2").DataTable();
        $("#table2").DataTable();
    });
</script>
<!-- --------------------------------modal edit---------------------- -->
<!-- <script type="text/javascript">
$('#editform1').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget) 

  var no = button.data('myno') 
  var lingkup = button.data('mylingkup') 
  var sub = button.data('mysub') 
  var pertanyaan = button.data('mypertanyaan') 
  var modal = $(this)

  modal.find('.modal-body #no').val(no);
  modal.find('.modal-body #lingkup').val(lingkup);
  modal.find('.modal-body #sub').val(sub);
  CKEDITOR.replace( 'pertanyaan' );
  modal.find('.modal-body #pertanyaan').val(pertanyaan);
})
</script> -->
<!-- ----------------------------------table---------------------- -->
<script src="{{asset('Admin/vendor/ckeditorfull/ckeditor.js')}}"></script>
<script>
CKEDITOR.replace( 'pertanyaan' );

</script>
  <!-- ----------------------- -->
</body>
</html>