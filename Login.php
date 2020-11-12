<?php
$akun = [["username"=>"Akbar", "password"=>"12345"]];
if (isset($_POST["submit"])) {
	$cekemail = FALSE;
	foreach ($akun as $account) {
	    if ($account["username"] == $_POST["username"]) {
	        if ($account['password'] == $_POST['password']) {
	            echo 'Login Sukses!!!!<br><br>';
	        } else {
	            echo 'Username / Password Salah<br><br>';
	        }
	        $cekemail = TRUE;
	        break;
	    }
	}
	
}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
	<label>Halaman Login</label>
	<form method="POST" action="">
		<p>Username : <input type="text" name="username"></p>
		<p>Password : <input type="password" name="password"></p>
		<p><input type="submit" value="Login" name="submit"></p>
	</form>
</body>
</html>