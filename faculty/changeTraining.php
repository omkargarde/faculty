<?php
ini_set('display_errors',"1");
include_once '../../config/Database.php';
//include_once '../../config/Database.php';

//include_once '../../models/Book.php';
//include_once '../../models/project.php';
$conn = new Database();
$connection = $conn->connect();
$trainingId = $_POST['changeTraining'];
$query = "SELECT * FROM training WHERE id = '$trainingId'";
$stmt = $connection->prepare($query);
// Execute query
$stmt->execute();
$result = $stmt;
$num = $result->rowCount();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!--Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

    <link rel="stylesheet" href="css/main.css">
    <title></title>
  </head>
  <body class="bg-2">
    <div class="d-flex justify-content-end">
      <button type="button" class="btn btn-danger">Log Out</button>
      </div>
      <form class="" action="updateTraining.php" method="post">
        <?php foreach ($result as $row)
          session_start();
          $_SESSION['trainingId'] = $row['id'];
        {?>
          <div class="container">
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <br><br>
                <div class="card">
                <h4 class="card-title d-flex justify-content-center">Change Patent</h4>
                <div class="card-body">

      <label>Training Work</label>
      <input type="text" class="form-control" name="trainingWork" value="<?php echo $row['work'];?>"><br>
      <label>Funding Agency</label>
      <input type="text" class="form-control" name="trainigFundingAgency" value="<?php echo $row['fundingAgency']; ?>"><br>
      <label>Amount</label>
      <input type="number" class="form-control" name="trainingAmount" value="<?php echo $row['amount'];?>"><br>
      <label>Topic</label>
      <input type="text" class="form-control" name="trainingTopic" value="<?php echo $row['topic'];}?>"><br>


      <button type="submit" class="btn btn-info col-md-12" name="updateTraining">UPDATE</button>
    </form>
        <!--php foreach ($result as row){>
        <input type="text" name="projectTitle" value="php echo $row['title'];?>">
        <input type="text" name="projectStatus" value="php echo $row['status'];?>">
        <input type="text" name="projectAuthor" value="php echo $row['author']; ?>">
        <input type="date" name="projectFiledDate" value="php echo $row['filedDate'];?>">
        <button type="submit" name="updateproject">UPDATE</button>
      </form>

  </body>
  </html>
