<?php
include('includes/security.php'); 
include('includes/header.php'); 
include('includes/navbaradmin.php');
?>



<!-- Modal -->
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-gray-900" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">
      <div class="modal-body">

        <div class="form-group">
            <label class="text-gray-900">Username</label>
            <input type="text" autocomplete="off" name="username" class="form-control text-gray-900" placeholder="Enter Username" required pattern="^[a-zA-Z0-9_. ]*$" title="Use Alphanumeric Characters Only" maxlength="60">
        </div>
        <div class="form-group">
            <label class="text-gray-900">Password</label>
            <input type="password" autocomplete="off" name="password" class="form-control text-gray-900" placeholder="Enter Password" required maxlength="60">
        </div>
        <div class="form-group">
            <label class="text-gray-900">Confirm Password</label>
            <input type="password" autocomplete="off" name="confirmpassword" class="form-control text-gray-900" placeholder="Rewrite Password" required maxlength="60">
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="adminbtn" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- table modal -->
<div class="container-fluid">


<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Admin Profiles</h6>
            </div>
            <div class="card-body">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
            Add Admin Profile
            </button><br><br>

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
                <strong>FAIL!</strong> Admin Not Added
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
              else if(strpos($fullurl, "success=admin.added") == true)
              {
                echo '<div class="alert alert-success alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>SUCCESS!</strong> Admin Added
                </div>';
              }
              else if(strpos($fullurl, "success=admin.updated") == true)
              {
                echo '<div class="alert alert-success alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>SUCCESS!</strong> Admin Updated
                </div>';
              }
              else if(strpos($fullurl, "success=admin.deleted") == true)
              {
                echo '<div class="alert alert-success alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>SUCCESS!</strong> Admin Deleted
                </div>';
              }
            ?>

              <div class="table-responsive">
              <table class="table table-hover" id="dataTable">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                
                <?php
                  require 'dbc.php';

                  $query = "SELECT * FROM admin";
                  $stmt = mysqli_stmt_init($connection);
                  mysqli_stmt_prepare($stmt, $query);
                  mysqli_stmt_execute($stmt);
                  $result = mysqli_stmt_get_result($stmt);

                  while($row = mysqli_fetch_assoc($result))
                  {
                    ?>
                    <tr>
                      <th scope="row" width="120"><?php echo $row['ano']; ?></td>
                      <td style="color:black;" width="250"><?php echo $row['ausername']; ?></td>

                      <td></td>

                      <td width="20" align="right">

                        <form action="editadmin.php" method="POST">
                        <input type="hidden" name="edit_id" value="<?php echo $row['ano']; ?>">
                        <center><button type="submit" data-toggle="tooltip" title="Edit Admin" name="edit_btn" class="btn simple-tooltip">
                        <i class="fas fa-edit" style="font-size:20px;color:blue;"></i></button></center>
                        </form>

                      </td>
                      <td width="20" align="right">

                        <form action="code.php" method="POST">
                        <input type="hidden" name="delete_id" value="<?php echo $row['ano']; ?>">
                        <center><button type="submit" data-toggle="tooltip" title="Delete Admin" name="deletebtn" class="btn simple-tooltip">
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