  <!-- Scroll to top -->
  <a href="#" class="scroll-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
<!-- Bootsrap JS -->
<script src="<?php echo base_url() ?>assets/vender/bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 JS -->
<script src="<?php echo base_url() ?>assets/vender/select2/js/select2.min.js"></script>
<!-- Match Height JS -->
<script src="<?php echo base_url() ?>assets/vender/matchHeight/js/matchHeight-min.js"></script>
<!-- Bxslider JS -->
<script src="<?php echo base_url() ?>assets/vender/bxslider/js/bxslider.min.js"></script>
<!-- Waypoints JS -->
<script src="<?php echo base_url() ?>assets/vender/waypoints/js/waypoints.min.js"></script>
<!-- Counter Up JS -->
<script src="<?php echo base_url() ?>assets/vender/counterup/js/counterup.min.js"></script>
<!-- Magnific Popup JS -->
<script src="<?php echo base_url() ?>assets/vender/magnific-popup/js/magnific-popup.min.js"></script>
<!-- Owl Carousal JS -->
<script src="<?php echo base_url() ?>assets/vender/owl-carousel/js/owl.carousel.min.js"></script>
<!-- Modernizr JS -->
<script src="<?php echo base_url() ?>assets/js/modernizr.custom.js"></script>
<!-- Custom JS -->
<script src="<?php echo base_url() ?>assets/js/custom.js"></script>
<script type="text/javascript">
$("#country").on('change', function(){
      var id = $(this).val();

      var csrf_name = $("#get_csrf_hash").attr('name');
      var csrf_val = $("#get_csrf_hash").val();
      $.ajax({
        type: "POST",
        url: "<?php echo base_url('home/getcountry') ?>",
        data: {'id' : id, '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php  echo $this->security->get_csrf_hash(); ?>'},
        datatype: 'json',
        success: function(data){
           $("#phonecode").html(JSON.parse(data));
        }
      });
    });
    $("#country").on('change', function(){
          var country_id = $(this).val();
          console.log(country_id);
          var csrf_name = $("#get_csrf_hash").attr('name');
          var csrf_val = $("#get_csrf_hash").val();
          $.ajax({
            type: "POST",
            url: "<?php echo base_url('home/getState')?>",
            data: {'country_id' : country_id, '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php  echo $this->security->get_csrf_hash(); ?>'},
            datatype: 'json',
            success: function(data){
               $("#addstates").html(JSON.parse(data));
            }
          });
        });
    $("#addstates").on('change', function(){
      var state_id = $(this).val();
      var csrf_name = $("#get_csrf_hash").attr('name');
      var csrf_val = $("#get_csrf_hash").val();
      $.ajax({
        type: "POST",
        url: "<?php echo base_url('home/getCite') ?>",
        data: {'state_id' : state_id, '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php  echo $this->security->get_csrf_hash(); ?>'},
        datatype: 'json',
        success: function(data){
           $("#addcity").html(JSON.parse(data));
        }
      });
    });
     $("#name").on('keyup', function(){

          var name = $(this).val();

          var csrf_name = $("#get_csrf_hash").attr('name');
          var csrf_val = $("#get_csrf_hash").val();
          $.ajax({
            type: "POST",
            url: "<?php echo base_url('admin/user/getName') ?>",
            data: {'first_name' : name, '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php  echo $this->security->get_csrf_hash(); ?>'},
            datatype: 'json',
            success: function(data){
               $("#user_id").html(JSON.parse(data));
            }
          });
        });



            $(document).ready(function(){
                $("#form").modal('show');
            });

</script>
  <script language="javascript">
	populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
</script>

<script>
  $("#quickform").on("click", function() {
if ($("#enquery").is(":hidden")) {
    $("#enquery").slideToggle("slow");
} else {
    $("#enquery").slideToggle("slow");
}
});
$(document).ready(function(){
  $("#closeenquery").click(function(){
    $("#enquery").hide();
  });

});
</script>
</body>
</html>
