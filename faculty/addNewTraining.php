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
     <title>New training</title>
   </head>
   <body class="bg-2">
     <div class="d-flex justify-content-end">
       <button type="button" class="btn btn-danger" id="logout">Log Out</button>
       </div>
     <form class="" action="addNewTraining1.php" method="post">
       <div class="container">
         <br>
         <div class="row">
           <div class="col-md-3"></div>
           <div class="col-md-6">
             <div class="card">
               <h4 class="card-title d-flex justify-content-center">Enter Training Details</h4>
               <div class="card-body">
                 <div class="form-group">
                   <label for="trainingId">Training Id</label>
                   <input type="text" class="form-control col-md-12" name="trainingId" id="trainingId" placeholder="Enter Training ID" maxlength="5" value="" required/>
                 </div>
                 <div class="form-group">
                   <label for="trainingWork">Training Work</label>
                   <input type="text" class="form-control col-md-12" name="trainingWork" id="trainingWork" placeholder="Enter Training Work" maxlength="10" required/>
                 </div>
                 <div class="form-group">
                   <label for="trainingFundingAgency">Funding Agency</label>
                   <input type="text" class="form-control" name="trainingFundingAgency"  id="trainingFundingAgency" placeholder="Enter Funding Agency"maxlength="10" value="" required/>
                 </div>
                 <div class="form-group">
                   <label for="trainingAmount">Amount</label>
                   <input type="number" class="form-control" name="trainingAmount" id="trainingAmount" placeholder="Enter Amount" value="" required/>
                 </div>
                 <div class="form-group">
                   <label for="trainingTopic">Topic</label>
                   <input type="text" class="form-control" name="trainingTopic" id="trainingTopic" value="" placeholder="Enter Topic"maxlength="10" required/>
                 </div>
                 <button type="submit" class="btn btn-info col-md-12" name="trainingAdd" id="trainingAdd">ADD DETAILS</button>
               </div>
             </div>
           </div>
           <div class="col-md-3"></div>
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
