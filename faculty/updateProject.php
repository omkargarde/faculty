<?php

  ini_set('display_errors',"1");
  include_once '../../config/Database.php';
  $conn = new Database();
  $connection = $conn->connect();
  $projectName = $_POST['projectName'];
  $projectAgency = $_POST['projectAgency'];
  $projectAmount = $_POST['projectAmount'];
  $projectYear = $_POST['projectYear'];
  $projectTopic = $_POST['projectTopic'];
  $projectField = $_POST['projectField'];

  session_start();
  $projectId = $_SESSION['projectId'];

  $query = "UPDATE project SET name = '$projectName',agency='$projectAgency',amount='$projectAmount',year='$projectYear',topic='$projectTopic',field='$projectField' WHERE id = '$projectId'";
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
