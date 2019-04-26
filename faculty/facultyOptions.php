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
     <title> Faculty option</title>
   </head>
   <body class="bg-2">
      <div class="d-flex justify-content-end">
        <button type="button" class="btn btn-danger" id="logout">Log Out</button>
        </div>
     <div class = "container">
       <div class="row">
         <div class="col-md-3"></div>
         <div class="col-md-6">
           <br><br><br><br><br><br>
           <div class="card">
             <h4 class="card-title d-flex justify-content-center">Faculty Options</h4>
             <div class="card-body">
               <button type="submit" class="btn btn-info col-md-12" name="addNewAchievement" id="addNewAchievement" onclick="location.href = 'addNewAchievement.php';">ADD NEW ACHIEVEMENT</button>
               <br><br>
               <button type="submit" class = "btn btn-info col-md-12" name="seeAchievements" id="seeAchievements" onclick="location.href = 'modifyAchievement.php';">Modify Previous Achievements</button>
             </div>
           </div>
         </div>
         <div class="col-md-3"></div>
       </div>
     </div>
     <!--==================================================================-->
     <script src="js/main.js"></script>
     <script type="text/javascript">
         document.getElementById("logout").onclick = function () {
             location.href = "../../logout.php";
         };
     </script>
   </body>
 </html>
