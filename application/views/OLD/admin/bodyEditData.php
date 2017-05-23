<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  if(!$this->session->has_userdata('nama','status')) {
        redirect(base_url().'index.php/login');
    }
?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Edit Produk</b></h5>
  </header>
  <div class="w3-row-padding w3-margin-bottom" style="margin-left:10px">
    <form method="POST" action="<?php echo base_url();?>index.php/CRUD/update">
      Id : <br><input type="text" name="id" value="<?php echo $id ?>" readonly="$id"><br>
      Nama Produk: <br><input type="text"   name="namaProduk" value="<?php echo $namaProduk ?>"><br>
      Harga Produk : <br><input type="text"   name="hargaProduk" value="<?php echo $hargaProduk ?>"><br>
      Deskripsi : <br><input type="text"    name="deskripsi" value="<?php echo $deskripsi ?>"><br>
      Upload : <br><input type="file"     name="upload" value="<?php echo $upload ?>"><br>
      <br>
      <button type="submit">Update Produk</button>
    </form>
    <button type="submit"><a href="<?php echo base_url()."index.php/CRUD/readData/" ?>"> Back</a></button>  
  </div>
  <!-- End page content -->

</div>

<script>
// Get the Sidenav
var mySidenav = document.getElementById("mySidenav");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidenav, and add overlay effect
function w3_open() {
    if (mySidenav.style.display === 'block') {
        mySidenav.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidenav.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidenav with the close button
function w3_close() {
    mySidenav.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
</html>