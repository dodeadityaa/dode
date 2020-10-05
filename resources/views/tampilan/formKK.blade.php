<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Form KK Miskin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('admincss/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{url('admincss/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{url('admincss/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{url('admincss/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('admincss/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{url('admincss/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{url('admincss/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{url('admincss/plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

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
        <!-- Notifications Dropdown Menu -->
      </ul>
    </nav>
    <!-- /.navbar -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Form KK Miskin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Form</a></li>
              <li class="breadcrumb-item active">Form KK Miskin</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Pengenalan Tempat</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label>Kota/Kabupaten</label>
                    <select name="kabkotss2" id="kabkotss2" class="form-control input-lg dynamic1" data-dependent="KabupatenKota">
                      <option> Masukan Kota/Kabupaten </option>
                      @foreach($kabkotss as $kabupatenss)
                      <option value="{{ $kabupatenss->id }}">{{ $kabupatenss->nama_kabkot }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Kecamatan</label>
                    <select name="kecamm2" id="kecamm2" class="form-control input-lg dynamic2" data-dependent="Kecamatan">
                      <option>Masukan Kecamatan</option>
                      <option">
                        </option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Desa</label>
                    <select name="desass2" id="desass2" class="form-control input-lg dynamic3" data-dependent="desass2">
                      <option>Masukan Desa</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="nama_sls">Nama SLS</label>
                    <input type="text" class="form-control" id="nama_sls" placeholder="masukan Nama SLS">
                  </div>
                  <div class="form-group">
                    <label for="alamat_KK">Alamat</label>
                    <input type="text" class="form-control" id="alamat_KK" placeholder="masukan Alamat">
                  </div>
                  <div class="form-group">
                    <label for="no_urut_KK">Nomor Urut Rumah Tangga (dari prelist)</label>
                    <input type="text" class="form-control" id="alamat_KK" placeholder="51010100010011xxxx">
                  </div>
                  <div class="form-group">
                    <label for="nama_krt">Nama Kepala Rumah Tangga</label>
                    <input type="text" class="form-control" id="alamat_KK" placeholder="Masukan Nama Kepala RUmah Tangga">
                  </div>
                  <div class="form-group">
                    <label>Jumlah Anggota Rumah Tangga</label>
                    <select class="custom-select" id="selectStores">
                      <option value="">Masukan Jumlah Anggota Rumah Tangga</option>
                      <?php
                      for ($x = 1; $x <= 10; $x++) {
                        echo "<option value='$x'>$x</option>";
                      }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Jumlah Keluarga</label>
                    <select class="custom-select">
                      <option value=''>Masukan Jumlah Keluarga</option>
                      <?php
                      for ($x = 1; $x <= 10; $x++) {
                        echo "<option value='$x'>$x</option>";
                      }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Foto Kepala Rumah Tangga</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <div class="col-md-6">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Keterangan Perumahan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-group">
                  <label>Status Penguasaan Bangunan Tempat Tinggal Yang Di Tempati</label>
                  <select name="rumahkan" id="rumahkan" class="form-control input-lg dynamic" data-dependent="rumahss">
                    <option>Masukan keterangan</option>
                    @foreach($rumss as $rowns)
                      <option value="{{ $rowns->id }}">{{ $rowns->keterangan_rumah }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Status Lahan Tempat Tinggal Yang Di Tempati</label>
                  <select name="lahannn" id="lahannn" class="form-control input-lg dynamic" data-dependent="lahannns">
                    <option>Masukan keterangan</option>
                    @foreach($lahanss as $lahansss)
                      <option value="{{ $lahansss->id }}">{{ $lahansss->keterangan_lahan }}</option>
                      @endforeach

                  </select>
                </div>
                <div class="form-group">
                  <label>Luas Lantai</label>
                  <select name="lantaiii" id="lantaiii" class="form-control input-lg dynamic" data-dependent="lantaiiis">
                    <option>Masukan keterangan</option>
                    @foreach($luaslantaiss as $lantaiii)
                      <option value="{{ $lantaiii->id }}">{{ $lantaiii->keterangan_luas_lantai }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Jenis Lantai</label>
                  <select name="jelantaiii" id="jelantaiii" class="form-control input-lg dynamic" data-dependent="jelantaiii">
                    <option>Masukan keterangan</option>
                    @foreach($jenislantaiss as $jlantaiii)
                      <option value="{{ $jlantaiii->id }}">{{ $jlantaiii->keterangan_jenis_lantai }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Jenis Dinding</label>
                  <select name="jdindingg" id="jdindingg" class="form-control input-lg dynamic" data-dependent="jdindinggs">
                    <option>Masukan Keterangan</option>
                    @foreach($jenisdindingss as $jdindings)
                      <option value="{{ $jdindings->id }}">{{ $jdindings->keterangan_jenis_dinding }}</option>
                      @endforeach
                  </select>
                  <div class="form-group" name="kdindingg" id="kdindingg" >
                  <label>Kualitas Dinding</label>
                  <select class="form-control input-lg dynamic" data-dependent="kdindinggs">
                    <option>Masukan Keterangan</option>
                    @foreach($kualitass as $kdindings)
                      <option value="{{ $kdindings->id }}">{{ $kdindings->keterangan_kualitas }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Jenis Atap</label>
                  <select name="jatapp" id="jatapp" class="form-control input-lg dynamic" data-dependent="jatapps">
                    <option>Masukan Keterangan</option>
                    @foreach($jenisatapss as $jataps)
                      <option value="{{ $jataps->id }}">{{ $jataps->keterangan_jenis_atap }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group" name="katapp" id="katapp">
                  <label>Kualitas Atap</label>
                  <select class="form-control input-lg dynamic" data-dependent="katapps">
                    <option>Masukan Keterangan</option>
                    @foreach($kualitaatapss as $kataps)
                      <option value="{{ $kataps->id }}">{{ $kataps->keterangan_kualitas_atap }}</option>
                      @endforeach
                  </select>
                  </div>
                <div class="form-group">
                  <label>Jumlah Kamar Tidur</label>
                  <select name="ktidurr" id="ktidurr" class="form-control input-lg dynamic" data-dependent="ktidurrs">
                    <option>Masukan keterangan</option>
                    @foreach($kamartidurss as $ktidurs)
                      <option value="{{ $ktidurs->id }}">{{ $ktidurs->keterangan_kamar_tidur }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Sumber Air</label>
                  <select name="sairr" id="sairr" class="form-control input-lg dynamic" data-dependent="sairrs">
                    <option>Masukan keterangan</option>
                    @foreach($sumberairss as $sairs)
                      <option value="{{ $sairs->id }}">{{ $sairs->keterangan_sumber_air }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Air Minum</label>
                  <select name="aminumm" id="aminumm" class="form-control input-lg dynamic" data-dependent="aminumms">
                    <option>Masukan keterangan</option>
                    @foreach($airminumss as $aminums)
                      <option value="{{ $aminums->id }}">{{ $aminums->keterangan_air_minum }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Sumber Penerangan</label>
                  <select name="listrikkk" id="listrikkk" class="form-control input-lg dynamic" data-dependent="listrikkks">
                    <option>Masukan keterangan</option>
                    @foreach($listrikss as $listriks)
                      <option value="{{ $listriks->id }}">{{ $listriks->keterangan_listrik }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Bahan Bakar/Energi Utama Untuk Memasak </label>
                  <select name="bbakarr" id="bbakarr" class="form-control input-lg dynamic" data-dependent="bbakarrs">
                    <option>Masukan keterangan</option>
                    @foreach($bahanbakarss as $bbakars)
                      <option value="{{ $bbakars->id }}">{{ $bbakars->keterangan_bahan_bakar_masak }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Penggunaan Fasilitas Buang Air Besar</label>
                  <select name="babb" id="babb" class="form-control input-lg dynamic" data-dependent="babbs">
                    <option>Masukan keterangan</option>
                    @foreach($buangairss as $buangairs)
                      <option value="{{ $buangairs->id }}">{{ $buangairs->keterangan_buang_air }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Jenis Kloset</label>
                  <select name="jklosett" id="jklosett" class="form-control input-lg dynamic" data-dependent="jklosetts">
                    <option>Masukan keterangan</option>
                    @foreach($jenisklosetss as $jklosets)
                      <option value="{{ $jklosets->id }}">{{ $jklosets->keterangan_jenis_kloset }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group" name="tpat" id="tpat">
                  <label>Tempat Pembuangan Akhir Tinja</label>
                  <select class="form-control input-lg dynamic" data-dependent="tpats">
                    <option>Masukan keterangan</option>
                    @foreach($pembuanganakhirss as $pakhirs)
                      <option value="{{ $pakhirs->id }}">{{ $pakhirs->keterangan_pembuangan_akhir }}</option>
                      @endforeach
                  </select>
                </div>
                {{ csrf_field() }}
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <!-- jQuery -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
  <script src="{{url('admincss/plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{url('admincss/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- ChartJS -->
  <script src="{{url('admincss/plugins/chart.js/Chart.min.js')}}"></script>
  <!-- Sparkline -->
  <script src="{{url('admincss/plugins/sparklines/sparkline.js')}}"></script>
  <!-- Summernote -->
  <script src="{{url('admincss/plugins/summernote/summernote-bs4.min.js')}}"></script>
  <!-- overlayScrollbars -->
  <script src="{{url('admincss/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{url('admincss/dist/js/adminlte.js')}}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{url('admincss/dist/js/pages/dashboard.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{url('admincss/dist/js/demo.js')}}"></script>
  <script>
$(document).ready(function(){
  $("#kdindingg").hide();
  $('#jdindingg').on('change', function() {
    var val = document.getElementById('jdindingg').value;
    console.log(val);
    if(val == '1' || val == '2' || val == '3'){
      $("#kdindingg").show();
    }else{
      $("#kdindingg").hide();
    }
  });
});
</script>
<script>
$(document).ready(function(){
  $("#katapp").hide();
  $('#jatapp').on('change', function() {
    var val = document.getElementById('jatapp').value;
    console.log(val);
    if(val == '1' || val == '2' || val == '3' || val == '4' || val == '5' || val == '6' || val == '7'){
      $("#katapp").show();
    }else{
      $("#katapp").hide();
    }
  });
});
</script>
<script>
$(document).ready(function(){
  $("#tpat").hide();
  $('#babb').on('change', function() {
    var val = document.getElementById('babb').value;
    console.log(val);
    if(val == '4'){
      $("#tpat").show();
    }else{
      $("#tpat").hide();
    }
  });
});
</script>
  <script>
    $(document).ready(function() {
      $('.dynamic1').change(function() {
        if ($(this).val() != '') {
          var value = $(this).val();
          var _token = $('input[name="_token"]').val();
          $.ajax({
            url: "{{ route('FormController.kecamm2') }}",
            method: "POST",
            data: {
              value: value,
              _token: _token
            },
            success: function(result) {
              $('#kecamm2').html(result);
            }
          })
        }
      });

      $('.dynamic2').change(function() {
        if ($(this).val() != '') {
          var value = $(this).val();
          var _token = $('input[name="_token"]').val();
          console.log(value, _token);
          $.ajax({
            url: "{{ route('FormController.desass2') }}",
            method: "POST",
            data: {
              value: value,
              _token: _token
            },
            success: function(result) {
              // console.log(result);
              $('#desass2').html(result);
            }
          })
        }
      });

      $('#kabkotss2').change(function() {
        $('#kecamm2').val('');
        $('#desass2').val('');
      });

      $('#kecamm2').change(function() {
        $('#desass2').val('');
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      $("#selectStores").change(function() {
        // $('.businessSpecifics').remove();
        var number = $("#selectStores option:selected").text();
        // console.log(number);
        var htmlToInsert = "";
        for (var i = 1; i <= number; i++) {
          htmlToInsert = '<div class="form-group"><label for="nama_krt">Nama Anggota Rumah Tangga ' + i + '</label><input type="text" class="form-control" id="alamat_KK" placeholder="Masukan Nama Anggota Rumah Tangga ' + i + '"></div>'
          $(htmlToInsert).insertAfter("#selectStores");
        }
      });
    });
  </script>


  </section>
  </div>
</body>

</html>