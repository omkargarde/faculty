<?php
ini_set('display_errors',"1");
include_once '../../config/Database.php';

      session_start();
      $facultyId = $_SESSION['id'];
      $projectId = $_POST['projectId'];
      $projectName = $_POST['projectName'];
      $projectAgency = $_POST['projectAgency'];
      $projectAmount = $_POST['projectAmount'];
      $projectTopic = $_POST['projectTopic'];
      $projectField = $_POST['projectField'];
      $projectYear = $_POST['projectYear'];


      //echo $projectId;
      //echo$projectAmount;
      //echo $projectYear;
      $conn = new Database();
      $connection = $conn->connect();
      //$sql = "INSERT INTO project(id,name,agency,amount,topic,year,field) VALUES(".$projectId.'myProject','myAgency',1000,'Embedded',1999,'System')";      /*$stmt = $connection->prepare($sql);
      //$sql = "INSERT INTO project(id,name,agency,amount,topic,year,field) VALUES '(' .$projectId.',' . $projectName .','.$projectAgency.','.$projectAmount.','.$projectTopic.','$projectYear.','.$projectField.')'";
      /*$stmt->bindParam(':projectId',$projectId);
      $stmt->bndParam(':projectName',$projectName);
      $stmt->bindParam(':projectAgency',$projectAgency);
      $stmt->bindParam(':projectAmount',$projectAmount);
      $stmt->bindParam(':projectTopic',$projectTopic);
      $stmt->bindParam(':projectField',$projectField)
      $stmt = $connection->prepare("INSERT INTO project (id, name, agency, amount,topic,year,field) VALUES (:projectId, :projectName, :projectAgency,:projectAmount,:projectTopic,:projectYear,:projectField)");
    $stmt->bindParam(':projectId', $projectId);
    $stmt->bindParam(':projectName', $projectName);
    $stmt->bindParam(':projectAgency', $projectAgency);
    $stmt->bindParam(':projectAmount',$projectAmount);
    $stmt->bindParam('projectTopic',$projectTopic);
    $stmt->bindParam('projectYear',$projectYear);
    $stmt->projectField('projectField',$projectField);*/
    $st = "SELECT * from project where id = '$projectId'";
    $stt = $connection->prepare($st);
    $stt->execute();
    if($stt->rowCount())
    {
      echo "Patent ID already exists. You will be added to the contributor list";
      $statement1 = "INSERT INTO projectFaculty (facultyId,projectId) VALUES ('$facultyId','$projectId')";
      $stmt1 = $connection->prepare($statement1);
      if($stmt1->execute()){
          echo "Done";
          header("Refresh: 1.5; url= facultyOptions.php");
          die();
        }
    }
    $statement = "INSERT INTO project (id,name,agency,amount,topic,field,year) VALUES ('$projectId','$projectName','$projectAgency',$projectAmount,'$projectTopic','$projectField',$projectYear)";
    $stmt = $connection->prepare($statement);
    $stmt->execute();
    $statement1 = "INSERT INTO projectFaculty (facultyId,projectId) VALUES ('$facultyId','$projectId')";
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
