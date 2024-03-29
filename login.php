<?php
session_start();
include_once 'inc/Database.php';
$db = new Database();
if (isset($_POST['submit'])) {
	$uname = $_POST['uname'];
	$pass  = $_POST['pass'];
	$row   = $db->select("select * from admin where uname = ? and pass= md5(?)", [$uname, $pass]);
	if ($row > 0) {
		$_SESSION['uid'] = $row['id'];
		$db->redirect('views/admin/');
	} else {
		echo "Login Gagal";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Login PPDB Online</title>
  <meta charset="utf-8">
  <link rel="icon" href="asset/foto/logo.png" type="image/icon">
  <meta name="viewport" content="width=device-width, initial-scale=1, shring-to-fit=no">
  <link rel="stylesheet" href="asset/css/bootstrap.min.css">
  <link rel="stylesheet" href="asset/css/style.css">
  <link href="asset/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body style="background-color: #2980b9">
  <div class="container">
    <div class="row">
     <div class="col-lg-4"></div>
     <div class="col-lg-4">

       <div class="jumbotron" style="margin-top: 150px">
        <h3 class="text-center">Login PPDB Online <small>Vers. 0.00001</small></h3><br>
        <form action="#" method="POST">

          <div class="form-group">
            <input type="text" name="uname" class="form-control" required autofocus placeholder="username" >
          </div>
          <div class="form-group">
            <input type="password" name="pass" class="form-control" required placeholder="password">
          </div>
          <button type="submit" name="submit" class="form-control btn btn-danger">Login</button>
          <br>
          <br>
          <a href="http://www.onodasakamichi.blogspot.com"><p class="text-center"><small>zeref.weismann</small></p></a>
        </form>
      </div>
    </div>
  </div>
  <div class="col-lg-4"></div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="asset/js/bootstrap.min.js"></script>
</body>
</html>


