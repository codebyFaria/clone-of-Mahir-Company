
<?php

include "connect.php";

if(isset($_POST['btn'])) {
    $no = $_POST['num'];
    // $created_at = date('Y-m-d H:i:s'); // Get the current date and time in the correct format

    // // Generate a UUID for the ID field
    // $id = md5(uniqid());


    // Prepare the SQL statement with placeholders for the ID, mobile_number, and created_at fields
    $query = "insert into otp_data ( mobile_number) VALUES ( '$no')";

    // Prepare the statement
    $rs =mysqli_query($conn, $query);

    if($rs==1)
    {
      echo"Insert data Successfully";
    }else
    {
      echo "sorry ";
    }
  }
?>