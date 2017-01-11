<!DOCTYPE html>
<html>
<head>
	<title>Tugas Pemrograman Berbasis Web 1 CRUD</title>
</head>
<body>
<form method="POST" action="">
	
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<h2>Daftar Film</h2>

	<div class="row">
    
    <?php
	include("koneksi.php");
	$query=mysql_query("select * from table_barang");
	while($rs=mysql_fetch_array($query)){
	
	?>
    <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="<?php echo 'images/film/' . 
					$rs['Gambar_Barang'];?>" alt="">
                </a>
              <h3>
                    <a href="#"><?php echo $rs['Judul']; ?></a>
                </h3>
                <p><?php echo $rs['Sinopsis']; ?></p>
    
    </div>
                
                <?php
	}
	?>
  </div>
            
	
</form>
</body>
</html>


