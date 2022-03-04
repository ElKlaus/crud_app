<?php
  include 'connect.php';

  if(isset($_POST['updateId'])) {
    $user_id = $_POST['updateId'];

    $sql = "Select * from `users` where id=$user_id";

    $result = mysqli_query($con, $sql);

    $response = array();

    while($row=mysqli_fetch_assoc($result)) {
      $response = $row;
    }
    echo json_encode($response);
  }else{
    $response['status'] = 200;
    $response['message'] = "Invalid or data not found";
  };


  // Update query
  if(isset($_POST['hiddenData'])) {
    $uniqueId = $_POST['hiddenData'];
    $name = $_POST['updateName'];
    $email = $_POST['updateEmail'];
    $mobile = $_POST['updateMobile'];
    $place = $_POST['updatePlace'];

    $sql = "update `users` set name='$name', email='$email', mobile='$mobile', place='$place' where id=$uniqueId";

    $result = mysqli_query($con, $sql);
  }
?>