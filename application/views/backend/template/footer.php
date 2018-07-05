    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/backend/js/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/backend/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/backend/js/metisMenu.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/backend/js/sb-admin-2.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/js/jquery.minn.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/js/bootstrap.min.js"></script>
    <script>
        $(function() {
          
  $('#dropzone').on('dragover', function() {
    $(this).addClass('hover');
  });
  
  $('#dropzone').on('dragleave', function() {
    $(this).removeClass('hover');
  });
  
  $('#dropzone input').on('change', function(e) {
    var file = this.files[0];

    $('#dropzone').removeClass('hover');
    
    if (this.accept && $.inArray(file.type, this.accept.split(/, ?/)) == -1) {
      return alert('File type not allowed.');
    }
    
    $('#dropzone').addClass('dropped');
    $('#dropzone img').remove();
    
    if ((/^image\/(gif|png|jpeg)$/i).test(file.type)) {
      var reader = new FileReader(file);

      reader.readAsDataURL(file);
      
      reader.onload = function(e) {
        var data = e.target.result,
            $img = $('<img />').attr('src', data).fadeIn();
        
        $('#dropzone div').html($img);
      };
    } else {
      var ext = file.name.split('.').pop();
      
      $('#dropzone div').html(ext);
    }
  });
});
    </script>

</body>

</html>