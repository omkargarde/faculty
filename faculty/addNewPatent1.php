<?php

include_once '../../config/Database.php';

ini_set('display_errors',"1");
      session_start();
      $facultyId = $_SESSION['id'];
      $patentId = $_POST['patentId'];
      $patentTitle = $_POST['patentTitle'];
      $patentStatus = $_POST['patentStatus'];
      $patentFiledDate = $_POST['patentFiledDate'];
      $patentAuthor = $_POST['patentAuthor'];



      //echo $patentId;
      //echo$patentFiledDate;
      //echo $patentYear;
      $conn = new Database();
      $connection = $conn->connect();
      $sql = "SELECT * from patent where id ='$patentId'";
      $stmt = $connection->prepare($sql);
      $stmt->execute();
      $num = $stmt->rowCount();
      if($num > 0)
      {
        header("Location:modifyPatent.php");
        die();
      }
      $conn = new Database();
      $connection = $conn->connect();
    $statement = "INSERT INTO patent (id,title,status,author,filedDate) VALUES ('$patentId','$patentTitle','$patentStatus','$patentAuthor','$patentFiledDate')";
    $stmt = $connection->prepare($statement);
    if($stmt->execute())
      echo"Entry Added Successfully";
    else {
      echo 'Something Went Wrong';
    }
    $statement1 = "INSERT INTO patentFaculty (facultyId,patentId) VALUES ('$facultyId','$patentId')";
    $stmt1 = $connection->prepare($statement1);
    if($stmt1->execute()){
      echo"Entry Added Successfully";
      header("Refresh: 1.5; url= facultyOptions.php");
      die();
    }
    else {
      echo 'Something Went Wrong';
      header("Refresh: 1.5; url= facultyOptions.php");
      die();
    }
?>
