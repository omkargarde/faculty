<?php
ini_set('display_errors',"1");
include_once '../../config/Database.php';

      session_start();
      $facultyId = $_SESSION['id'];
      $trainingId = $_POST['trainingId'];
      $trainingWork = $_POST['trainingWork'];
      $trainingFundingAgency = $_POST['trainingFundingAgency'];
      $trainingAmount = $_POST['trainingAmount'];
      $trainingTopic = $_POST['trainingTopic'];
      $conn = new Database();
      $connection = $conn->connect();

      echo "Reached Here";
   $statement = "INSERT INTO training (id,work,fundingAgency,amount,topic) VALUES ('$trainingId','$trainingWork','$trainingFundingAgency',$trainingAmount,'$trainingTopic')";
    $stmt = $connection->prepare($statement);
    if($stmt->execute())
    echo"Entry Added Successfully";
    else
      {
        echo"Something Went Wrong";
      }

    $statement1 = "INSERT INTO trainingFaculty (facultyId,trainingId) VALUES ('$facultyId','$trainingId')";
    $stmt1 = $connection->prepare($statement1);
    if($stmt1->execute()){
      echo"Entry Added Successfully";
      header("Refresh: 1.5; url= facultyOptions.php");
      die();
    }
    else {
      echo"Something Went Wrong";
      header("Refresh: 1.5; url= facultyOptions.php");
      die();
    }
?>
