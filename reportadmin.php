<?php 
include('includes/security.php'); 
include('includes/header.php'); 
include('includes/navbaradmin.php');
?>


<!-- table modal -->
<div class="container-fluid">


<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Incident Reports</h6>
            </div>
            <div class="card-body">


            <?php
              $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            
              if(strpos($fullurl, "error=sqlerror") == true)
              {
                echo '<div class="alert alert-danger alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>FAIL!</strong> Not Added
                </div>';
              }
              else if(strpos($fullurl, "reportsuccess") == true)
              {
                echo '<div class="alert alert-success alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>SUCCESS!</strong> Report Added
                </div>';
              }
              else if(strpos($fullurl, "reportedit=success") == true)
              {
                echo '<div class="alert alert-success alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>SUCCESS!</strong> Report Edited
                </div>';
              }
              else if(strpos($fullurl, "success=report.deleted") == true)
              {
                echo '<div class="alert alert-success alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>SUCCESS!</strong> Report Deleted
                </div>';
              }
            ?>

            <a class="btn btn-primary" role="button"  href="addreportadmin.php">Generate Report</a>
            <br><br>

              <div class="table-responsive">
              <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Report No.</th>
                        <th scope="col">Incident Name</th>
                        <th scope="col">Date of Incident</th>
                        <th scope="col">Severity Level</th>
                        <th scope="col">Status</th>
                        <th scope="col">Report Date</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                <?php
                  require 'dbc.php';

                  $query = "SELECT * FROM reports";
                  $stmt = mysqli_stmt_init($connection);
                  mysqli_stmt_prepare($stmt, $query);
                  mysqli_stmt_execute($stmt);
                  $result = mysqli_stmt_get_result($stmt);

                  while($row = mysqli_fetch_assoc($result))
                  {
                    ?>
                    <tr>
                      
                      <td style="color:black;" width="0"><?php echo $row['reno']; ?></td>
                      <td style="color:black;" width="0"><?php echo $row['iname']; ?></td>
                      <td style="color:black;" width="0"><?php echo $row['idate']; ?></td>
                      <td style="color:black;" width="0"><?php echo $row['iseverity']; ?></td>
                      <td style="color:black;" width="0">
                      <?php
                      if($row['istatus']===0)
                      {echo '<div style="background-color:#66FF66;">Closed</div>';}
                      else
                      {echo '<div style="background-color:#FF6666;">Open</div>';} 
                      ?>
                      </td>
                      <td style="color:black;" width="0"><?php echo $row['ireportdate']; ?></td>

                      <td width="1" align="right">

                      <form action="print.php" method="POST">
                      <input type="hidden" name="report_id" value="<?php echo $row['reid']; ?>">
                      <center><button type="submit" data-toggle="tooltip" title="Print Report / See Details" name="printreport" class="btn simple-tooltip">
                      <i class="fas fa-print" style="font-size:20px;color:maroon;"></i></button></center>
                      </form>

                      </td>

                      <td width="1" align="right">

                          <form action="code.php" method="POST">
                          <input type="hidden" name="report_id" value="<?php echo $row['reid']; ?>">
                          <input type="hidden" name="status_id" value="<?php echo $row['istatus']; ?>">
                          <center><button type="submit" title="Change Status" name="chngreportstatus" class="btn simple-tooltip">
                          <i class="fas fa-sync" style="font-size:20px;color:midnightblue"></i></button></center>
                          </form>

                      </td>

                      <td width="1" align="right">

                        <form action="editreportadmin.php" method="POST">
                        <input type="hidden" name="edit_id" value="<?php echo $row['reid']; ?>">
                        <center><button type="submit" data-toggle="tooltip" title="Edit Report" name="editreportbtn" class="btn simple-tooltip">
                        <i class="fas fa-edit" style="font-size:20px;color:blue;"></i></button></center>
                        </form>

                      </td>

                      <td width="1" align="right">

                      <form action="code.php" method="POST">
                      <input type="hidden" name="reportdelete_id" value="<?php echo $row['reid']; ?>">
                      <input type="hidden" name="reportno_id" value="<?php echo $row['reno']; ?>">
                      <center><button type="submit" data-toggle="tooltip" title="Delete Report" name="deletereport" class="btn simple-tooltip">
                      <i class="fas fa-trash-alt" style="font-size:20px;color:black;"></i></button></center>
                      </form>

                      </td>

                    </tr>

                    <?php
                  }
                  ?>

                </tbody>
              </table>
              </div>
            </div>
          </div>
        

</div>
<!-- /.  table modal -->



<?php 
include('includes/scripts.php'); 
include('includes/footer.php');
?>