<?php
$dsn='mysql:host=localhost;dbname=zaton';
$user='root';
$pass="";
$connection=new PDO($dsn,$user,$pass);

if (isset($_POST["username"]) && isset($_POST["password"])){
    $name=$_POST["username"];
    $password=$_POST["password"];
    $result=$connection->query("SELECT id FROM `accounts` WHERE name='". $name ."' and password='". $password . "'");
    $data=$result->fetch();
    $id=@$data[0];
    if (isset($id)){
        setcookie("id",$id,time()+(60*60*24*10));
        header("Location: ../zaton");
    }
}
if (isset($_COOKIE["id"])){
    header("Location: ../zaton");
}



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>CodePen - Animated Login Form - CSS</title>
    <link rel="stylesheet" href="./login.css" />
  </head>
  <body>
    <form method="Post">
    <div class="ring">
      <i style="--clr: #00ff0a"></i>
      <i style="--clr: #ff0057"></i>
      <i style="--clr: #fffd44"></i>
      <div class="login">
        <p>
            <?php if (isset($id)){
                 echo "hello " .$name . " your id is ". $id;
            }elseif(isset($name)){
                echo "<span style='color:red'>username or password is wrong</span>";
            }
                 ?>
        </p>
        <h2>Login</h2>
            <div class="inputBx">
            <input type="text" placeholder="Username" name="username"/>
            </div>
            <div class="inputBx">
            <input type="password" placeholder="Password" name="password"/>
            </div>
            <div class="inputBx">
            <input type="submit" value="Sign in" />
            </div>
            <div class="links">
            <a href="#">Forget Password</a>
            <a href="signup.php">Signup</a>
            </div>
      </div>
    </div>
</form>
  </body>
</html>
