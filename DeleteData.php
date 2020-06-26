<!DOCTYPE html>
<html>
<body>

<h1>DELETE DATA IN DATABASE</h1>

<?php
ini_set('display_errors', 1);
echo "Delete in database!";
?>

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

$sql = "DELETE FROM customer WHERE cútomerid = 'cus01'";
$stmt = $pdo->prepare($sql);
if($stmt->execute() == TRUE){
    echo "Record deleted successfully.";
} else {
    echo "Error deleting record: ";
}

?>
</body>
</html>
