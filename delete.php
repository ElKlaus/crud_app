<?php
  include 'connect.php';

  // echo $_POST['deleteSend'];

  if(isset($_POST['deleteSend'])) {
    $unique = $_POST['deleteSend'];

    $sql = "delete from `users` where id=$unique";
    $result = mysqli_query($con, $sql);
  };

?>