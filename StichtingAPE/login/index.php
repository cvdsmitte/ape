<?php
/*
 session_start();
  $conn = mysqli_connect("localhost", "ape", "9ynw4sZ1", "")or die("connection error..!");
            mysqli_select_db($conn, "ape_APE")or die("check database...!");

            if(isset($_POST['login']))
            {
                $username = $_POST['username'];
                $salt = "dietrying";
                $password = $_POST['password'].$salt;
                $password = sha1('password');


                $login = "select * from login where username='$username' AND password='$password'";
                $run = mysqli_query($conn, $login);
                $row = mysqli_num_rows($run);
                if($row>0)
                {
                    $_SESSION['username'] = $username;
                    $_SESSION['start'] = time();
                    $_SESSION['expire'] = $_SESSION['start'] + (1*60);
                    echo "<script>window.open('../index.html','_self')</script>";
                }
                else
                {
                    echo "not logged in";
                }
            }
*/
?>
<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>User Login</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="../css/login.css">
</head>
<body>
  
  <div id="particles-js">
    <div id="login">
      <fieldset>
      <form class="mid" method="post" autocomplete="off">
        <div>
          <label for="username"></label>
          <br>
          <input type="text" name="username" placeholder="Username">
        </div>

        <div>
          <label for="password"></label>
          <br>
          <input type="text" name="password" placeholder="Password">
        </div><br>
        <button class="but" type="submit" name="login">login</button> <br><br>
      </form>
    </fieldset>
    </div>
  </div>
<a href="insert.php" class="l1" target="_self">Create new account</a>

  <a href="../site/index.html" class="l2">Ga naar<br>de site</a>


  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

  <script>
    particlesJS.load('particles-js', 'particles.json', function(){
      console.log('particles.json loaded...');
    });
  </script>

</body>
</html>
