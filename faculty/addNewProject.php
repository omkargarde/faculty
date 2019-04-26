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
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <!--Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="css/main.css">
    <title>New project</title>
  </head>
  <body class="bg-1">
    <form class="" action="addNewProject1.php" method="post">
      <div class="d-flex justify-content-end">
        <button type="button" class="btn btn-danger" id="logout">Log Out</button>
        </div>
      <div class="container">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <div class="card">
              <h4 class="card-title d-flex justify-content-center">Enter Project Details</h4>
              <div class="card-body">
                <div class="form-group">
                  <label for="projectId">Project Id</label>
                  <input type="text" class="form-control col-md-12" name="projectId" id="projectId" placeholder="Enter Project ID" value="" required/>
                </div>
                <div class="form-group ">
                  <label for="projectName">Project Name</label>
                  <input type="text" class="form-control col-md-12" name="projectName" id="projectName" placeholder="Enter Project name" value="" required/>
                </div>
                <div class="form-group">
                  <label for="projectAgency">Project Agency</label>
                  <input type="text"class="form-control col-md-12" name="projectAgency" id="projectAgency" placeholder="Enter Project Agency" value="" required/>
                </div>
                <div class="form-group">
                  <label for="projectAmount">Project Amount</label>
                  <input type="number" class="form-control col-md-12" name="projectAmount" id="projectAmount" placeholder="Enter Project Amount" value="" required/>
                </div>
                <div class="form-group">
                  <label for="projectTopic">Project Topic</label>
                  <input type="text" class="form-control col-md-12" name="projectTopic" id="projectTopic" placeholder="Enter Project Amount"value="" required/>
                </div>
                <div class="form-group">
                  <label for="projectField">Project Field</label>
                  <input type="text" class="form-control col-md-12" name="projectField" id="projectField" placeholder=" Enter Project Field" value="" required/>
                </div>
                <div class="form-group">
                  <label for="projectYear">Project Year</label>
                  <input type="number" class="form-control col-md-12" name="projectYear" id="projectYear" placeholder="Enter Project Year" value="" required></input>
                </div>
                <button type="submit" class="btn btn-info col-md-12" name="projectAdd" id="projectAdd">ADD DETAILS</button>
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
