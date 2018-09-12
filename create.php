<?php
require 'db.php';
session_start();
$msg = '';
$id = $_SESSION['id'];
if(isset($_POST['from']) && isset($_POST['to']) && isset($_POST['date'])){
    $from = $_POST['from'];
    $to = $_POST['to'];
    $dt = $_POST['date'];
    try {
        $create = "Insert into flight_details (member_no, tfrom, tto, date)";
        $create .= " VALUES(:mem_no,:from,:to,:dt)";
        
        $stmt = $conn->prepare ( $create );
        
        $stmt->execute ( array (
                ":mem_no" => $id,
                ":from" => $from,
                ":to" => $to,
                ":dt" => $dt,

        ) );
        if ($stmt) {
            header("location:index.php");
        }
    } catch ( PDOException $e ) {
        echo "Error" . $e->getMessage ();
    }
}
?>