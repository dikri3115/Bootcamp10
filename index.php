<html>
	<head>
		<title>Bootcamp 10</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap.css">
		<script src="jquery.js"></script>
		<script src="bootstrap.js"></script>
	</head>
	<body style="background-color:#f8f8f8">
		<div class="container-fluid">
			<div class="row" style="background-color:Black;color:white">
				<h2 class="text-center"><b>Programmers</b></h2>
			</div>
			<div class="row">
				<div class="col-md-6">
					<br>
					<form method="POST" action="">
						<div class="form-group">
							<input type="text" name="programmer" placeholder="Nama Programmer" class="form-control" required>
						</div>
						<button class="btn btn-success" type="submit" name="tambah">Tambah</button>
					</form>
				</div>
				
				<?php
					include"koneksi.php";
					if(isset($_POST['tambah'])){
						$name=$_POST['programmer'];
						$query=mysql_query("insert into users values('','$name')");
						if($query){
							echo"<h3>Berhasil disimpan</h3>";
						}else{
							echo"<h3>Berhasil disimpan</h3>";
						}
					}
				?>
				
			</div>
			<div class="row">
				<div class="col-md-9">
					<h2>Daftar Programmers</h2>
					<table class="table table-bordered table-striped">
						<tr style="background-color:Black;color:white">
							<th class="text-center">Name</th>
							<th class="text-center">Skills</th>
							<th class="text-center">Menu</th>
						</tr>
							<?php
								include"koneksi.php";
								$query=mysql_query("select * from users");
								if(mysql_num_rows($query)==0){
							?>
							<tr>
								<td colspan="3" class="text-center"><b>Tidak Ada Data</b></td>
							</tr>
							<?php
								}else{
									while($data=mysql_fetch_assoc($query)){
										$query1=mysql_query("select * from skills where user_id='$data[user_id]'");
										if(mysql_num_rows($query1)==0){
							?>
							<td><?php echo$data['name']?></td>
							<td class="text-center">Tidak Ada Skills</td>
							<?php
								}else{
									
							?>
						<tr>
							<td><?php echo$data['name']?></td>
							<td><?php 
									while($data2=mysql_fetch_array($query1)){
								?>
								<?php echo$data2['name_s']?>,
								<?php }
								} ?>
							</td>
							<td><a href="tambah.php?id=<?php echo $data['user_id']?>" class="btn btn-info">Tambah Skills</a></td>
							
						</tr>
							<?php
									}
								}
							?>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>