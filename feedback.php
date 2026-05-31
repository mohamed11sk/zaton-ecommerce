<?php
$dsn='mysql:host=localhost;dbname=zaton';
$user='root';
$pass="";
$connection=new PDO($dsn,$user,$pass);

$result=$connection->query("SELECT * FROM feedback;");
$feed_backs=$result->fetchAll();
if (isset($_COOKIE["id"])){
    if ($_COOKIE["id"] != 0){
    echo "<h1>this page available only for admin</h1>";
    exit();
}
}else{
    echo "<h1>this page available only for admin</h1>";
    exit();
}

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Styled Table</title>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
        border-radius: 8px;
        
    }
    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 12px;
    }
    th {
        background-color: #f2f2f2;
    }
    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    tr:hover {
        background-color: #f1f1f1;
    }
    th:nth-child(1),
    td:nth-child(1),
    th:nth-child(2),
    td:nth-child(2),
    th:nth-child(3),
    td:nth-child(3) {
        width: 15%;
    }
    th:nth-child(4),
    td:nth-child(4) {
        width: 55%;
    }
</style>
</head>
<body>

<table>
  <thead>
    <tr>
      <th>Full name</th>
      <th>Email</th>
      <th>Subject</th>
      <th>The Massage</th>
    </tr>
  </thead>
  <tbody>
<?php
foreach ($feed_backs as $f){
    echo "<tr>";
    echo "<td>".$f[0]."</td>";
    echo "<td>".$f[1]."</td>";
    echo "<td>".$f[2]."</td>";
    echo "<td>".$f[3]."</td>";
    echo "</tr>";
}

?>

  </tbody>
</table>

</body>
</html>