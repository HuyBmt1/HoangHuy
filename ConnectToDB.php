<!DOCTYPE html>
<html>
<body>

<h1>DATABASE CONNECTION</h1>

<?php
ini_set('display_errors', 1);
echo "Welcome to ATN SHOP";
?>

<?php


if (empty(getenv("DATABASE_URL"))){
    echo '<p>The DB does not exist</p>';
    $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=mydb', 'postgres', '123456');
}  else {
     echo '<p>The Database exist</p>';
     echo getenv("dbname");
   $db = parse_url(getenv("DATABASE_URL"));
   $pdo = new PDO("pgsql:" . sprintf(
        "host=ec2-34-200-72-77.compute-1.amazonaws.com;port=5432;user=wcqnaqvuudtbmx;password=fbfef36049fbd28f1200e3a775a389e014838e86522765e67782f9cf7a3f516b;dbname=d3mmhribgmc6bf",
        $db["host"],
        $db["port"],
        $db["user"],
        $db["pass"],
        ltrim($db["path"], "/")
   ));
}  

$sql = "SELECT * FROM customer ORDER BY customerid";
$stmt = $pdo->prepare($sql);
//Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
$resultSet = $stmt->fetchAll();
echo '<p>Customer Information</p>';

?>
<div id="container">
<table class="table table-bordered table-condensed">
    <thead>
      <tr>
        <th>Customers</th>
        <th>Customers name</th>
        <th>Customers address</th>
        <th>Customers phone</th>
      </tr>
    </thead>
    <tbody>
      <?php
      // tạo vòng lặp 
         //while($r = mysql_fetch_array($result)){
             foreach ($resultSet as $row) {
      ?>
   
      <tr>
        <td scope="row"><?php echo $row['customerid'] ?></td>
        <td><?php echo $row['customername'] ?></td>
        <td><?php echo $row['diachi'] ?></td>
        <td><?php echo $row['dienthoai'] ?></td>
        
      </tr>
     
      <?php
        }
      ?>
    </tbody>
  </table>
</div>
</body>
</html>
