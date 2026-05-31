<?php
$dsn='mysql:host=localhost;dbname=zaton';
$user='root';
$pass="";
$connection=new PDO($dsn,$user,$pass);

if (isset($_POST["username"]) && isset($_POST["password"])){
    $name=$_POST["username"];
    $password=$_POST["password"];
    $msg="";
    $check=$connection->prepare("SELECT id FROM accounts WHERE name = ? LIMIT 1");
    $check->execute([$name]);
    if($check->rowCount() == 1) {
        // found
        $msg="used user name";
    }else{
        $result=$connection->query("SELECT MAX(id) FROM accounts;");
        $max_id=$result->fetch();
        $new_id=$max_id[0]+1;
        $connection->exec("INSERT INTO `accounts` (`name`, `password`, `id`) VALUES ('". $name ."', '". $password ."', '". $new_id ."')");
        if (isset($new_id)){
            setcookie("id",$new_id,time()+(60*60*24*10));
            header("Location: ../zaton");
        }
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
            <?php
            if (isset($msg)){
                echo "<span style='color:red'>".$msg."</span>";;
            }
            ?>
        </p>
        <h2>signup</h2>
        <div class="inputBx">
          <input type="text" placeholder="Enter Username" name="username"/>
        </div>
        <div class="inputBx">
          <input type="password" placeholder="Enter Password" name="password"/>
        </div>
        <div class="inputBx">
          <input type="submit" value="Sign up" />
        </div>
        <div class="links">
          <a href="login.php">You have already account?</a>
        </div>
      </div>
    </div>
</form>
  </body>
</html>
