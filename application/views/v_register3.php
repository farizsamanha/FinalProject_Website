<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  if(!$this->session->has_userdata('nama','status')) {
        redirect(base_url().'index.php/login');
    }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Register Admin</title>
		<meta name="description" content="description">
		<meta name="author" content="Evgeniya">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="<?php echo base_url(); ?>assetsAdmin/plugins/bootstrap/bootstrap.css" rel="stylesheet">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
		<link href="<?php echo base_url(); ?>assetsAdmin/css/style.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
				<script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
				<script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
<body>
<div class="container-fluid">
	<div id="page-login" class="row">
		<div class="col-xs-12 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
			<form class="box" action="<?php echo base_url(); ?>index.php/Register/aksi_register" method="post">
				<div class="box-content">
					<div class="text-center">
						<h3 class="page-header">Admin Register Page</h3>
					</div>
					<div class="form-group">
						<label class="control-label">Username</label>
						<input type="text" class="form-control" name="username" required="" />
					</div>
					<div class="form-group">
						<label class="control-label">Password</label>
						<input type="password" class="form-control" name="password" required=""/>
					</div>
					<div class="text-center">
						<input type="submit" value="Buat Akun">
					</div>
					<div class="text-center">
						<?php if (isset($message)) { ?>
							<h3 style="color:green;">Data inserted successfully</h3><br>
						<?php } ?>	
					</div>
					<br>
					<div class="text-center">
						<button><a href="<?php echo base_url()."index.php/Crud/readData" ?>"> Kembali Ke Home</a> </button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>
