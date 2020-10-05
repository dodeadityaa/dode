<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Data Admin KK Miskin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/admincss/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/admincss/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/admincss/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    @if(session('suksesss'))
    <div class="alert alert-danger" role="alert">
      Data Berhasil Di Hapus
    </div>
    @endif
    @if(session('suksesssss'))
    <div class="alert alert-success" role="alert">
      Data Berhasil Di Update
    </div>
    @endif
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
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
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">Data Admin</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Button trigger modal -->


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Admin</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table method="GET" id="example1" class="table table-bordered table-striped" action="/admin/yoyo">
                <thead>
                  <tr>
                    <th>Number</th>
                    <th>Nama Admin</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Number Telephone</th>
                    <th>Foto Admin</th>
                    <th></th>
                  </tr>
                </thead>
                <?php $no = 1; ?>
                @foreach ($dtadminss as $adminin)
                <thead>
                  <tr>
                    <th>{{$no++}}</th>
                    <th>{{$adminin->nama}}</th>
                    <th>{{$adminin->email}}</th>
                    <th>{{$adminin->alamat}}</th>
                    <th>{{$adminin->jenis_kelamin}}</th>
                    <th>{{$adminin->no_telp}}</th>
                    <th><img src="{{$adminin->avatar}}" alt="" height="50"></th>
                    <th>
                      <a href='#'><i class="fas fa-edit" data-toggle="modal" data-target='#editModal' style="color : green"></i></a> | <a href="#"><i class="fas fa-trash-alt" data-toggle="modal" data-target='#hapusModal' style="color: red"></i></a>
                    </th>
                  </tr>
                </thead>
                @endforeach

                <tr>
                  <th>Number</th>
                  <th>Nama Admin</th>
                  <th>Email</th>
                  <th>Alamat</th>
                  <th>Jenis Kelamin</th>
                  <th>Number Telephone</th>
                  <th>Foto Admin</th>
                  <th></th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- Modal Edit -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Admin</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('post.update', $adminin->id)}}" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
          {{method_field("PUT")}}
          <div class="modal-body">
            <div class="form-group">
              <label for="namee">Nama Admin</label>
              <input type="name" class="form-control" id="namee" name = "namee" aria-describedby="namee" placeholder="Masukan Nama Admin" value = "{{ $adminin->nama }}">
            </div>
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" name = "email" aria-describedby="emailHelp" placeholder="Enter email" value = "{{ $adminin->email }}">
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="alamat" class="form-control" id="alamat" name = "alamat" placeholder="Enter Alamat" value = "{{ $adminin->alamat }}">
            </div>
            <div class="form-group">
              <label>Jenis Kelamin</label>
              <select name="jenis_kelamin" id="jenis_kelamin" name = "jenis_kelamin" class="form-control input-lg dynamic2">
                <option>Masukan Jenis Kelamin</option>
                <option>Laki-Laki</option>
                <option>Perempuan</option>
                <option">
              </select>
              </option>
            </div>
            <div class="form-group">
              <label for="numberee">Number Telephone</label>
              <input type="number" class="form-control" id="numberee" name = "numberee" aria-describedby="numberee" placeholder="Masukan Number Telephone" value = "{{ $adminin->no_telp }}">
            </div>
            <div class="form-group">
              <label for="avatar">file input</label>
              <input type="file" class="form-control-file" id="avatar" name = "avatar">
            </div>
            <div class="form-group">
              <label for="paswordd">Password</label>
              <input type="password" class="form-control" id="passwordd" name = "passwordd" placeholder="Masukan Password" value = "{{ $adminin->password }}">
            </div>
            <div class=" form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
            <button type="submit" class="btn btn-primary">Perbarui</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Modal Edit -->
  <!-- Modal Delete -->
  <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="hapusModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="hapusadmin">Hapus Admin</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('post.destroy', $adminin->id)}}" method="POST">
          {{csrf_field()}}
          {{method_field("delete")}}
          <div class="modal-body">
            Anda Yakin Menghapus Admin tersebut ?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
            <button type="submit" class="btn btn-danger">Hapus</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Modal Delete -->
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
  <!-- DataTables -->
  <script src="/admincss/plugins/datatables/jquery.dataTables.js"></script>
  <script src="/admincss/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
  <!-- AdminLTE App -->
  <script src="/admincss/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="/admincss/dist/js/demo.js"></script>
  <!-- page script -->
  <script>
    $(function() {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
      });
    });
  </script>
</body>

</html>