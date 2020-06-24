   <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo base_url() ?>assets/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo base_url() ?>assets/assets/js/off-canvas.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/js/hoverable-collapse.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/js/misc.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/DataTables/datatables.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/DataTables/datatables.min.js"></script>
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script> -->
  <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/js/froala_editor.pkgd.min.js'></script>
    <script type="text/javascript">
      new FroalaEditor('#froala-editor', {
      toolbarButtons: ['html']
      });
    </script>
    <!-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea'});</script> -->
 <!-- <script src="https://cdn.tiny.cloud/1/7cv2dqnel593wb2oaiz0a9em8ntmdvdac0l7ueeotay964ht/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
 <script>
  tinymce.init({
  selector: 'textarea',
    plugins: 'a11ychecker advcode casechange formatpainter linkchecker lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinydrive tinymcespellchecker',
    toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter insertfile pageembed permanentpen table',
    toolbar_drawer: 'floating',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
  });
</script> -->



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

    $("#menu").on('change', function(){
      var menu_id = $('#menu').val();
      $.ajax({
        type: "POST",
        url: "<?php echo base_url('admin/menu/getCategory') ?>",
        data: {menu_id:menu_id},
        datatype: 'json',
        success: function(data){
          //console.log(data); stop();
           $("#category").html(JSON.parse(data));
        }
      });
    });

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
  });

    </script>
  </body>
</html>
