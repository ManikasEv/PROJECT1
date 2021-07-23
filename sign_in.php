<?php
session_start();

$host = "localhost";
$port = 3306;

$dbname = "db_2";
$dbuser = "root";
$dbpass = "strickland!A1";

$dsn = "mysql:host={$host};dbname={$dbname};port={$port};charset=utf8mb4";
$options = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];
$pdo = new PDO($dsn, $dbuser, $dbpass, $options);



$fn = $_POST["fn"];
$p = $_POST["pass"];

// Παιρνω το password hash από τη βαση χρησιμοποιώντας πχ. το firstname 
// που μου εδωσε ο χρήστης:
$stmt = $pdo->prepare('SELECT * FROM users WHERE fn=:fn');
$stmt->execute(["fn"=>$_POST["fn"]]);



$row = $stmt->fetch(); // Παίρνω την 1η εγγραφή που βρίσκω
if (!$row) {
    // Δεν βρεθηκε χρήστης με αυτό το firstname:
    echo "Λαθος firstname ή δεν έχεις κάνει εγγραφή!!";
}
else {
    // Το αποθηκευμενο hash για αυτόν τον χρήστη:
    $hash = $row['pass']; 

    // Επιβεβαιώνουμε ότι το αποθηκευμενο hash "ταιριάζει" με
    // το password που μας εδωσε ο χρήστης:
    $ok = password_verify($p, $hash);
    
    if ($ok) {
        

        $_SESSION["fn"] = $row;
        echo"singed in";
        
    }
    else {
        echo "Λάθος Password!!";
    }

}