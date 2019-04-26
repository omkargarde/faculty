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
    <title>patent</title>
  </head>
  <body class="bg-1">
    <div class="d-flex justify-content-end">
      <button type="button" class="btn btn-danger" id="logout">Log Out</button>
      </div>

        <form class="" action="addNewPatent1.php" method="post">
          <br>
              <div class="d-flex justify-content-center">
                <div class="card col-md-5">
                  <h4 class="card-title d-flex justify-content-center">Enter Patent Details</h4>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="patentId">Patent Id</label>
                      <input type="text" id="patentId "maxlength="10" class="form-control" name="patentId" value="" placeholder="Enter Patent Id" required></input>
                    </div>
                    <div class="form-group">
                      <label for="patentTitle">Patent Title</label>
                      <input type="text" class="form-control"maxlength="15" name="patentTitle" id="patentTitle" placeholder="Enter Patent Title"required></input>
                    </div>
                    <div class="form-group">
                      <label for="patentAuthor">Patent Author</label>
                      <input type="text"class="form-control"maxlength="15" name="patentAuthor" value="" placeholder="Enter Patent Author"required></input>
                    </div>
                    <div class="form-group">
                      <label for="patentStatus">Patent Status</label>
                      <input type="text"class="form-control"maxlength="10" name="patentStatus" value="" placeholder="Enter Patent Status" required></input>
                    </div>
                    <div class="form-group">
                      <label for="patentFiledDate">Filed Date</label>
                      <input type="date"class="form-control" name="patentFiledDate" value="" required></input>
                    </div>
                    <button type="submit" class="btn btn-info col-md-12" name="patentAdd">ADD DETAILS</button>
                  </div>
                </div>
              </div>


      </form>
      <script type="text/javascript">
          document.getElementById("logout").onclick = function () {
              location.href = "../../logout.php";
          };
      </script>
    </body>
</html>
