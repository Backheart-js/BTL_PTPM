<?php
    session_start();

// Bước 01; Kết nối tới CSDL:
    define('HOST','localhost');
    define('USER','root');
    const PASS  = '';
    const DB    = 'qlnk'; 
    $conn = mysqli_connect(HOST,USER, PASS,DB);
    if(!$conn){
        die('Không thể kết nối');
    }
    $dbh = new PDO("mysql:host=localhost;dbname=qlnk", "root", "");
?>