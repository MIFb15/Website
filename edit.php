<?php
include("koneksi.php");
//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
	$id = $_GET['id'];
	//melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
	$show = mysql_query("SELECT * FROM table_film WHERE kode_film='$id'");
	
	//cek apakah data dari hasil query ada atau tidak
	
		//jika data ditemukan, maka membuat variabel $data
		$data = mysql_fetch_array($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
	
	?>
<!DOCTYPE html>
<html lang="en">
<head>
<!--
Project      : Data Karyawan CRUD MySQLi (Create, read, Update, Delete) PHP, MySQLi dan Bootstrap
Author		 : Hakko Bio Richard, A.Md
Website		 : http://www.niqoweb.com
Blog         : http://www.acchoblues.blogspot.com
Email	 	 : hakkobiorichard[at]gmail.com
-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Latihan MySQLi</title>

	
	<style>
		.content {
			margin-top: 80px;
		}
		body {
			background-color:#eee;
		}
	</style>
	
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	
	<div class="container">
		<div class="content">
		  <p>&nbsp;</p>
		  <h2>Data Film &raquo; Edit Data</h2>
			<hr />
			
			
            
			
			<form class="form-horizontal" action="" method="post">
				&nbsp;
                
              <div class="form-group">
					<label class="col-sm-3 control-label">Kode Film</label>
					<div class="col-sm-2">
						<input name="kode_film" type="text" disabled required class="form-control" placeholder="Kode Film" value="<?php echo $id; ?>">
				  </div>
			  </div>
                &nbsp;
			  <div class="form-group">
					<label class="col-sm-3 control-label">Judul</label>
					<div class="col-sm-4">
						<input name="Judul" type="text" required class="form-control" placeholder="Judul" value="<?php echo $data['Judul']; ?>">
					</div>
			  </div>
                &nbsp;
			  <div class="form-group">
					<label class="col-sm-3 control-label">Genre</label>
					<div class="col-sm-4">
						<input name="Genre" type="text" required class="form-control" placeholder="Genre" value="<?php echo $data['Genre']; ?>">
					</div>
			  </div>
                &nbsp;
			  <div class="form-group">
					<label class="col-sm-3 control-label">Sinopsis</label>
					<div class="col-sm-3">
						<textarea name="Sinopsis" class="form-control" placeholder="Sinopsis"><?php echo $data['Sinopsis']; ?></textarea>
					</div>
			  </div>
						<p>&nbsp;</p>
						<p>&nbsp;</p>
				
                <div class="col-sm-3">
                
						  <input type="submit" name="update" class="btn btn-sm btn-primary" value="Simpan">
						  <a href="?page=master" class="btn btn-sm btn-danger">Batal</a></p>
              </div>
                          
		  </form>
                <?php
if($_POST['update']){
				$id				=$_GET['id'];
				$kode_film		=$_POST['kode_film'];
				$Judul			= $_POST['Judul'];
				$Genre		     = $_POST['Genre'];
				$Sinopsis		 = $_POST['Sinopsis'];
				
				
	$update = mysql_query("update table_film set Judul='$Judul',Genre='$Genre',Sinopsis='$Sinopsis' where kode_film='$id'") or die(mysql_error());
	
	if($update){
		echo '<p>&nbsp;</p><p>&nbsp;</p><div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil disimpan.</div>';
		echo "<script>location='.?page=master'</script>";
		}else{
		
		echo 'Gagal menyimpan data! ';		//Pesan jika proses simpan gagal
}
}
?>
	  </div>
</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="../sheillaFP/js/bootstrap.min.js"></script>
	<script src="../sheillaFP/js/bootstrap-datepicker.js"></script>
	<script>
	$('.date').datepicker({
		format: 'yyyy-mm-dd',
	})
	</script>
</body>
</html>