<?php

  require_once('connectDB.php');
  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

  $username = $_POST['username'];
  $email = $_POST['email'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $zip = $_POST['zip'];
  $country = $_POST['country'];
  $state = $_POST['state'];
  $phone = $_POST['phone'];
  $nohp = $_POST['mobile'];
  $vatid = $_POST['vatid'];
  $initial = $_POST['srvid'];
  $password = "";
  for ($i = 0; $i < 4; $i++) {
    $password .= chr(rand(48, 57));
  }




  $query = "INSERT INTO registrasi (username,email,firstname,lastname,address,city,zip,country,state,phone,nohp,vat_id,initial)" .
  "VALUES ('$username','$email','$firstname','$lastname','$address','$city','$zip','$country','$state','$phone','$nohp','$vatid','$initial')";

  $query2 = "INSERT INTO user (username,password)".
  "VALUES ('$username','$password')";

  $result = mysqli_query($dbc,$query);
  $result2 = mysqli_query($dbc,$query2);
  if ($result && $result2)
  {
      echo "<script> alert ('Data ".$username." berhasil diinput! Dengan password ".$password."');location.href='reg.php';</script>";

  }
  else
  {
      echo "<script> alert ('Data ".$username." tidak berhasil diinput!');location.href='reg.php';</script>";
  }

?>
