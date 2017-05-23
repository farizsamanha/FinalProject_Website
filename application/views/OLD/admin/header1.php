<?php 
    if(!$this->session->has_userdata('nama','status')) {
        redirect(base_url().'index.php/login');
    }
?>
<!DOCTYPE html>
<html>
<title>Admin Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-light-blue.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
li:active {background-color:blue;}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-container w3-top w3-theme w3-large w3-padding" style="z-index:4">
  <button class="w3-btn w3-hide-large w3-padding-0 w3-hover-text-grey" onclick="w3_open();"><i class="fa fa-bars"></i> &nbsp;Menu</button>
  <span class="w3-right w3-text-white"><a href="<?php echo base_url()."index.php"; ?>" style="text-decoration:none;"><b>Doctor Barbershop Admin</b></a></span>
</div>

<!-- Sidenav/menu -->
<nav class="w3-sidenav w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidenav"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="http://www.w3schools.com/w3images/avatar2.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8">
      <span>Selamat datang, <b><?php echo $this->session->nama; ?></b>.</span><br>
      <a href="#" class="w3-hover-none w3-hover-text-red w3-show-inline-block"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-hover-none w3-hover-text-green w3-show-inline-block"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-hover-none w3-hover-text-blue w3-show-inline-block"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <a href="#" class="w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>&nbsp; Close Menu</a>

  <li class="w3-hide-small w3-dropdown-hover">
    <a href="<?php echo base_url()."index.php/CRUD/readData"; ?>" class="w3-padding">
      <i class="fa fa-comment fa-fw"></i>Edit Produk<span class="w3-right"></i></span>
    </a>


  <li class="w3-hide-small w3-dropdown-hover">
    <a href="<?php echo base_url()."index.php/CRUD/readDataStyle"; ?>" class="w3-padding">
      <i class="fa fa-money fa-fw"></i>  Edit Gaya Rambut <span class="w3-right"></i></span>
    </a>
  </li>
  <a href="<?php echo base_url()."index.php/register"; ?>" class="w3-padding"><i class="fa fa-cog fa-fw"></i>Register Admin</a>
  <a href="<?php echo base_url()."index.php/login/logout"; ?>" class="w3-padding"><i class="fa fa-sign-out fa-fw"></i>Keluar</a><br><br>
</nav>


<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>