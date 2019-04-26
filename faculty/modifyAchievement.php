<?php
session_start();
if(!isset($_SESSION['id']))
  {
    header("Location:facultyLogin.html");
    die();
  }
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
    <title> New achievement</title>
  </head>

  <body class="bg-2" >
    <div class="d-flex justify-content-end">
      <button type="button" class="btn btn-danger" id="logout">Log Out</button>
      </div>
    <div class = "container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <br><br><br><br><br><br>
          <div class="card">
            <div class="card-body">
              <button type="submit" class="btn btn-info col-md-12" name="addProject" id="addProject" value="">MODIFY PROJECT DETAILS</button>
              <br><br>
              <button type="submit" class = "btn btn-info col-md-12" name="addWorkshop" id="addWorkshop">MODIFY WORKSHOP DETAILS</button>
              <br><br>
              <button type="submit" class="btn btn-info col-md-12" name="addTraining" id="addTraining" value="">MODIFY TRAINING DETAILS</button>
              <br><br>
              <button type="submit" class = "btn btn-info col-md-12" name="addBook" id="addBook">MODIFY PATENT DETAILS</button>

            </div>
          </div>
        </div>
      </div>
    </div>

<script type="text/javascript">
    document.getElementById("addProject").onclick = function () {
        location.href = "modifyProject.php";
    };
    document.getElementById("addWorkshop").onclick = function () {
        location.href = "modifyWorkshop.php";
    };
    document.getElementById("addTraining").onclick = function () {
        location.href = "modifyTraining.php";
    };
    document.getElementById("addBook").onclick = function () {
        location.href = "modifyPatent.php";
    };
    document.getElementById("logout").onclick = function () {
            location.href = "../../logout.php";
        };
</script>

</body>
</html>
