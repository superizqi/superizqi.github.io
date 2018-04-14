<?php
	require_once('connectDB.php');
	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

	$username=$_POST['login_email'];
	$password=$_POST['login_password'];

	$query="SELECT username, password FROM user WHERE username = '".$username."' AND password = '".$password."'";

	$result = mysqli_query($dbc,$query);
	$row = mysqli_fetch_array($result);
	$numRow = mysqli_num_rows($result);

	if ($numRow>0)
	{
      echo "<script> alert ('Login Berhasil !');location.href='dashboard.php';</script>";

  }
  else
  {
      echo "<script> alert ('Login Gagal !');location.href='reg.php';</script>";
  }

?>
