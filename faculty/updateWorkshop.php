<?php

  ini_set('display_errors',"1");
  include_once '../../config/Database.php';
  $conn = new Database();
  $connection = $conn->connect();
  $workshopDetails = $_POST['workshopDetails'];
  $workshopNoOfStudents = $_POST['workshopNoOfStudents'];
  $workshopNoOfFaculty = $_POST['workshopNoOfFaculties'];
  $workshopNoOfIndustries = $_POST['workshopNoOfIndustries'];

  session_start();
  $workshopId = $_SESSION['workshopId'];

  $query = "UPDATE workshop SET details = '$workshopDetails',noOfStudents='$workshopNoOfStudents',noOfFaculties='$workshopNoOfFaculty',noOfIndustries='$workshopNoOfIndustries' WHERE id = '$workshopId'";
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
