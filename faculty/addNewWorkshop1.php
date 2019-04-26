<?php
ini_set('display_errors', 1);
include_once '../../config/Database.php';

      session_start();
      $facultyId = $_SESSION['id'];
      $workshopId = $_POST['workshopId'];
      $workshopDetails = $_POST['workshopDetails'];
      $workshopDate = $_POST['workshopDate'];
      $workshopNoOfStudents = $_POST['workshopNoOfStudents'];
      $workshopNoOfFaculty = $_POST['workshopNoOfFaculty'];
      //$workshopNoOfIndustries $_POST['workshopNoOfIndustry'];
      echo "Reached Here";
      $conn = new Database();
      $connection = $conn->connect();


/* Provoke an error -- bogus SQL syntax */



     $statement = "INSERT INTO workshop (id,details,date,noOfStudents,noOfFaculties,noOfIndustries) VALUES ('$workshopId','$workshopDetails','$workshopDate','$workshopNoOfStudents','$workshopNoOfFaculty','1000')";
      //$statement = "INSERT INTO DoesNotExist (x) VALUES (?)";
      $stmt = $connection->prepare($statement);
      if($stmt->execute())
      {
        echo "Successful";
      }
      else
      {
        echo $stmt->errorInfo();
      }

      /*$sqlTraining = "INSERT INTO workshopFaculty(facultyId,workshopId) VALUES ('bks1234','$workshopId')";
      $statementTraining = $connection->prepare($sqlTraining);
      if($statementTraining->execute())
        echo "Entry added to facultyTraining";
          else {
             echo "Entry to facultyTraining failed";
           }*/
      $statement1 = "INSERT INTO workshopFaculty (facultyId,workshopId) VALUES ('$facultyId','$workshopId')";
      $stmt1 = $connection->prepare($statement1);
      if($stmt1->execute()){

        echo"Entry Added Successfully";
        header("Refresh: 1.5; url= facultyOptions.php");
        die();
      }

      else {
        echo"Entry Failed";
        header("Refresh: 1.5; url= facultyOptions.php");
        die();
           }
?>
