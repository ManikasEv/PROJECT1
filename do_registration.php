<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $fn = $_POST["fn"];
    $ln = $_POST["ln"];
    $tel = $_POST["tele"];
    $afm = $_POST["afm"];
    $amka = $_POST["amka"];
    $addr = $_POST["add"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $p = $_POST["pass"];


$dbname = "db_2";
$dbuser = "root";
$passwd = "strickland!A1";
$port = 3306;
//ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'strickland!A1';
$dbhost = "localhost";
$options = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];

$dsn = "mysql:host={$dbhost};dbname={$dbname};port={$port};charset=utf8mb4";
$pdo = new PDO($dsn, $dbuser, $passwd, $options);
 
$hash = password_hash($_POST["pass"], PASSWORD_DEFAULT);

$stmt = $pdo->prepare('INSERT INTO users(first_name,last_name,telephone,afm,amka,address,age,email,pwd) VALUES(:fn , :ln, :tel, :afm, :amka, :addr,:age,:email,:p)');
$stmt->execute(["fn"=> $_POST["fn"],"ln"=> $_POST["ln"],"tel"=> $_POST["tele"],"afm"=> $_POST["afm"],"amka"=>$_POST["amka"],"addr"=>$_POST["add"],"age"=>$_POST["age"],"email"=>$_POST["email"], "p"=> $hash]);
echo("Registration Complete");        
        
?>
</body>
</html>