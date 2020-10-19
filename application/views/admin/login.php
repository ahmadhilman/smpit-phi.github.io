    <!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Asy-Syawaliyyah | <?= $judul ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="<?= base_url('assets/img/'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url() ?>AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>AdminLTE/dist/css/adminlte.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url() ?>AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
   <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url() ?>AdminLTE/plugins/daterangepicker/daterangepicker.css">
  <!-- Google Font: Source Sans Pro -->
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="<?= base_url() ?>plugins/ekko-lightbox/ekko-lightbox.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url() ?>AdminLTE/plugins/summernote/summernote-bs4.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?= base_url() ?>AdminLTE/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url() ?>AdminLTE/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>AdminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="<?= base_url() ?>AdminLTE/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed ">
<div class="wrapper">
<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-5">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login Admin</h1>
                  </div>
                  <?= $this->session->flashdata('pesan') ?>
                  <form method="post" action="<?= base_url('admin/autentifikasi') ?>" class="user">
                    <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Id" name="id">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
                      <?= form_error('id', '<div class="text-danger small ml-2 mb-3">','</div>'); ?>

                    <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
                      <?= form_error('password', '<div class="text-danger small ml-2 mb-3">','</div>'); ?> 

                    <button type="submit" class="btn btn-primary form-control">Login  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
<!-- jQuery -->
<script src="<?= base_url('AdminLTE/') ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('AdminLTE/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url('AdminLTE/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('AdminLTE/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('AdminLTE/') ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('AdminLTE/') ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->

<script src="<?= base_url('AdminLTE/') ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- SweetAlert2 -->
<script src="<?= base_url('AdminLTE/') ?>plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?= base_url('AdminLTE/') ?>plugins/toastr/toastr.min.js"></script>
<script src="<?= base_url('AdminLTE/') ?>dist/js/adminlte.min.js"></script>
<script> $('.alert').alert().delay(3000).slideUp('slow'); </script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('AdminLTE/') ?>dist/js/demo.js"></script>
<!-- daterangepicker -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Ekko Lightbox -->
<script src="<?= base_url('AdminLTE/') ?>plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('AdminLTE/') ?>dist/js/pages/dashboard.js"></script>
<!-- Summernote -->
<script src="<?= base_url('AdminLTE/') ?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- page script -->

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
<script>
  $(function () {
    //Add text editor
    $('#compose-textarea').summernote()
  })
</script>
<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>
</script>
</body>
</html>