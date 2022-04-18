
<?php
include('includes/security.php'); 
include('includes/header.php'); 
include('includes/navbar.php');
?>

<!-- Preloader -->
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Content Row -->
          <div class="row">

            <!-- Individual Donut Chart -->
            <div class="col-xl-8 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-dark">Individual Severities</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-3">
                      <div style="font-weight: bold; color:#003366; width: 100%; height: 40px; position: absolute; top: 50%; left: 0; margin-top: -20px; line-height:19px; text-align: center;">
                      Critical<br>
                      <?php
                      require 'dbc.php';

                      $sev = 4;
                      $query = "SELECT * FROM register WHERE senofk=?";
                      $stmt = mysqli_stmt_init($connection);
                      mysqli_stmt_prepare($stmt, $query);
                      mysqli_stmt_bind_param($stmt, "s", $sev);
                      mysqli_stmt_execute($stmt);
                      $result = mysqli_stmt_get_result($stmt);
                      $row = mysqli_num_rows($result);
                      echo $row;
                      ?>
                      </div>
                    <canvas id="criticalPieChart"></canvas>
                    </div>

                    <div class="col-md-3">
                    <div style="font-weight: bold; color:#003366; width: 100%; height: 40px; position: absolute; top: 50%; left: 0; margin-top: -20px; line-height:19px; text-align: center;">
                      High<br>
                      <?php
                      require 'dbc.php';

                      $sev = 3;
                      $query = "SELECT * FROM register WHERE senofk=?";
                      $stmt = mysqli_stmt_init($connection);
                      mysqli_stmt_prepare($stmt, $query);
                      mysqli_stmt_bind_param($stmt, "s", $sev);
                      mysqli_stmt_execute($stmt);
                      $result = mysqli_stmt_get_result($stmt);
                      $row = mysqli_num_rows($result);
                      echo $row;
                      ?>
                      </div>
                    <canvas id="highhPieChart"></canvas>
                    </div>

                    <div class="col-md-3">
                    <div style="font-weight: bold; color:#003366; width: 100%; height: 40px; position: absolute; top: 50%; left: 0; margin-top: -20px; line-height:19px; text-align: center;">
                      Medium<br>
                      <?php
                      require 'dbc.php';

                      $sev = 5;
                      $query = "SELECT * FROM register WHERE senofk=?";
                      $stmt = mysqli_stmt_init($connection);
                      mysqli_stmt_prepare($stmt, $query);
                      mysqli_stmt_bind_param($stmt, "s", $sev);
                      mysqli_stmt_execute($stmt);
                      $result = mysqli_stmt_get_result($stmt);
                      $row = mysqli_num_rows($result);
                      echo $row;
                      ?>
                      </div>
                    <canvas id="medPieChart"></canvas>
                    </div>

                    <div class="col-md-3">
                    <div style="font-weight: bold; color:#003366; width: 100%; height: 40px; position: absolute; top: 50%; left: 0; margin-top: -20px; line-height:19px; text-align: center;">
                      Low<br>
                      <?php
                      require 'dbc.php';

                      $sev = 1;
                      $query = "SELECT * FROM register WHERE senofk=?";
                      $stmt = mysqli_stmt_init($connection);
                      mysqli_stmt_prepare($stmt, $query);
                      mysqli_stmt_bind_param($stmt, "s", $sev);
                      mysqli_stmt_execute($stmt);
                      $result = mysqli_stmt_get_result($stmt);
                      $row = mysqli_num_rows($result);
                      echo $row;
                      ?>
                      </div>
                    <canvas id="lowPieChart"></canvas>
                    </div>

                    <div class="col-md-3">
                    <div style="font-weight: bold; color:#003366; width: 100%; height: 40px; position: absolute; top: 50%; left: 0; margin-top: -20px; line-height:19px; text-align: center;">
                      Informational<br>
                      <?php
                      require 'dbc.php';

                      $sev = 2;
                      $query = "SELECT * FROM register WHERE senofk=?";
                      $stmt = mysqli_stmt_init($connection);
                      mysqli_stmt_prepare($stmt, $query);
                      mysqli_stmt_bind_param($stmt, "s", $sev);
                      mysqli_stmt_execute($stmt);
                      $result = mysqli_stmt_get_result($stmt);
                      $row = mysqli_num_rows($result);
                      echo $row;
                      ?>
                      </div>
                    <canvas id="infoPieChart"></canvas>
                    </div>

                    <div class="col-md-3">
                    <div style="font-weight: bold; color:#003366; width: 100%; height: 40px; position: absolute; top: 50%; left: 0; margin-top: -20px; line-height:19px; text-align: center;">
                      Open<br>
                      <?php
                      require 'dbc.php';

                      $stat = 1;
                      $query = "SELECT * FROM register WHERE status=?";
                      $stmt = mysqli_stmt_init($connection);
                      mysqli_stmt_prepare($stmt, $query);
                      mysqli_stmt_bind_param($stmt, "s", $stat);
                      mysqli_stmt_execute($stmt);
                      $result = mysqli_stmt_get_result($stmt);
                      $row = mysqli_num_rows($result);
                      echo $row;
                      ?>
                      </div>
                    <canvas id="openPieChart"></canvas>
                    </div>

                    <div class="col-md-3">
                    <div style="font-weight: bold; color:#003366; width: 100%; height: 40px; position: absolute; top: 50%; left: 0; margin-top: -20px; line-height:19px; text-align: center;">
                      Close<br>
                      <?php
                      require 'dbc.php';

                      $stat = 0;
                      $query = "SELECT * FROM register WHERE status=?";
                      $stmt = mysqli_stmt_init($connection);
                      mysqli_stmt_prepare($stmt, $query);
                      mysqli_stmt_bind_param($stmt, "s", $stat);
                      mysqli_stmt_execute($stmt);
                      $result = mysqli_stmt_get_result($stmt);
                      $row = mysqli_num_rows($result);
                      echo $row;
                      ?>
                      </div>
                    <canvas id="closePieChart"></canvas>
                    </div>

                  </div>
                </div>
              </div>
            </div>


            <!-- top Donut Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-dark">Top 5 Vulnerabilities</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body" style="height: 354px;">
                  <div>
                    <canvas height="330" id="testPieChart"></canvas>
                  </div>
                </div>
              </div>
            </div>


            <!-- Severity Donut Chart -->
            <div class="col-xl-6 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-dark">Total Severities :
                        <?php
                          require 'dbc.php';

                          $query = "SELECT * FROM register";
                          $stmt = mysqli_stmt_init($connection);
                          mysqli_stmt_prepare($stmt, $query);
                          mysqli_stmt_execute($stmt);
                          $result = mysqli_stmt_get_result($stmt);
                          $row = mysqli_num_rows($result);
                          echo $row;
                        ?>
                  </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4">
                    <canvas id="totalPieChart"></canvas>
                  </div>
                  <hr>
                  </div>
              
            <!-- Bar Chart -->
            <div>
                <div class="card-body">
                  <div class="chart-bar">
                    <canvas id="totalBarChart"></canvas>
                  </div>
                  <hr>
                </div>
            </div>
                  </div>
                  </div>
          


          <!-- Vulnerability Donut Chart -->
          <div class="col-xl-6 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-dark">Total Vulnerabilities</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4">
                    <canvas id="vulnPieChart"></canvas>
                  </div>
                  <hr>
                  </div>     

        <!-- Bar Chart -->
        <div>
          <div class="card-body">
            <div class="chart-bar">
              <canvas id="vulnBarChart"></canvas>
            </div>
            <hr>
          </div>
        </div>

      </div>
      </div>
                  
          

          </div>
          <!-- Content Row -->



        </div>
        <!-- /.container-fluid -->

                  
      </div>
      <!-- End of Main Content -->



<?php 
include('includes/scripts.php');
include('includes/dashcharts.php'); 
include('includes/footer.php');
?>




