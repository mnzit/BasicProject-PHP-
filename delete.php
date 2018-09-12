<?php
require 'db.php';

$flight_no = $_GET['flight_no'];
try {
        $create = "delete from flight_details where flight_no=:flight_no";
        
        $stmt = $conn->prepare ( $create );
        
        $stmt->execute ( array (":flight_no" => $flight_no));

       if ($stmt) {
            header("location:index.php");
        }
    } catch ( PDOException $e ) {
        echo "Error" . $e->getMessage ();
    }
?>