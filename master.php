
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

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
	<style>
		.content {
			margin-top: 80px;
		}
	</style>
	
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	
	<div class="row">
		
			<h2>&nbsp;</h2>
			<form class="form-inline" method="POST">
				<div class="form-group">
					<h2>Data Film</h2>
					<p><?php if(!empty($_SESSION['admin'])) {?><a href="?page=add" class="btn btn-primary" role="button">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah
                    </a>
					
					<?php } ?></p>
	
				<p>Pencarian Berdasarkan
      			<select name="kategori">
        		<option value="kode_film">Kode Film</option>
        		<option value="Judul">Judul</option>
        		
      			</select>
    			<input name="tcari" type="text" id="txt_cari">
    			<input name="bcari" type="submit" value="Cari">
				</p>
			  </div>
                
                 <div class="table-responsive">
			<table class="table table-hover">
				<tr class="active">
                    <th>No</th>
					<th>Kode Film</th>
					<th>Judul</th>
                    <th>Genre</th>
					<th>Sinopsis</th>
                    <?php if(!empty($_SESSION['admin'])) {?><th>Aksi</th><?php } ?>
				</tr>
				<?php
		include('koneksi.php');
		
		if (isset($_POST['bcari'])) { 
		$tcari = $_POST['tcari'];
		$kategori=$_POST['kategori'];
		
		$query = mysql_query("SELECT * from table_film
				 where $kategori LIKE '%$tcari%'
				 ORDER BY kode_film") or die(mysql_error());
		}else{		
		
		$query = mysql_query("SELECT * FROM table_film ORDER BY kode_film ") or die(mysql_error());
		}
		
		if(mysql_num_rows($query) == 0){	
			
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	
			
			$no = 1;
			while($data = mysql_fetch_assoc($query)){
						echo '
						<tr>
							<td>'.$no++.'</td>
							<td>'.$data['kode_film'].'</td>
							<td>'.$data['Judul'].'</td>
							<td>'.$data['Genre'].'</td>
							<td>'.$data['Sinopsis'].'</td>
							';
							
						if(!empty($_SESSION['admin'])) {echo '
							
							<td>
								
								<a href="?page=edit&id='.$data['kode_film'].'" title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
		
								<a href="?page=hapus&id='.$data['kode_film'].'" title="Hapus Data" onclick="return confirm(\'Anda yakin akan menghapus data '.$data['Judul'].'?\')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
							</td>
						</tr>
						';
					}
				}
		}
				?>
			</table>
			</div>
                
	  </form>
      <?php if(@$_GET[aksi]=="del"){
	mysql_query("delete from table_film where kode_film='$_GET[id]'");
	echo "<script>locaation ='.?page=alat';</script>";

}?>
           
			<br />
		
</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>