<?php
require 'db.php';
$flight_no = $_GET['flight_no'];
try {
        $create = "select * from flight_details where flight_no=:flight_no";      
        $stmt = $conn->prepare ( $create );        
        $stmt->execute ( array (":flight_no" => $flight_no));
        $member = $stmt -> fetch(PDO::FETCH_OBJ);
    } catch ( PDOException $e ) {
        echo "Error" . $e->getMessage ();
    }
?>
<?php include_once 'partials/header.php';?>
<div class = "container">
  <form method = "post"  action = "update.php">
   	<div class="form-group">
        <label for="InputFrom">Flight No:</label>
        <input type="text" value ="<?=$member->flight_no;?>" name="flight_no" class="form-control" readonly>
    </div>
    <div class="form-group">
        <label for="InputFrom">From:</label>
        <input type="text" required value ="<?=$member->tfrom;?>" name="from" class="form-control" id="inputfrom" list="airports" placeholder="From">
    </div>
    <div class="form-group">
        <label for="InputTo">To</label>
        <input type="text" required  value ="<?=$member->tto;?>" name="to" class="form-control" id="inputto" placeholder="To" list="airports">
                        </div>
    <div class="form-group">
        <label for="datePicker">Date of journey</label>
        <input type="date" name="date" value ="<?=$member->date;?>" class="form-control" id="datePicker" placeholder="Date">
    </div>   
    <button type="submit" class="btn btn-primary"  id="ticketSubmit">Update</button>
  </form>
</div>

<datalist id="airports">
  <option value="Seoul International Airport                    ">
  <option value="Hartsfield-Jackson Atlanta International Airport">
  <option value="Beijing Capital International Airport">
  <option value="Tokyo International Airport">
  <option value="Los Angeles Airport">
  <option value="O'Hare International Airport">
  <option value="London International Airport">
  <option value="HongKong International Airport">
  <option value="Shanghai Pudong International Airport">
  <option value="Paris-Charles de Gaulle International Airport">
  <option value="Pune Airport">
  <option value="Amsterdam International Airport">
  <option value="Dallas/Fort Worth International Airport">
  <option value="Guangzhou Baiyun International Airport">
  <option value="Frankfurt International Airport">
  <option value="Istanbul Ataturk Airport">
  <option value="Indira Gandhi International Airport">
  <option value="Soekarno-Hatta International Airport">
  <option value="Seoul Incheon International Airport">
  <option value="Singapore Changi Airport">
  <option value="Denver International Airport">
  <option value="Suvarnabhumi Airport">
  <option value="John. F. Kennedy International Airport">
  <option value="Kuala Lampur International Airport">
  <option value="San  Francisco International Airport">
  <option value="Dehradun Airport">
  <option value="Mandrid Barajas Airport">
  <option value="Chengdu Shauangliu International Airport">
  <option value="McCarran International Airport">
  <option value="Chhatrapati Shivaji International Airport">
  <option value="Barcelona-EL Prat Airport">
  <option value="Toronto Pearson International Airport">
  <option value="Tribhuwan International Airport">
  <option value="Baglung Helipad">
  <option value="Bajhang Airfield">
  <option value="Bajura Airport">
  <option value="Chandragadhi Airfield">
  <option value="Siddharthanagar Airport">
  <option value="Bharatpur Airport">
  <option value="Bhojpur Airport">
  <option value="Tulsipur Airport">
  <option value="Darchula Airport">
  <option value="Dolpa Airport">
  <option value="Jiri Airport">
  <option value="Jomsom Airport">
  <option value="Jumla Airport">
  <option value="Langtang Airport">
  <option value="Tenzing-Hillary Airport">
  <option value="Pokhara Airport">
  <option value="Simara Airport">
  <option value="Simikot Airport">
  <option value="Taplejung Airport">
      </datalist>
<?php include_once 'partials/footer.php';?>