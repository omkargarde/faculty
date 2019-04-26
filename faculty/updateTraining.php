<?php

  ini_set('display_errors',"1");
  include_once '../../config/Database.php';
  $conn = new Database();
  $connection = $conn->connect();
  $trainingTopic = $_POST['trainingTopic'];
  $trainingWork = $_POST['trainingWork'];
  $trainingFundingAgency = $_POST['trainigFundingAgency'];
  $trainingAmount = $_POST['trainingAmount'];

  session_start();
  $trainingId = $_SESSION['trainingId'];

  $query = "UPDATE training SET work = '$trainingWork',topic='$trainingTopic',fundingAgency='$trainingFundingAgency',amount='$trainingAmount' WHERE id = '$trainingId'";
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
