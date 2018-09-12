<?php 
header("Cache-Control: no-cache, must-revalidate");
include_once 'partials/header.php';?>
<div class="container">
<?php
if(isset($_SESSION['type'])){
    if($_SESSION['type'] == "admin"){
         include_once 'view/admin-home-screen.php';
        }
    else{
        include_once 'view/member-home-screen.php';
        }
}else{
     header("Location: login.php");
    }
  ?>
  <br/>
<table class="table table-hover">
<thead>
  <tr>
    <th>Flight no</th>
    <th>From</th>
    <th>To</th>
    <th>Date</th>
    <th>Actions</th>
  </tr>
</thead>
<tbody>
 <?php 
  require 'db.php';
  if($_SESSION['type'] == "admin"){
    $q=$conn->prepare("SELECT * FROM flight_details");
    }
    else{
      $q=$conn->prepare("SELECT * FROM flight_details WHERE member_no=:member_no");
      $q->bindParam(':member_no', $_SESSION['id'] );
    }
  $q->execute();
  while ($row = $q->fetch()): ?>
  <tr>
    <td><?php echo htmlspecialchars($row['flight_no']) ?></td>
    <td><?php echo htmlspecialchars($row['tfrom']); ?></td>
    <td><?php echo htmlspecialchars($row['tto']); ?></td>
    <td><?php echo htmlspecialchars($row['date']); ?></td>
    <td><a class="btn btn-dark mr-4" href="edit.php?flight_no=<?=$row['flight_no']?>">Update</a><a onclick="return confirm('Are you sure you want to delete this flight entry?')" href="delete.php?flight_no=<?=$row['flight_no']?>" class="btn btn-danger">Delete</a></td>
  </tr>
  <?php endwhile; ?>
</tbody>
</table>
  </div>
  <?php include_once 'partials/footer.php';?>
