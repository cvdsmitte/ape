<?php
  $conn = mysqli_connect("localhost", "ape", "9ynw4sZ1", "")or die("connection error..!");
          mysqli_select_db($conn, "ape_APE")or die("check database...!");

          if(isset($_POST['insert']))
          {
              $username = $_POST['username'];
              $salt = "dietrying";
              $password = $_POST['password'].$salt;
              $password = sha1('password');
              $email = $_POST['email'];

              $insert = "insert into login(username,password,email)values('$username','$password','$email')";
              $run = mysqli_query($conn,$insert);
              if($run>0)
              {
                    echo "<script>window.open('index.php','_self')</script>";
              }
              else
              {
                    echo "not inserted";
              }
          }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Account</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css">
  </head>
  <body>
    <div id="particles-js">
      <div id="login">
      <fieldset>
        <form method="post" autocomplete="off">
          <div>
          <label for="username"></label>
          <br>
          <input type="text" name="username" placeholder="Username"/>
          </div>
          <div>
          <label for="password"></label>
          <br>
          <input type="text" name="password" placeholder="Password"/>
          </div>
          <div>
          <label for="email"></label>
          <br>
          <input type="text" name="email" placeholder="Email"/>
        </div><br>
          <div>
          <button class="but" type="submit" name="insert">submit</button> <br><br>
          </div>
        </form>
      </fieldset>
    </div>
  </div>
  <a href="index.php" class="l1" target="_self">User Login</a>
    <a href="../site/index.html" class="l2">Ga naar<br>de site</a>
      <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

      <script>
        particlesJS.load('particles-js', 'particles.json', function(){
          console.log('particles.json loaded...');
        });
      </script>
      <script type="text/javascript">

      document.onkeydown = animateKeys;

      var colors = ['#FF0000', '#00FFFF', '#0000FF', '#0000A0', '#ADD8E6', '#800080', '#FFFF00','#00FF00', '#FF00FF', '#C0C0C0', '#808080', '#000000', '#FFA500', '#A52A2A', '#800000', '#008000', '#808000'];

      function animateKeys (event) {
        var keyCode = event.keyCode;
        var c = String.fromCharCode(keyCode);

        var key = document.createElement("div");
        document.body.appendChild(key);

        key.style.position = "absolute";

        var randX = Math.round(Math.random() * window.innerWidth);
        var randY = Math.round(Math.random() * window.innerHeight);

        key.style.left = randX + 'px';
        key.style.top = randY + 'px';
        key.innerText = c;

        var color = colors[Math.floor(Math.random() * colors.length)];
        key.style.color = color;

        key.style.transition = "all 0.5s linear 0s";
        key.style.left = key.offsetLeft - 30 + 'px';
        key.style.top = key.offsetTop - 30 + 'px';
        key.style.fontSize = "100px";
        key.style.opacity = 0;

        var sound = new Audio();
        sound.src = "resources/keypress.mp3";
        sound.play();
      }

      </script>
  </body>
</html>
