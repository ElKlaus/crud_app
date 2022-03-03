<?php

  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); /* */

  $con = new mysqli('localhost', 'root', 'root', 'crud_app_bstrp');



  if(!$con) {
    die(mysqli_error($con));
  };




?>