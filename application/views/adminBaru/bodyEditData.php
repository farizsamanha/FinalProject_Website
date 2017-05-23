<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  if(!$this->session->has_userdata('nama','status')) {
        redirect(base_url().'index.php/login');
    }
?>

<!DOCTYPE html>
<html>


<body>
	
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		
		<ul class="nav menu">
			<!-- <li><a href="index.html"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li><a href="widgets.html"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Widgets</a></li>
			<li><a href="charts.html"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Charts</a></li> 
			<li><a href="panels.html"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Alerts & Panels</a></li>
			-->
			<li class=""><a href="<?php echo base_url()."index.php/Crud/dashboard"; ?>"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Dashborad</a></li>
			<li class="active"><a href="<?php echo base_url()."index.php/Crud/readData"; ?>"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Edit Produk</a></li>
			<li class=""><a href="<?php echo base_url()."index.php/Crud/readDataStyle"; ?>"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Edit Style Rambut</a></li>
			<li><a href="<?php echo base_url()."index.php/email"; ?>"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Pesan Masuk</a></li>
			<li class=""><a href="<?php echo base_url()."index.php/Smtp/viewPage"; ?>"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Subscriber</a></li>
			<li><a href="<?php echo base_url()."index.php/register"; ?>"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Register Admin</a></li>
			
			
			<!--
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Dropdown 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 1
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 2
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 3
						</a>
					</li>
				</ul>
			</li>
			-->
			<li role="presentation" class="divider"></li>
			
		</ul>
		<div class="attribution">Template by <a href="http://www.medialoot.com/item/lumino-admin-bootstrap-template/">Medialoot</a><br/><a href="http://www.glyphs.co" style="color: #333;">Icons by Glyphs</a></div>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Produk</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					
						<div style="margin-left:10px">
						<form method="POST" action="<?php echo base_url();?>index.php/Crud/update" enctype="multipart/form-data">
					      Id : <br><input type="text" name="id" value="<?php echo $id ?>" readonly="$id"><br>
					      Nama Produk: <br><input type="text"   name="namaProduk" value="<?php echo $namaProduk ?>"><br>
					      Harga Produk : <br><input type="text"   name="hargaProduk" value="<?php echo $hargaProduk ?>"><br>
					      Deskripsi : <br><input type="text"    name="deskripsi" value="<?php echo $deskripsi ?>"><br>
					      Upload : <br><input type="file"     name="upload" value="<?php echo $upload ?>"><br>
					      
					      <button type="submit">Update Produk</button>
					    </form>
					    <br>
					    <button type="submit"><a href="<?php echo base_url()."index.php/Crud/readData/" ?>"> Back</a></button> 
	  					<br><br>
	  					</div>

				</div>

			</div>
		</div><br>
		<br>
		<p style="float:center">All rights Reserved - Created By Maman</p><!--/.row-->
		<!--	
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">Basic Table</div>
					<div class="panel-body">
						<table data-toggle="table" data-url="tables/data2.json" >
						    <thead>
						    <tr>
						        <th data-field="id" data-align="right">Item ID</th>
						        <th data-field="name">Item Name</th>
						        <th data-field="price">Item Price</th>
						    </tr>
						    </thead>
						</table>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">Styled Table</div>
					<div class="panel-body">
						<table data-toggle="table" id="table-style" data-url="tables/data2.json" data-row-style="rowStyle">
						    <thead>
						    <tr>
						        <th data-field="id" data-align="right" >Item ID</th>
						        <th data-field="name" >Item Name</th>
						        <th data-field="price" >Item Price</th>
						    </tr>
						    </thead>
						</table>
						<script>
						    $(function () {
						        $('#hover, #striped, #condensed').click(function () {
						            var classes = 'table';
						
						            if ($('#hover').prop('checked')) {
						                classes += ' table-hover';
						            }
						            if ($('#condensed').prop('checked')) {
						                classes += ' table-condensed';
						            }
						            $('#table-style').bootstrapTable('destroy')
						                .bootstrapTable({
						                    classes: classes,
						                    striped: $('#striped').prop('checked')
						                });
						        });
						    });
						
						    function rowStyle(row, index) {
						        var classes = ['active', 'success', 'info', 'warning', 'danger'];
						
						        if (index % 2 === 0 && index / 2 < classes.length) {
						            return {
						                classes: classes[index / 2]
						            };
						        }
						        return {};
						    }
						</script>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
		
		
	</div><!--/.main-->

	<script src="<?php echo base_url()."assetsAdminBaru/js/jquery-1.11.1.min.js";?>"></script>
	<script src="<?php echo base_url()."assetsAdminBaru/js/bootstrap.min.js";?>"></script>
	<script src="<?php echo base_url()."assetsAdminBaru/js/chart.min.js";?>"></script>
	<script src="<?php echo base_url()."assetsAdminBaru/js/chart-data.js";?>"></script>
	<script src="<?php echo base_url()."assetsAdminBaru/js/easypiechart.js";?>"></script>
	<script src="<?php echo base_url()."assetsAdminBaru/js/easypiechart-data.js";?>"></script>
	<script src="<?php echo base_url()."aseetsAdminBaru/js/bootstrap-datepicker.js";?>"></script>
	<script src="<?php echo base_url()."assetsAdminBaru/js/bootstrap-table.js";?>"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
