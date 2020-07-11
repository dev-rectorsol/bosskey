   <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/vendors/codemirror/javascript.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/vendors/codemirror/shell.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/vendors/codemirror/codemirror.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- <script src="<?php echo base_url() ?>assets/assets/vendors/ace-builds/src-min/ace.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/vendors/ace-builds/src-min/mode-javascript.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/vendors/ace-builds/src-min/theme-chaos.js"></script> -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo base_url() ?>assets/assets/js/off-canvas.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/js/hoverable-collapse.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/js/misc.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/DataTables/datatables.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/DataTables/datatables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/js/codeEditor.js"></script>
    <!-- <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script> -->
  <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/js/froala_editor.pkgd.min.js'></script>
    <script type="text/javascript">
      new FroalaEditor('#froala-editor', {
      toolbarButtons: ['html']
      });

    </script>

<script>
$(document).ready( function () {
$('#myTable').DataTable();
} );
</script>


    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
    <script type="text/javascript">
  $(document).ready(function() {
    $("#country").on('change', function(){
         var id = $(this).val();
         var csrf_name = $("#get_csrf_hash").attr('name');
         var csrf_val = $("#get_csrf_hash").val();
         $.ajax({
           type: "POST",
           url: "<?php echo base_url('admin/user/getState') ?>",
           data: {'id' : id, '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php  echo $this->security->get_csrf_hash(); ?>'},
           datatype: 'json',
           success: function(data){
              // $("#addstates").html(JSON.parse(data));
           }
         });
    });

    // $("#menu").on('change', function(){
    //   var menu_id = $('#menu').val();
    //   $.ajax({
    //     type: "POST",
    //     url: "<?php echo base_url('admin/menu/getCategory') ?>",
    //     data: {menu_id:menu_id},
    //     datatype: 'json',
    //     success: function(data){
    //       //console.log(data); stop();
    //        $("#category").html(JSON.parse(data));
    //     }
    //   });
    // });

    $("#category").on('change', function(){
      var category_id = $('#category').val();
      $.ajax({
        type: "POST",
        url: "<?php echo base_url('admin/menu/getSubCategory') ?>",
        data: {category_id:category_id},
        datatype: 'json',
        success: function(data){
          //console.log(data); stop();
           $("#subcategory").html(JSON.parse(data));
        }
      });
    });

    $(".cources").on('change', function(){
         var id = $(this).val();

         var csrf_name = $("#get_csrf_hash").attr('name');
         var csrf_val = $("#get_csrf_hash").val();
         $.ajax({
           type: "POST",
           url: "<?php echo base_url('admin/menu/courcese') ?>",
           data: {'id' : id, '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php  echo $this->security->get_csrf_hash(); ?>'},
           datatype: 'json',
           success: function(data){
             if(data=='true'){
                 $("#myTag").css('background', 'rgb(254, 57, 84)');
                 alert('all ready added');
                  $('#btn').prop('disabled', true);
             }
             else {
               $('#btn').prop('disabled', false);
             }
              // $("#addstates").html(JSON.parse(data));
           }
         });
    });

  });

    </script>
  </body>
</html>
