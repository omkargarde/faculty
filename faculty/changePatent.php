<?php
ini_set('display_errors',"1");
include_once '../../config/Database.php';
//include_once '../../config/Database.php';

/*if(!isset($_SESSION['id']))
  {
    header("Location:facultyLogin.html");
    die();
  }*/
//include_once '../../models/Book.php';
//include_once '../../models/Patent.php';
$conn = new Database();
$connection = $conn->connect();
$patentId = $_POST['changePatent'];
$query = "SELECT * FROM patent WHERE id = '$patentId'";
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
      <button type="button" class="btn btn-danger" id="logout">Log Out</button>
      </div>
      <form class="" action="updatePatent.php" method="post">
        <?php foreach ($result as $row)
          session_start();
          $_SESSION['patentId'] = $row['id'];
        {?>
          <div class="container">
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <br><br>
                <div class="card">
                <h4 class="card-title d-flex justify-content-center">Change Patent</h4>
                <div class="card-body">
                  <label>Patent Title</label>
                  <input type="text" class="form-control" name="patentTitle" id="patentTitle" value="<?php echo $row['title'];?>"></br>
                  <label>Patent Status</label>
                  <input type="text" class="form-control" name="patentStatus" id="patentStatus" value="<?php echo $row['status'];?>"><br>
                  <label>Patent Author</label>
                  <input type="text" class="form-control" name="patentAuthor" value="<?php echo $row['author']; ?>"><br>
                  <label>Patent Filed Date</label>
                  <input type="date"  class="form-control" name="patentFiledDate" value="<?php echo $row['filedDate'];}?>"><br>
                  <button type="submit" class="btn btn-info col-md-12" name="updatePatent">UPDATE</button>
    </form>
        <!--php foreach ($result as row){>
        <input type="text" name="patentTitle" value="php echo $row['title'];?>">
        <input type="text" name="patentStatus" value="php echo $row['status'];?>">
        <input type="text" name="patentAuthor" value="php echo $row['author']; ?>">
        <input type="date" name="patentFiledDate" value="php echo $row['filedDate'];?>">
        <button type="submit" name="updatePatent">UPDATE</button>
      </form>-->
      <script type="text/javascript">
          document.getElementById("logout").onclick = function () {
              location.href = "../../logout.php";
          };
      </script>
  </body>
  </html>
