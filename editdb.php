<?php
include('includes/security.php'); 
include('includes/header.php'); 
include('includes/navbaradmin.php');
?>


<div class="container-fluid">
<!-- /.container -->


<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Database</h6>
  </div>

  <div class="card-body">


            <?php
              $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            
              if(strpos($fullurl, "error=emptysystem") == true)
              {
                echo '<div class="alert alert-danger alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>FAIL!</strong> Empty System Field
                </div>';
              }
              else if(strpos($fullurl, "error=emptyhost") == true)
              {
                echo '<div class="alert alert-danger alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>FAIL!</strong> Empty IP/Hostname/Application Field
                </div>';
              }
              else if(strpos($fullurl, "error=emptyseverity") == true)
              {
                echo '<div class="alert alert-danger alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>FAIL!</strong> Empty Severity Field
                </div>';
              }
              else if(strpos($fullurl, "error=invalidsystem") == true)
              {
                echo '<div class="alert alert-danger alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>FAIL!</strong> Invalid System
                </div>';
              }
              else if(strpos($fullurl, "error=invalidseverity") == true)
              {
                echo '<div class="alert alert-danger alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>FAIL!</strong> Invalid Severity
                </div>';
              }
              else if(strpos($fullurl, "error=sqlerror") == true)
              {
                echo '<div class="alert alert-danger alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>FAIL!</strong> Not Added
                </div>';
              }
              else if(strpos($fullurl, "error=systemexists") == true)
              {
                echo '<div class="alert alert-danger alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>FAIL!</strong> System Already Exists
                </div>';
              }
              else if(strpos($fullurl, "error=hostexists") == true)
              {
                echo '<div class="alert alert-danger alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>FAIL!</strong> IP/Hostname/Application Already Exists
                </div>';
              }
              else if(strpos($fullurl, "error=severityexists") == true)
              {
                echo '<div class="alert alert-danger alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>FAIL!</strong> Severity Already Exists
                </div>';
              }
              else if(strpos($fullurl, "success=system.added") == true)
              {
                echo '<div class="alert alert-success alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>SUCCESS!</strong> System Added
                </div>';
              }
              else if(strpos($fullurl, "success=host.added") == true)
              {
                echo '<div class="alert alert-success alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>SUCCESS!</strong> IP/Hostname/Application Added
                </div>';
              }
              else if(strpos($fullurl, "success=severity.added") == true)
              {
                echo '<div class="alert alert-success alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>SUCCESS!</strong> Severity Added
                </div>';
              }
              else if(strpos($fullurl, "error=systemnotexists") == true)
              {
                echo '<div class="alert alert-danger alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>FAIL!</strong> No System Found to Delete
                </div>';
              }
              else if(strpos($fullurl, "error=hostnotexists") == true)
              {
                echo '<div class="alert alert-danger alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>FAIL!</strong> No IP/Hostname/Application Found to Delete
                </div>';
              }
              else if(strpos($fullurl, "error=severitynotexists") == true)
              {
                echo '<div class="alert alert-danger alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>FAIL!</strong> No Severity Found to Delete
                </div>';
              }
              else if(strpos($fullurl, "success=system.deleted") == true)
              {
                echo '<div class="alert alert-success alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>SUCCESS!</strong> System Deleted
                </div>';
              }
              else if(strpos($fullurl, "success=host.deleted") == true)
              {
                echo '<div class="alert alert-success alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>SUCCESS!</strong> IP/Hostname/Application Deleted
                </div>';
              }
              else if(strpos($fullurl, "success=severity.deleted") == true)
              {
                echo '<div class="alert alert-success alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>SUCCESS!</strong> Severity Deleted
                </div>';
              }
            ?>



      <form action="code.php" method="POST">
        <div class="form-group">
            <label class="text-gray-900" style="font-size: 18px;">System</label>
            <div class="input-group col-md-8">
            <input type="text" autocomplete="off" name="system" class="form-control text-gray-900" placeholder="Enter System" required pattern="^[a-zA-Z0-9_. ]*$" title="Use Alphanumeric Characters Only" maxlength="60">
            <button type="submit" name="addsystem" class="btn btn-primary rounded-0">ADD</button>
            <button type="submit" name="deletesystem" class="btn btn-danger rounded-0">DELETE</button>
        </div></div>
        </form>

        <br>

      <form action="code.php" method="POST">
        <div class="form-group">
            <label class="text-gray-900" style="font-size: 18px;">IP/Hostname/Application</label>
            <div class="input-group col-md-8">
            <input type="text" autocomplete="off" name="hostname" class="form-control text-gray-900" placeholder="Enter IP/Hostname/Application" required pattern="^[a-zA-Z0-9_. ]*$" title="Use Alphanumeric Characters Only" maxlength="200">
            <button type="submit" name="addhost" class="btn btn-primary rounded-0">ADD</button>
            <button type="submit" name="deletehost" class="btn btn-danger rounded-0">DELETE</button>
        </div></div>
      </form>

        <br>

      <form action="code.php" method="POST">
        <div class="form-group">
            <label class="text-gray-900" style="font-size: 18px;">Severity</label>
            <div class="input-group col-md-8">
            <input type="text" autocomplete="off" name="severity" class="form-control text-gray-900" placeholder="Enter Severity" required pattern="^[a-zA-Z0-9_. ]*$" title="Use Alphanumeric Characters Only" maxlength="60">
            <button type="submit" name="addseverity" class="btn btn-primary rounded-0">ADD</button>
            <button type="submit" name="deleteseverity" class="btn btn-danger rounded-0">DELETE</button>
        </div></div>
      </form>&emsp;


      <div class="row">
      <div class="table-responsive col-md-3">
              <table class="table table-hover table-bordered" style="width: 100%;">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">System</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                  require 'dbc.php';

                  $query = "SELECT * FROM system";
                  $stmt = mysqli_stmt_init($connection);
                  mysqli_stmt_prepare($stmt, $query);
                  mysqli_stmt_execute($stmt);
                  $result = mysqli_stmt_get_result($stmt);

                  while($row = mysqli_fetch_assoc($result))
                  {
                    ?>
                    <tr>
                      <td style="color:black;" width=10><?php echo $row['sydata']; ?></td>
                    </tr>
                    <?php
                  }
                  ?>

                </tbody>
              </table>
              </div>



              <div class="table-responsive col-md-3">
              <table class="table table-hover table-bordered" style="width: 100%;">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">IP/Hostname/Application</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                  require 'dbc.php';

                  $query = "SELECT * FROM hostname";
                  $stmt = mysqli_stmt_init($connection);
                  mysqli_stmt_prepare($stmt, $query);
                  mysqli_stmt_execute($stmt);
                  $result = mysqli_stmt_get_result($stmt);

                  while($row = mysqli_fetch_assoc($result))
                  {
                    ?>
                    <tr>
                      <td style="color:black;" width=10><?php echo $row['idata']; ?></td>
                    </tr>
                    <?php
                  }
                  ?>

                </tbody>
              </table>
              </div>



              <div class="table-responsive col-md-3">
              <table class="table table-hover table-bordered" style="width: 100%;">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Severity</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                  require 'dbc.php';

                  $query = "SELECT * FROM severity";
                  $stmt = mysqli_stmt_init($connection);
                  mysqli_stmt_prepare($stmt, $query);
                  mysqli_stmt_execute($stmt);
                  $result = mysqli_stmt_get_result($stmt);

                  while($row = mysqli_fetch_assoc($result))
                  {
                    ?>
                    <tr>
                      <td style="color:black;" width=10><?php echo $row['sedata']; ?></td>
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



</div>
<!-- /.container -->


<?php 
include('includes/scripts.php'); 
include('includes/footer.php');
?>