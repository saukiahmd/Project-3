<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body>

	<!-- navbar -->
	<nav class="navbar navbar-default">
		<div class="container">
			<ul class="nav navbar-nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="keranjang.php">Keranjang</a></li>
				<li><a href="admin/login.php">Admin</a></li>
				<?php if (isset($_SESSION["pelanggan"])):?>
					<li><a href="logout.php">Logout</a></li>

				<?php else: ?>
					<li><a href="login.php">Login</a></li>

				<?php endif ?>
					<li><a href="checkout.php">Checkout</a></li>
			</ul>
		</div>
	</nav>

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="pane-title">Registrasi</h3>
					</div>
					<div class="panel-body">
					<form method="post" action="">
                        <div class="form-group">
							<label>Nama</label>
							<input type="text" class="form-control" name="nama">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" name="email">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" name="password">
						</div>
                        <div class="form-group">
							<label>No Hp</label>
							<input type="number" class="form-control" name="nomor">
						</div>
						<button class="btn btn-primary" name="regist">Simpan</button>
						<a href="login.php" class="btn btn-primary" name="login">Login</a>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php
if(isset($_POST['regist'])){

    
	$nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
	$no_tlp = $_POST["nomor"];


    $sql = "INSERT INTO pelanggan (nama_pelanggan, email_pelanggan, password_pelanggan, telepon_pelanggan) 
            VALUES ('$nama', '$email', '$password', '$no_tlp')";
	$query = mysqli_query($koneksi, $sql);


    if($query) {
		echo "<script>alert('Berhasil Di Tambahkan!')</script>";
		// header("Location: login.php");
	}else{
		echo "<script>alert('Gagal Menambahkan Akun!')</script>";
	}
}

?>

</body>
</html>