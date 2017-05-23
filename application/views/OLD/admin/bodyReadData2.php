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
    <h5><b><i class="fa fa-dashboard"></i> Edit Style Rambut</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div role="search">
      <input type='text'>
    </div> 
    <table border="1">
    <tr>
      <th>ID</th>
      <th>Deskripsi</th>
      <th>Foto</th>
      <th>Price</th>
      <th>Price 2</th>
      <th>Aksi Edit</th>
      <th>Aksi Delete</th>
      
    </tr>
    <?php foreach($dataStyle as $x){ ?>
    <tr>
      <td><?php echo $x['id']; ?></td>
      <td><?php echo $x['deskripsi']; ?></td>
      <td><img src="<?php echo base_url('uploadGaya/'.$x['foto']); ?>" height='200' width='250'> </td>
      <td><?php echo $x['price']; ?></td>
      <td><?php echo $x['price2']; ?></td>
      <td><button><a href="<?php echo base_url()."index.php/CRUD/getProdukStyle/".$x['id']; ?>">Edit</a> </button> </td>  
      <td><button><a href="<?php echo base_url()."index.php/CRUD/delete/".$x['id']; ?>"> Delete</a> </button> </td>
    </tr>
    <?php }?>
    </table>
    <br><br>
    <button><a href="<?php echo base_url()?>/index.php/CRUD/viewAddDataStyle">TAMBAH DATA</button>
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