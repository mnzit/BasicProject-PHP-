<?php
require 'db.php';
if(isset($_POST['from']) && isset($_POST['to']) && isset($_POST['date'])&& isset($_POST['flight_no'])){
    $from = $_POST['from'];
    $to = $_POST['to'];
    $dt = $_POST['date'];
    $f_no = $_POST['flight_no'];
    echo $f_no;
    try {
        $create = "UPDATE flight_details SET tfrom=:from, tto=:to, date=:dt WHERE flight_no = :flight_no";      
        $stmt = $conn->prepare ( $create );  
        $stmt->execute (array(":from" => $from, ":to" => $to, ":dt" => $dt, ":flight_no" => $f_no));
        if ($stmt) {
            header("Location: index.php");
        }
    } catch ( PDOException $e ) {
        echo "Error" . $e->getMessage ();
    }
}
?>