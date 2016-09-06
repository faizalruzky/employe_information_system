
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/docs.css" rel="stylesheet">
	<style>
		body{
			margin:20px;
			}
	</style>
	
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/application.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/bootstrap-tooltip.js"></script>
  </head>

  <body>
	<div class="well">
	<?php if(validation_errors()) { ?>
	<div class="alert alert-block">
	  <button type="button" class="close" data-dismiss="alert">×</button>
	  	<h4>Terjadi Kesalahan!</h4>
		<?php echo validation_errors(); ?>
	</div>
	<?php } ?>
		<?php echo form_open('sms_gateway/kirim','class="form-horizontal"'); ?>
		  <div class="control-group">
		  	<legend>SMS Gateway</legend>
			<label class="control-label" for="no_tujuan">No Tujuan</label>
			<div class="controls">
			  <input type="text" class="span" name="no_telepon" id="no_telepon" value="<?php echo $no_telepon; ?>" placeholder="Masukan nomor telepon disini">
			</div>
		  </div>
		  <div class="control-group">
		  	<label class="control-label" for="text_sms">Text Sms</label>
			<div class="controls">
			  <textarea class="span" name="text_sms" id="text_sms" value="<?php echo $text_sms; ?>" placeholder="isi sms"></textarea>
			</div>
		  </div>
		  
		  <div class="control-group">
			<div class="controls">
			  <button type="submit" class="btn btn-primary">Kirim</button>
			  <button type="reset" class="btn">Hapus Data</button>
			</div>
		  </div>
		<?php echo form_close(); ?>
	</div>    
	
  </body>
</html>
