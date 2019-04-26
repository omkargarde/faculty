<?php
ini_set('display_errors',"1");
include_once '../../config/Database.php';
//include_once '../../config/Database.php';
session_start();
if(!isset($_SESSION['id']))
  {
    header("Location:facultyLogin.html");
    die();
  }
//include_once '../../models/Book.php';
//include_once '../../models/project.php';
$conn = new Database();
$connection = $conn->connect();
$projectId = $_POST['changeProject'];
$query = "SELECT * FROM project WHERE id = '$projectId'";
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
  <body class="bg-1">
    <div class="d-flex justify-content-end">
      <button type="button" class="btn btn-danger" id="logout">Log Out</button>
      </div>
      <form class="" action="updateProject.php" method="post">
        <?php foreach ($result as $row)
          session_start();
          $_SESSION['projectId'] = $row['id'];
        {?>
          <div class="container">
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <br><br>
                <div class="card">
                <h4 class="card-title d-flex justify-content-center">Change Patent</h4>
                <div class="card-body">
      <label>Project Name</label>
      <input type="text" class="form-control" name="projectName" value="<?php echo $row['name'];?>"></br>
      <label>Project Agency</label>
      <input type="text" class="form-control" name="projectAgency" value="<?php echo $row['agency'];?>"><br>
      <label>Project Amount</label>
      <input type="number" class="form-control" name="projectAmount" value="<?php echo $row['amount']; ?>"><br>
      <label>Project Year</label>
      <input type="number" class="form-control" name="projectYear" value="<?php echo $row['year'];?>"><br>
      <label>Project Topic</label>
      <input type="text" class="form-control" name="projectTopic" value="<?php echo $row['topic'];?>"><br>
      <label>Project Field</label>
      <input type="text" class="form-control" name="projectField" value="<?php echo $row['field'];}?>"><br>

      <button type="submit" class="btn btn-info col-md-12" name="updateproject">UPDATE</button>
    </form>
        <!--php foreach ($result as row){>
        <input type="text" name="projectTitle" value="php echo $row['title'];?>">
        <input type="text" name="projectStatus" value="php echo $row['status'];?>">
        <input type="text" name="projectAuthor" value="php echo $row['author']; ?>">
        <input type="date" name="projectFiledDate" value="php echo $row['filedDate'];?>">
        <button type="submit" name="updateproject">UPDATE</button>
      </form>-->
      <script type="text/javascript">
          document.getElementById("logout").onclick = function () {
              location.href = "../../logout.php";
          };
      </script>

  </body>
  </html>
