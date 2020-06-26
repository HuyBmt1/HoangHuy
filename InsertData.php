<!DOCTYPE html>
<html>
    <head>
<title>Insert data to PostgreSQL with php - creating a simple web application</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
li {
list-style: none;
}
</style>
</head>
<body>
<h1>INSERT DATA TO DATABASE</h1>
<h2>Enter data into student table</h2>
<ul>
    <form name="InsertData" action="InsertData.php" method="POST" >
<li>Customers ID</li><li><input type="text" name="customerid" /></li>
<li>Customers Name</li><li><input type="text" name="customername" /></li>
<li>Customer Address</li><li><input type="text" name="diachi" /></li>
<li>Customers Phone</li><li><input type="text" name="dienthoai" /></li>
<li><input type="submit" /></li>
</form>
</ul>

<?php

if (empty(getenv("DATABASE_URL"))){
    echo '<p>The DB does not exist</p>';
    $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=mydb', 'postgres', '123456');
}  else {
     
   $db = parse_url(getenv("DATABASE_URL"));
   $pdo = new PDO("pgsql:" . sprintf(
        "host=ec2-34-200-72-77.compute-1.amazonaws.com;port=5432;user=wcqnaqvuudtbmx;password=044dfa0f5b8c47cb6e4d3321184d8881696b4dbad58a7dff9e4fc1a8a1d5bf6a;dbname=d871jro07l5coa",
        $db["host"],
        $db["port"],
        $db["user"],
        $db["pass"],
        ltrim($db["path"], "/")
   ));
}  

if($pdo === false){
     echo "ERROR: Could not connect Database";
}

//Khởi tạo Prepared Statement
//$stmt = $pdo->prepare('INSERT INTO student (stuid, fname, email, classname) values (:id, :name, :email, :class)');

//$stmt->bindParam(':id','SV03');
//$stmt->bindParam(':name','Ho Hong Linh');
//$stmt->bindParam(':email', 'Linhhh@fpt.edu.vn');
//$stmt->bindParam(':class', 'GCD018');
//$stmt->execute();
//$sql = "INSERT INTO student(stuid, fname, email, classname) VALUES('SV02', 'Hong Thanh','thanhh@fpt.edu.vn','GCD018')";
$sql = "INSERT INTO customer(customerid, customername, diachi, dienthoai)"
        . " VALUES('$_POST[customerid]','$_POST[customername]','$_POST[diachi]','$_POST[dienthoai]')";
$stmt = $pdo->prepare($sql);
//$stmt->execute();
 if (is_null($_POST[customerid])) {
   echo "customerid must be not null";
 }
 else
 {
    if($stmt->execute() == TRUE){
        echo "Record inserted successfully.";
    } else {
        echo "Error inserting record: ";
    }
 }
?>
</body>
</html>
