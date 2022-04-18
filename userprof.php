<?php 
include('includes/security.php'); 
include('includes/header.php'); 
include('includes/navbaradmin.php');
?>


<!-- table modal -->
<div class="container-fluid">

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">User Profiles</h6>
            </div>
            <div class="card-body">

            <?php
              $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            
              if(strpos($fullurl, "error=emptyfields") == true)
              {
                echo '<div class="alert alert-danger alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>FAIL!</strong> Empty Fields
                </div>';
              }
              else if(strpos($fullurl, "error=invalidpass") == true)
              {
                echo '<div class="alert alert-danger alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>FAIL!</strong> Invalid Password
                </div>';
              }
              else if(strpos($fullurl, "error=sqlerror") == true)
              {
                echo '<div class="alert alert-danger alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>FAIL!</strong> User Not Added
                </div>';
              }
              else if(strpos($fullurl, "error=invaliduser") == true)
              {
                echo '<div class="alert alert-danger alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>FAIL!</strong> Invalid Username
                </div>';
              }
              else if(strpos($fullurl, "error=usertaken") == true)
              {
                echo '<div class="alert alert-danger alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>FAIL!</strong> Username Already Taken
                </div>';
              }
              else if(strpos($fullurl, "success=user.updated") == true)
              {
                echo '<div class="alert alert-success alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>SUCCESS!</strong> User Updated
                </div>';
              }
              else if(strpos($fullurl, "success=user.deleted") == true)
              {
                echo '<div class="alert alert-success alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>SUCCESS!</strong> User Deleted
                </div>';
              }
            ?>

              <div class="table-responsive">
              <table class="table table-hover" id="dataTable">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Request</th>
                        <th></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>

                <?php
                  require 'dbc.php';

                  $query = "SELECT * FROM user";
                  $stmt = mysqli_stmt_init($connection);
                  mysqli_stmt_prepare($stmt, $query);
                  mysqli_stmt_execute($stmt);
                  $result = mysqli_stmt_get_result($stmt);

                  while($row = mysqli_fetch_assoc($result))
                  {
                    ?>
                    <tr>
                      <th scope="row" width="120"><?php echo $row['uno']; ?></th>
                      <td style="color:black;" width="250"><?php echo $row['uusername']; ?></td>
                      <td width="250">
                      <?php
                      if($row['accept']===0)
                      {echo '<span style="color:black;background-color:#FF6666;">Rejected</span>';}
                      else
                      {echo '<span style="color:black;background-color:#66FF66;">Accepted</span>';} 
                      ?>
                      </td>

                      <td></td>

                      <td width="20" align="right">

                      <form action="code.php" method="POST">
                      <input type="hidden" name="accept_id" value="<?php echo $row['uno']; ?>">
                      <center><button type="submit" data-toggle="tooltip" title="Accept Request" name="acceptbtn" class="btn simple-tooltip">
                      <i class="fas fa-check" style="font-size:20px;color:green;"></i></button></center>
                      </form>

                      </td>
                      <td width="20" align="right">

                      <form action="code.php" method="POST">
                      <input type="hidden" name="reject_id" value="<?php echo $row['uno']; ?>">
                      <center><button type="submit" data-toggle="tooltip" title="Reject Request" name="rejectbtn" class="btn simple-tooltip">
                      <i class="fas fa-times" style="font-size:20px;color:red;"></i></button></center>
                      </form>

                      </td>
                      <td width="20" align="right">

                        <form action="edituser.php" method="POST">
                        <input type="hidden" name="edit_id" value="<?php echo $row['uno']; ?>">
                        <center><button type="submit" data-toggle="tooltip" title="Edit User" name="editbtnuser" class="btn simple-tooltip">
                        <i class="fas fa-edit" style="font-size:20px;color:blue;"></i></button></center>
                        </form>

                      </td>
                      <td width="20" align="right">

                        <form action="code.php" method="POST">
                        <input type="hidden" name="delete_id" value="<?php echo $row['uno']; ?>">
                        <center><button type="submit" title="Delete User" name="deletebtnuser" class="btn simple-tooltip">
                        <i class="fas fa-trash-alt" style="font-size:20px;color:black"></i></button></center>
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