<html>
	<head>
		<title>Bootcamp 10</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap.css">
		<script src="jquery.js"></script>
		<script src="bootstrap.js"></script>
	</head>
	<body style="background-color:white">
		<div class="container-fluid">
			<div class="row" style="background-color:Black;color:white">
				<h2 class="text-center"><b>Programmers</b></h2>
			</div>
			<div class="row">
				<div class="col-md-6">
					<h2>Add Skills Programmers</h2>
					<hr>
					<form method="POST" action="">
						<div class="form-group">
							<label>Name Skills</label>
							<input  type="text" name="name_s" class="form-control form-group" placeholder="Name Skills" required>
						</div>
						<div class="form-group">
							<label>id Programmers</label>
							<?php
								include"koneksi.php";
								$id=$_GET['id'];
								$query=mysql_query("select * from users where user_id='$id'");
								while($data=mysql_fetch_array($query)){
							?>
							
							<input type="text" name="name_p" placeholder="id Programmers" value="<?php echo $data['user_id']?>" class="form-control" required readonly>
							<?php
								}
							?>
						</div>
						<div class="form-group">
							<button type="submit" name="simpan" class="btn btn-success">Save</button>
							<a href="index.php"  class="btn btn-danger">Batal</a>
						</div>
					</form>
				</div>
				
				<?php
					include"koneksi.php";
					if(isset($_POST['simpan'])){
						$name_s=$_POST['name_s'];
						$name_p=$_POST['name_p'];
						$query=mysql_query("insert into skills values('','$name_s','$name_p')");
						if($query){
				?>
					<meta http-equiv="refresh" content="1 url=index.php">
				<?php
						}else{
				?>
					<script>alert('Gagal menyimpan')</script>
					<meta http-equiv="refresh" content="50 url=index.php">
				<?php
						}
					}
				?>
				
			</div>
		</div>
	</body>