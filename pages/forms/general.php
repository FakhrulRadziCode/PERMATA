<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PERMATA | Permohonan Baru</title>

  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- InputMask -->
  <script src="../../plugins/moment/moment.min.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Hubungi</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->

      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="../../index.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Halaman Utama
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Permohonan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Permohonan Baru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Permohonan Diproses</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Permohonan Diluluskan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Permohonan Ditolak</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Keterangan Aktiviti</li>
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
          <div class="col-sm-12" >
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Keterangan Aktiviti</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Aktiviti/Program <i>(Sila Gunakan Huruf Besar)</i></label>
                        <input type="text" class="form-control" id="activity_no" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Kelab/Persatuan <i>(Nama Penuh Kelab/Persatuan)</i></label>
                        <input type="text" class="form-control" id="activity_name" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Kod Persatuan</label>
                        <input type="text" class="form-control" id="organization_id" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Peringkat Aktiviti</label>
                        <select class="form-control select2bs4" style="width: 100%;">
                          <option selected="selected">Antarabangsa</option>
                          <option>Kebangsaan</option>
                          <option>Negeri</option>
                          <option>Daerah</option>
                          <option>Universiti</option>
                          <option>Kampus</option>
                          <option>Fakulti</option>
                          <option>Kolej</option>
                          <option>Persatuan/Kelab</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Anjuran <i>(Nama kelab/persatuan yang menganjurkan program)</i></label>
                        <input type="text" class="form-control" id="organizer_name" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Anjuran Bersama</label>
                        <input type="text" class="form-control" id="collab" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Objektif Aktiviti</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tujuan Program/Aktiviti</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Latar Belakang Program/Aktiviti</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Kategori Aktiviti</label>
                        <select class="select2" multiple="multiple" data-placeholder="Sila pilih yang berkenaan" style="width: 100%;">
                          <option>Akademik/Ilmiah</option>
                          <option>Sukan/Rekreasi</option>
                          <option>Kerohanian</option>
                          <option>Keusahawanan</option>
                          <option>Kebudayaan/Warisan</option>
                          <option>Kesukarelawanan</option>
                          <option>Pengucapan Awam</option>
                          <option>Sains, Teknologi & Inovasi</option>
                          <option>Wacana Intelek</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- date picker-->
                      <div class="form-group">
                        <label>Tarikh Aktiviti:</label>
                          <div class="input-group date" id="reservationdate" data-target-input="nearest">
                              <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                              <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Pengarah Projek</label>
                        <input type="text" class="form-control" id="" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Email Pengarah Projek</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Jawatan</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>No Telefon Bimbit</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>CGPA Semasa</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Penasihat</label>
                        <input type="text" class="form-control" id="club_advisor_name" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Email Penasihat</label>
                        <input type="text" class="form-control" id="club_advisor_email_1" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Maklumat Pegawai Pengiring</label>
                        <textarea class="summernote" rows="3" placeholder="Enter ..."></textarea>
                      </div>
                    </div>
                <!-- /.form-group -->
                

                <!-- /.form-group -->
              </div>
                  

                  <!-- input states -->
                  

                </form>
              </div>
              <!-- /.card-body -->
            </div>


            
            <!-- /.card -->
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Keterangan Aktiviti</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Bilangan peserta lelaki</label>
                        <input type="number" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Bilangan peserta perempuan</label>
                        <input type="number" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                <!-- /.form-group -->
                

                <!-- /.form-group -->
              </div>
                  

                  <!-- input states -->
                  

                  

                </form>
              </div>
              <!-- /.card-body -->
            </div>

            
            
            <!-- /.card -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Hasil Aktiviti dan Kemahiran Insaniah</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label>Penganjur</label>
                    <select class="select2" multiple="multiple" data-placeholder="Sila pilih yang berkenaan" style="width: 100%;">
                      <option>Kemahiran Berkomunikasi (KI1)</option>
                      <option>Pemikiran Kritis dan Kemahiran Menyelesaikan Masalah (KI2)</option>
                      <option>Kemahiran Kerja Berpasukan (KI3)</option>
                      <option>Pembelajaran Berterusan dan Pengurusan Maklumat (KI4)</option>
                      <option>Kemahiran Keusahawanan (KI5)</option>
                      <option>Etika dan Moral Profesional (KI6)</option>
                      <option>Kemahiran Kepimpinan (KI7)</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Peserta</label>
                    <select class="select2" multiple="multiple" data-placeholder="Sila pilih yang berkenaan" style="width: 100%;">
                      <option>Kemahiran Berkomunikasi (KI1)</option>
                      <option>Pemikiran Kritis dan Kemahiran Menyelesaikan Masalah (KI2)</option>
                      <option>Kemahiran Kerja Berpasukan (KI3)</option>
                      <option>Pembelajaran Berterusan dan Pengurusan Maklumat (KI4)</option>
                      <option>Kemahiran Keusahawanan (KI5)</option>
                      <option>Etika dan Moral Profesional (KI6)</option>
                      <option>Kemahiran Kepimpinan (KI7)</option>
                    </select>
                  </div>
                </div>
              </form>
            </div>

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Penutup</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                <textarea class="summernote" id="summernote">
                    Place <em>some</em> <u>text</u> <strong>here</strong>
                </textarea>
                </div>
              </form>
            </div>
            <!-- general form elements -->
            
            <!-- /.card -->

            <!-- Input addon -->
            
            <!-- /.card -->
            <!-- Horizontal Form -->
            
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->



<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- Page specific script -->

<script>
  $(function () {
    bsCustomFileInput.init();

    // Summernote
    $(document).ready(function() {
      $('.summernote').summernote();
    });

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
  })
  
  //Initialize Select2 Elements
  $('.select2').select2()

  //Initialize Select2 Elements
  $('.select2bs4').select2({
  theme: 'bootstrap4'
  
});

</script>
</body>
</html>
