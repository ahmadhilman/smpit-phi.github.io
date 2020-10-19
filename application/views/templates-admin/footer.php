<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; <?= date('Y') ?> <a href="http://adminlte.io">Ahmad Hilman R.</a>.</strong> 
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

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
<!-- Bootstrap Switch -->
<script src="<?= base_url('AdminLTE/') ?>plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('AdminLTE/') ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url('AdminLTE/') ?>plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?= base_url('AdminLTE/') ?>plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
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
    //Add text editor
    $('#compose-textarea2').summernote()
  })
</script>
<script>
  $(function () {
    //Add text editor
    $('#compose-textarea3').summernote()
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
  })</script>
  <script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>
</script>
</script>
</body>
</html>