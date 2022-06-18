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

    <form id="application" name="application" action="../../papplication.php" method="POST" onsubmit="return confirm('Are you sure you want to submit this form?');">
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
                        <input type="text" name="activity_no" class="form-control" id="activity_no" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Kelab/Persatuan</label>
                        <select class="form-control select2bs4" name="organization_id" style="width: 100%;">
                            <option selected>DN69 - MARA Youth Technology Computer Club (MYTECC)</option>
                            <option>YM42 - Muslim Apprentince Club (MAC)</option>
                            <option>DE22 - English Club (EC)</option>
                            <option>NU12 - Photomedia Club (PMC)</option>
                        </select>
                    </div>
                </div>
                <!-- <div class="col-md-6">
                    <div class="form-group">
                        <label>Kod Persatuan</label>
                        <input type="text" name="organization_id" class="form-control" id="organization_id">
                    </div>
                </div> -->
                <div class="col-md-6">
                    <div class="form-group">
                          <label>Peringkat Aktiviti</label>
                          <select class="form-control select2bs4" name="level_name" style="width: 100%;">
                            <option selected>Antarabangsa</option>
                            <option>Kebangsaan</option>
                            <option>Negeri</option>
                            <option>Daerah</option>
                            <option>Universiti</option>
                            <option>Kampus</option>
                            <option>Fakulti</option>
                            <option selected="selected">Kolej</option>
                            <option>Persatuan/Kelab</option>
                          </select>
                    </div>
                </div>
                <!-- <div class="col-md-6">
                    <div class="form-group">
                        <label>Anjuran <i>(Nama kelab/persatuan yang menganjurkan program)</i></label>
                        <input type="text" name="organizer_name" class="form-control" id="organizer_name">
                    </div>
                </div> -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Anjuran Bersama</label>
                        <input type="text" name="coorganizer_name" class="form-control" id="coorganizer_name" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Objektif Aktiviti</label>
                        <textarea class="summernote" name="objective" rows="3" required></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tujuan Program/Aktiviti</label>
                        <textarea class="summernote" rows="3" name="purpose" required></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Latar Belakang Program/Aktiviti</label>
                          <textarea class="summernote" name="activity_background" rows="3" required></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Ahli Jawatankuasa</label>
                          <textarea class="summernote" name="committee" rows="3" required></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Kategori Aktiviti</label>
                          <select class="select2" multiple="multiple" name="category_id" data-placeholder="Sila pilih yang berkenaan" style="width: 100%;">
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
                        <input type="text" class="form-control" name="studentname" id="studentname" value= "<?php echo $_SESSION['studentname'];?>" disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Email Pengarah Projek</label>
                        <input type="email" class="form-control" name="studentemail" id="studentemail" value= "<?php echo $_SESSION['studentemail']; ?>" disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Jawatan</label>
                        <input type="text" class="form-control" name="position" id="position" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>No Telefon Bimbit</label>
                        <input type="text" class="form-control" name="studentphoneno" id="studentphoneno" value="<?php echo $_SESSION['studentphoneno']; ?>" disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>CGPA Semasa</label>
                        <input type="text" class="form-control" name="cgpa" id="" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Penasihat</label>
                        <input type="text" class="form-control" name="club_advisor_name" id="club_advisor_name" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Email Penasihat</label>
                        <input type="text" class="form-control" name="club_advisor_email_1" id="club_advisor_email_1" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Maklumat Pegawai Pengiring</label>
                        <textarea class="summernote" rows="3" name="escort_officer"></textarea>
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
                                <input type="number" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Bilangan peserta perempuan</label>
                                <input type="number" class="form-control">
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
            </div>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Hasil Aktiviti dan Kemahiran Insaniah</h3>
                </div>

                <div class="card-body">
                    <label for="">Rumusan program/aktiviti yang akan dijalankan</label>
                        <textarea class="summernote" id="summernote"></textarea>
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.container-fluid -->
            <div class="card-footer">
              <button type="submit" name="btnsend" id="btnsend" class="btn btn-primary">Hantar</button>
              <button type="submit" class="btn btn-danger">Padam</button>
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
<!-- SweetAlert2 -->
<script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- Alert -->
<script>
  function papplication(student_id) {
    Swal.fire({
      title: 'Do you want to save the changes?',
      showDenyButton: true,
      showCancelButton: true,
      confirmButtonText: 'Save',
      denyButtonText: `Don't save`,
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        Swal.fire('Saved!', '', 'success')
      } else if (result.isDenied) {
        Swal.fire('Changes are not saved', '', 'info')
      }
    })
  }
</script>
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
