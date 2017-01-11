<?php
include("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
	
    <!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	
	<style>
		.content {
			margin-top: 80px;
		}
		body {
			background-color:#eee;
		}
	</style>
	
	
</head>
<body>
	
	<div class="container">
		<div class="content">
		  <h2>Data Film &raquo; Tambah Data</h2>
			
			<form class="form-horizontal" action="" method="post">
				&nbsp;
                <div class="form-group">
					<label class="col-sm-3 control-label">Kode Film</label>
					<div class="col-sm-2">
						<input type="text" name="kode_film" class="form-control" placeholder="Kode Film" required>
					</div>
				</div>
                &nbsp;
			  <div class="form-group">
					<label class="col-sm-3 control-label">Judul</label>
					<div class="col-sm-4">
						<input type="text" name="Judul" class="form-control" placeholder="Judul" required>
					</div>
				</div>
                &nbsp;
			  <div class="form-group">
					<label class="col-sm-3 control-label">Genre</label>
					<div class="col-sm-4">
						<input type="text" name="Genre" class="form-control" placeholder="Genre" required>
					</div>
				</div>
                &nbsp;
			  <div class="form-group">
					<label class="col-sm-3 control-label">Sinopsis</label>
					<div class="col-sm-3">
						<textarea name="Sinopsis" class="form-control" placeholder="Sinopsis"></textarea>
					</div>
				</div>
						<p>&nbsp;</p>
						<p>&nbsp;</p>
				<div class="form-group">
					<label class="col-sm-3 control-label">Upload Gambar</label>
					<div class="col-sm-3">
						<input type="file" name="Gambar" class="form-control" >
					</div>
				</div>
                <p>&nbsp;</p>
                <div class="col-sm-3">
                
						  <input type="submit" name="add" class="btn btn-sm btn-primary" value="Simpan">
						  <a href="?page=master" class="btn btn-sm btn-danger">Batal</a></p>
                          </div>
                          
				</form>
                <?php
if($_POST['add']){
				$kode_film		 = $_POST['kode_film'];
				$Judul		     = $_POST['Judul'];
				$Genre		     = $_POST['Genre'];
				$Sinopsis		 = $_POST['Sinopsis'];
				$Gambar		     = $_POST['Gambar'];
				
	mysql_query("insert into table_film set kode_film='$kode_film',Judul='$Judul',Genre='$Genre',Sinopsis='$Sinopsis',Gambar='$Gambar'");
	
	echo '<p>&nbsp;</p><p>&nbsp;</p><div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Film Berhasil Di Ditambahkan</div>';
	echo "<script>location='.?page=master'</script>";
}
?>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
	$('.date').datepicker({
		format: 'yyyy-mm-dd',
	})
	</script>
</body>
</html>