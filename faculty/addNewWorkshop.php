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
    <title>Workshop</title>
  </head>
  <body class="bg-1">
    <div class="d-flex justify-content-end">
      <button type="button" class="btn btn-danger" id="logout">Log Out</button>
      </div>

        <form class="" action="addNewWorkshop1.php" method="post">
          <div class="container">
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <div class="card">
                <h4 class="card-title d-flex justify-content-center">Enter Workshop Details</h4>
                <div class="card-body">
                  <div class="form-group">
                    <label for="workshopId">Workshop Id</label>
                    <input type="text" id="workshopId" class="form-control" name="workshopId" value="" placeholder="Enter Workshop ID" required></input>
                  </div>
                  <div class="form-group">
                    <label for="workshopDetails">Workshop Details</label>
                    <input type="text" class="form-control" name="workshopDetails" id="workshopDetails" placeholder="Enter Workshop Deatils" required></input>
                  </div>
                  <div class="form-group">
                    <label for="workshopDate">Workshop Date</label>
                    <input type="date"class="form-control" name="workshopDate" id="workshopDate" value="" placeholder="Enter Workshop ID" required></input>
                  </div>
                  <div class="form-group">
                    <label for="workshopNoOfStudents">No.Of Students</label>
                    <input type="number"class="form-control" name="workshopNoOfStudents" id="workshopNoOfStudents" value="" placeholder="Enter No.Of Students" required></input>
                  </div>
                  <div class="form-group">
                    <label for="workshopNoOfFaculty">No.Of Faculty</label>
                    <input type="number"class="form-control" name="workshopNoOfFaculty"id="workshopNoOfFaculty" value="" placeholder="Enter No.Of Faculty" required></input>
                  </div>
                  <div class="form-group">
                    <label for="workshopNoOfIndustries">No.Of Industries</label>
                    <input type="number"class="form-control" name="workshopNoOfIndustry" id="workshopNoOfIndustries" value="" placeholder="Enter No.Of Industries"required></input>
                  </div>
                  <button type="submit" class="btn btn-info col-md-12" name="projectAdd">ADD DETAILS</button>
                </div>
              </div>
            </div>
            <div class="col-md-3"></div>
          </div>
        </div>
      </form>
    </body>
</html>
<script type="text/javascript">
    document.getElementById("logout").onclick = function () {
        location.href = "../../logout.php";
    };
</script>
