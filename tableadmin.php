<?php 
include('includes/security.php'); 
include('includes/header.php'); 
include('includes/navbaradmin.php');
?>


<!-- table modal -->
<div class="container-fluid">


<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Vulnerability Register</h6>
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
              else if(strpos($fullurl, "error=sqlerror") == true)
              {
                echo '<div class="alert alert-danger alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>FAIL!</strong> Vulnerability Not Added
                </div>';
              }
              else if(strpos($fullurl, "error=invalidseverity") == true)
              {
                echo '<div class="alert alert-danger alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>FAIL!</strong> Vulnerability Not Added (Invalid Severity)
                </div>';
              }
              else if(strpos($fullurl, "error=invalidsystem") == true)
              {
                echo '<div class="alert alert-danger alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>FAIL!</strong> Vulnerability Not Added (Invalid System)
                </div>';
              }
              else if(strpos($fullurl, "error=invalidhost") == true)
              {
                echo '<div class="alert alert-danger alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>FAIL!</strong> Vulnerability Not Added (Invalid IP/Hostname/Application)
                </div>';
              }
              else if(strpos($fullurl, "success=vulnerability.added") == true)
              {
                echo '<div class="alert alert-success alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>SUCCESS!</strong> Vulnerability Added
                </div>';
              }
            ?>


              <div class="table-responsive">
              <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Vulnerability</th>
                        <th scope="col">Severity</th>
                        <th scope="col">System</th>
                        <th scope="col">IP/Hostname/Application</th>
                        <th scope="col">Added On (Date)</th>
                        <th scope="col">Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <form action="code.php" method="POST">

                        <td bgcolor="lightgrey"></td>

                        <td>
                          <input type="text" name="vulnerability" class="form-control" required pattern="^[a-zA-Z0-9_. ]*$" title="Use Alphanumeric Characters Only">
                        </td>

                        <td>
                          <input class="form-control" list="sev" name="severity" autocomplete="off" required>
                          <datalist id="sev">

                          <?php
                            require 'dbc.php';

                            $query = "SELECT * FROM severity ORDER BY seno ASC";
                            $stmt = mysqli_stmt_init($connection);
                            if(!mysqli_stmt_prepare($stmt, $query))
                            {
                                header("Location: tableadmin.php?error=sqlerror");
                                exit();
                            }
                            else
                            {
                                mysqli_stmt_execute($stmt);
                                $result = mysqli_stmt_get_result($stmt);

                            while($row = mysqli_fetch_array($result))
                            { extract($row)
                          ?>

                            <option> <?php echo $row['sedata']; ?> </option>

                          <?php
                            }}
                            ?>

                            </datalist>
                        </td>
                        

                        <td>
                          <input class="form-control" list="sys" name="system" autocomplete="off" required>
                          <datalist id="sys">
                            
                          <?php
                            require 'dbc.php';

                            $query = "SELECT * FROM system ORDER BY syno ASC";
                            $stmt = mysqli_stmt_init($connection);
                            if(!mysqli_stmt_prepare($stmt, $query))
                            {
                                header("Location: tableadmin.php?error=sqlerror");
                                exit();
                            }
                            else
                            {
                                mysqli_stmt_execute($stmt);
                                $result = mysqli_stmt_get_result($stmt);

                            while($row = mysqli_fetch_array($result))
                            { extract($row)
                          ?>

                            <option> <?php echo $row['sydata']; ?> </option>

                          <?php
                            }}
                            ?>

                          </datalist>
                        </td>

                        <td>
                          <input class="form-control" list="ip" name="hostname" autocomplete="off" required>
                          <datalist id="ip">
                            
                          <?php
                            require 'dbc.php';

                            $query = "SELECT * FROM hostname ORDER BY ino ASC";
                            $stmt = mysqli_stmt_init($connection);
                            if(!mysqli_stmt_prepare($stmt, $query))
                            {
                                header("Location: tableadmin.php?error=sqlerror");
                                exit();
                            }
                            else
                            {
                                mysqli_stmt_execute($stmt);
                                $result = mysqli_stmt_get_result($stmt);

                            while($row = mysqli_fetch_array($result))
                            { extract($row)
                          ?>

                            <option> <?php echo $row['idata']; ?> </option>

                          <?php
                            }}
                            ?>

                          </datalist>
                        </td>

                        <td bgcolor="lightgrey"></td>
                        <td bgcolor="lightgrey"></td>
                        
                        <td width="20" align="right">
                          <center><button type="submit" title="Add Vulnerability" name="addvuln" class="btn simple-tooltip">
                          <i class="fas fa-plus" style="font-size:20px;color:green"></i></button></center>
                        </td>

                      </form>
                    </tr>

                    <?php
                      require 'dbc.php';

                      $query = "SELECT * FROM register r
                                JOIN severity se ON r.senofk = se.seno
                                JOIN system sy ON r.synofk = sy.syno
                                JOIN hostname ho ON r.inofk = ho.ino";
                      $stmt = mysqli_stmt_init($connection);
                      mysqli_stmt_prepare($stmt, $query);
                      mysqli_stmt_execute($stmt);
                      $result = mysqli_stmt_get_result($stmt);

                      while($row = mysqli_fetch_assoc($result))
                      {
                    ?>

                    <tr>
                        <th><?php echo $row['rid']; ?></th>
                        <td style="color:black;" width="400"><?php echo $row['vuln']; ?></td>
                        <td style="color:black;" width="10">
                          <?php
                            if($row['seno']==1)
                              $style="66B2FF";
                            else if($row['seno']==2)
                              $style="66FF66";
                            else if($row['seno']==3)
                              $style="FF6666";
                            else if($row['seno']==4)
                              $style="CC0000";
                            else if($row['seno']==5)
                              $style="FFB266"; ?>
                            
                            <div style="background-color:#<?php echo $style; ?>"><?php echo $row['sedata']; ?></div>
                        </td>

                        <td style="color:black;" width="10"><?php echo $row['sydata']; ?></td>
                        <td style="color:black;" width="10"><?php echo $row['idata']; ?></td>
                        <td style="color:black;" width="150"><?php echo $row['vdate']; ?></td>
                        <td style="color:black;" width="10">
                          <?php
                            if($row['status']===1)
                            {echo '<div style="background-color:#FF6666;">Open</div>';}
                            else
                            {echo '<div style="background-color:#66FF66;">Closed</div>';} 
                          ?>
                        </td>

                        <td width="20" align="right">
                          <form action="code.php" method="POST">
                          <input type="hidden" name="vuln_id" value="<?php echo $row['rid']; ?>">
                          <input type="hidden" name="status_id" value="<?php echo $row['status']; ?>">
                          <center><button type="submit" title="Change Status" name="chngstatusbtn" class="btn simple-tooltip">
                          <i class="fas fa-sync" style="font-size:25px;color:midnightblue"></i></button></center>
                          </form>
                        </td>
                        

                    </tr>

                  <?php } ?>

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