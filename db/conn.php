<?php 
$host = '127.0.0.1';
$db = 'attendance_db';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db; charset=$charset";

try{
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    echo "<h1 class='text-center text-danger'>An Error Occurred</h1>";
// throw new PDOException($e->getMessage());
}

require_once 'crud.php';

$crud = new Crud($pdo);

?>