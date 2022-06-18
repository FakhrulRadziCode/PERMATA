
<?php
  include('../../include/header.php');
?>
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
        <a href="../../dashboard.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Hubungi</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

   <!-- Main Sidebar Container -->
   <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../dashboard.php" class="brand-link">
      <img src="../../dist/img/uitm-logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PERMATA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['studentname'];?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="../../dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Halaman Utama
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
                <a href="proses.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Permohonan Diproses</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="approved.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Permohonan Diluluskan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="rejected.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Permohonan Ditolak</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="../../info.php" class="nav-link">
              <i class="nav-icon fas fa-info-circle"></i>
              <p>
                Info HEP
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../plogout.php" class="nav-link" style="background-color: #a83232;">
              <i class="nav-icon fas fa-door-open"></i>
              <p>
                Log Keluar
              </p>
            </a>
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
            <h1>Permohonan Baru</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Permohonan Baru</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <form id="application" name="application" method="post" action="..\..\papplication.php" >
        <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Keterangan Aktiviti</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Aktiviti/Program <i>(Sila Gunakan Huruf Besar)</i></label>
                        <input type="text" name="activity_no"  class="form-control" id="activity_no" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Kelab/Persatuan <i>(Nama Penuh Kelab/Persatuan)</i></label>
                        <input type="text" name="activity_name" class="form-control" id="activity_name" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Kod Persatuan</label>
                        <input type="text" name="organization_id" class="form-control" id="organization_code" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                          <label>Peringkat Aktiviti</label>
                          <select class="form-control select2bs4" name="level_name" style="width: 100%;">
                            <option value="IT">Antarabangsa</option>
                            <option value="NA">Kebangsaan</option>
                            <option value="ST">Negeri</option>
                            <option value="DT">Daerah</option>
                            <option value="UN">Universiti</option>
                            <option value="CP">Kampus</option>
                            <option value="FC">Fakulti</option>
                            <option value="CL" selected="selected">Kolej</option>
                            <option value="OG">Persatuan/Kelab</option>
                          </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Anjuran <i>(Nama kelab/persatuan yang menganjurkan program)</i></label>
                        <input type="text" name="organizer_name" class="form-control" id="organizer_name" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Anjuran Bersama</label>
                        <input type="text" name="coorganizer_name" class="form-control" id="coorganizer_name" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Objektif Aktiviti</label>
                        <textarea class="summernote" name="objective" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tujuan Program/Aktiviti</label>
                        <textarea class="summernote" rows="3" name="purpose" id="purpose" placeholder="Enter ..."></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Latar Belakang Program/Aktiviti</label>
                          <textarea class="summernote" name="activity_background" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Kategori Aktiviti</label>
                          <select class="select2" multiple="multiple" name="category_id" id="category_id" data-placeholder="Sila pilih yang berkenaan" style="width: 100%;">
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
                <div class="col-md-6">
                    <div class="form-group">
                          <label>Tarikh Aktiviti:</label>
                            <div class="input-group date" name="reservationdate" id="reservationdate" data-target-input="nearest">
                                <input type="text"  id="date" name="date" value="Date" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Pengarah Projek</label>
                        <input type="text" class="form-control" name="studentname" id="studentname" value= "<?php echo $_SESSION['studentname'];?>" placeholder="Enter ..." disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Email Pengarah Projek</label>
                        <input type="email" class="form-control" name="studentemail" id="studentemail" value= "<?php echo $_SESSION['studentemail']; ?>" placeholder="Enter ..." disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Jawatan</label>
                        <input type="text" class="form-control" name="position" id="position" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>No Telefon Bimbit</label>
                        <input type="text" class="form-control" name="studentphoneno" id="studentphoneno" value="<?php echo $_SESSION['studentphoneno']; ?>" placeholder="Enter ..." disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>CGPA Semasa</label>
                        <input type="text" class="form-control" name="cgpa" id="cgpa" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Penasihat</label>
                        <input type="text" class="form-control" name="club_advisor_name" id="club_advisor_name" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Email Penasihat</label>
                        <input type="text" class="form-control" name="club_advisor_email_1" id="club_advisor_email_1" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Maklumat Pegawai Pengiring</label>
                        <textarea class="summernote" rows="3" name="escort_officer" placeholder="Enter ..."></textarea>
                    </div>
                </div>
                </div>
                <!-- /.row -->

                
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- SELECT2 EXAMPLE -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Penyertaan (Bilangan Peserta)</h3>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Bilangan peserta lelaki</label>
                                <input type="number" name="maleparticipant" id="maleparticipant" class="form-control" placeholder="Enter ...">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Bilangan peserta perempuan</label>
                                <input type="number" name="femaleparticipant" id="femaleparticipant" class="form-control" placeholder="Enter ...">
                            </div>
                            <!-- /.form-group -->
                        </div>
                    <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>
            <!-- /.card -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Hasil Aktiviti dan Kemahiran Insaniah</h3>
                </div>

                <div class="card-body">
                    <div class="form-group">
                      <label>Penganjur</label>
                      <select class="select2" name="organizergoal" id="organizergoal" multiple="multiple" data-placeholder="Sila pilih yang berkenaan" style="width: 100%;">
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
                      <select class="select2" name="participantgoal" id="participantgoal" multiple="multiple" data-placeholder="Sila pilih yang berkenaan" style="width: 100%;">
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
            </div>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Hasil Aktiviti dan Kemahiran Insaniah</h3>
                </div>

                <div class="card-body">
                    <label for="">Rumusan program/aktiviti yang akan dijalankan</label>
                        <textarea class="summernote" name="closing" id="summernote"></textarea>
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.container-fluid -->
            <div class="card-footer">
                <button type="submit" name="btnsend" id="btnsend" class="btn btn-primary">Hantar</button>
                <!-- <button type="submit" class="btn btn-danger">Padam</button> -->
            </div>
        </section>
    <!-- /.content -->
    </form>
    <!-- Main content -->
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
