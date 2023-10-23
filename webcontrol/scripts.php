 <!-- General JS Scripts -->
 <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/echart/echarts.js"></script>
  
  <script src="assets/bundles/chartjs/chart.min.js"></script>
  <script src="assets/bundles/apexcharts/apexcharts.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/index.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="../shared/ckeditor/ckeditor.js"></script>
  <script src="../shared/toastr.min.js"></script>
  <script src="assets/bundles/izitoast/js/iziToast.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/toastr.js"></script> <script src="assets/bundles/datatables/datatables.min.js"></script>
  <script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/bundles/datatables/export-tables/dataTables.buttons.min.js"></script>
  <script src="assets/bundles/datatables/export-tables/buttons.flash.min.js"></script>
  <script src="assets/bundles/datatables/export-tables/jszip.min.js"></script>
  <script src="assets/bundles/datatables/export-tables/pdfmake.min.js"></script>
  <script src="assets/bundles/datatables/export-tables/vfs_fonts.js"></script>
  <script src="assets/bundles/datatables/export-tables/buttons.print.min.js"></script>
  <script src="assets/js/page/datatables.js"></script>




  
  <script>
              CKEDITOR.replace('ckeditora',{
                  // resize_enabled:false,
                  resize_maxheight:'500'
                  });
                  CKEDITOR.replace('ckeditord',{
                  // resize_enabled:false,
                  resize_maxheight:'500'
                  });
                  CKEDITOR.replace('ckeditorp',{
                  // resize_enabled:false,
                  resize_maxheight:'500'
                  });
                  CKEDITOR.replace('ckeditoro',{
                  // resize_enabled:false,
                  resize_maxheight:'500'
                  });
           CKEDITOR.replace('ckeditor2',{
                  // resize_enabled:false,
                  resize_maxheight:'500'
                  });
                  CKEDITOR.replace('ckeditor',{
                  // resize_enabled:false,
                  resize_maxheight:'500'
                  });
                 
                  
    </script>

<?php
if(isset($_SESSION['msg'])){ ?>
  <script> toastr.success("<?php echo $_SESSION['msg']; ?>"); </script>
  <?php }
unset($_SESSION['msg']);
  ?>
  <?php
if(isset($_SESSION['msg2'])){ ?>
  <script> toastr.error("<?php echo $_SESSION['msg2']; ?>"); </script>
  <?php }
unset($_SESSION['msg2']);
  ?>