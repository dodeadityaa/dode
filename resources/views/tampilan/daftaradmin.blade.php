<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Daftar Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/admincss/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/admincss/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
@if(session('sukses'))
		<div class="alert alert-success" role="alert">
			Data Berhasil Di Inputkan
		</div>
	@endif
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/dashboard" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <!-- Notifications Dropdown Menu -->
    </ul>
  </nav>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Admin Baru</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Daftar Admin</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Daftar</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" class="login100-form validate-form" action="/admin/guys">
              {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Nama Admin</label>
                    <input type="nama" name="nama" class="form-control" id="nama" placeholder="Enter Nama Admin">
                  </div>
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                  </div>
                    <div class="form-group">
                      <label for="no_telp">No. Telp Admin</label>
                      <input type="no_telp" name="no_telp" class="form-control" id="no_telp" placeholder="Enter No. Telp Admin">
                    </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder=" Masukan Password">
                  </div>
                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">Setuju membuat admin baru</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/admincss/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/admincss/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="/admincss/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="/admincss/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="/admincss/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/admincss/dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#quickForm').validate({
    rules: {
      nama: {
        required: true,
        namee: true,
      },
      email: {
        required: true,
        email: true,
      },
      no_telp: {
        required: true,
        nombere: 11,
      },
      password: {
        required: true,
        minlength: 5
      },
      terms: {
        required: true
      },
    },
    messages: {
      nama: {
        required: "Form masih kosong Masukan Nama",
        nama: "Masukan Nama Yang Benar"
      },
      email: {
        required: "Form masih kosong Masukan Email",
        email: "Masukan Email Yang Benar"
      },
      no_telp: {
        required: "Form masih kosong Masukan Number Telphone",
        no_telp: "Masukan Number Telphone Yang Benar lebih dari 11 number"
      },
      password: {
        required: "Form masih kosong Masukan password",
        minlength: "Harus Memasukan lebih dari 5 karakter"
      },
      terms: "Centang terlebih dahulu"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
</body>
</html>
