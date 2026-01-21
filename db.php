
<?php
// $host = 'localhost';
// $db   = 'school-db';   // database name with hyphen
// $user = 'root';
// $pass = '';

//For server
$host = 'localhost';
$db   = 'np03cs4a240381';   
$user = 'np03cs4a240381';
$pass = 'Na72ncXPy5';

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$db;charset=utf8mb4",
        $user,
        $pass,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    );
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
