<?php
ini_set('display_errors',"1");
include_once '../../config/Database.php';
//include_once '../../config/Database.php';

//include_once '../../models/Book.php';
//include_once '../../models/Patent.php';
$conn = new Database();
$connection = $conn->connect();
session_start();
$facultyId = $_SESSION['id'];
//$facultyId = 'bks1234';
$query = "SELECT p.id as project_id, p.name as project_name, p.agency as project_agency, p.amount as project_amount, p.year as project_year,p.topic as project_topic,p.field as project_field, s.id as faculty_id,s.name as faculty_name FROM ((faculty s INNER JOIN projectFaculty pf ON pf.facultyId = s.id)
        INNER JOIN project p ON p.id = pf.projectId)
        WHERE s.id = '$facultyId'";

        $stmt = $connection->prepare($query);
        // Execute query
        $stmt->execute();
        $result = $stmt;
        $num = $result->rowCount();
      //  echo $num;
        if($num == 0)
          {

            echo "You have not added any Projects";
          //  header("Location:modifyAchievements.php");
          //  die();
        }
          else {
            /*while($row = $result->fetch(PDO::FETCH_ASSOC)) {
              extract($row);*/

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
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

              </head>
                <body class="bg-1">
                  <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-danger" id="logout">Log Out</button>
                    </div>
                  <div class="container">
                    <div class="row">
                      <div class="col-md-3"></div>
                      <div class="">
                        <br><br>
            <input class="form-control" id="myInput" type="text" placeholder="Search..">

                <div class = "table">
                <table class = "table-responsive" id='t1'>
                <thead class = "thead-dark" id="myTable">
                  <tr>
                  <th scope = "col">Project ID</th>
                  <th scope = "col">Project Name</th>
                  <th scope = "col">Project Agency</th>
                  <th scope = "col">Project Amount</th>
                  <th scope = "col">Project Year</th>
                  <th scope = "col">Project Topic</th>
                  <th scopr = "col">Project Field</th>
                  <th scope = "col">Action</th>
                </tr>
                  <?php foreach($result as $row){?>

                       <tr>
                              <td class="text-white bg-dark"><?php echo $row['project_id'];?></td>
                              <td class="text-white bg-dark"><?php echo $row['project_name'];?></td>
                              <td class="text-white bg-dark"><?php echo  $row['project_agency'];?></td>
                              <td class="text-white bg-dark"><?php  echo $row['project_amount'];?></td>
                              <td class="text-white bg-dark"><?php echo $row['project_year'];?></td>
                              <td class="text-white bg-dark"><?php echo $row['project_topic'];?></td>
                              <td class="text-white bg-dark"><?php echo $row['project_field'];?></td>
                              <td class="text-white bg-dark"><form class="" action="changeProject.php" method="post">
                              <button type="submit" class="btn btn-info"name="changeProject" value="<?php echo $row['project_id']?>">Change</button>

                              </form>
                          </tr>
                  <?php }?>

                </thead>
                <tbody>
              <?php }?>
              <div class="d-flex justify-content-center">
              <button class="btn btn-info"id="tb1"onclick="exportTableToExcel('t1')">Export Table Data To Excel File</button>
              <script>
  function exportTableToExcel(tableID, filename = ''){
  var downloadLink;
  var dataType = 'application/vnd.ms-excel';
  var tableSelect = document.getElementById(tableID);
  var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');

  // Specify file name
  filename = filename?filename+'.xls':'excel_data.xls';

  // Create download link element
  downloadLink = document.createElement("a");

  document.body.appendChild(downloadLink);

  if(navigator.msSaveOrOpenBlob){
      var blob = new Blob(['\ufeff', tableHTML], {
          type: dataType
      });
      navigator.msSaveOrOpenBlob( blob, filename);
  }else{
      // Create a link to the file
      downloadLink.href = 'data:' + dataType + ', ' + tableHTML;

      // Setting the file name
      downloadLink.download = filename;

      //triggering the function
      downloadLink.click();
  }
}
</script>
<script type="text/javascript">
    document.getElementById("logout").onclick = function () {
        location.href = "../../logout.php";
    };
</script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>
