<?php

  ini_set('display_errors',"1");
  include_once '../../config/Database.php';
  $conn = new Database();
  $connection = $conn->connect();
  $patentTitle = $_POST['patentTitle'];
  $patentAuthor = $_POST['patentAuthor'];
  $patentStatus = $_POST['patentStatus'];
  $patentFiledDate = $_POST['patentFiledDate'];

  session_start();
  $patentId = $_SESSION['patentId'];

  $query = "UPDATE patent SET title = '$patentTitle',author='$patentAuthor',status='$patentStatus',filedDate='$patentFiledDate' WHERE id = '$patentId'";
  $stmt = $connection->prepare($query);
  if($stmt->execute()){
  echo"Entry Added Successfully";
  header("Refresh: 1.5; url= facultyOptions.php");
  die();
}
  else{
     echo"Updation Failed";
  header("Refresh: 1.5; url= facultyOptions.php");
  die();
}
 ?>
