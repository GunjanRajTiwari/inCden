<?php 
include('includes/header.php'); 
?>

<body class="bg-gradient-info">
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          
            <!-- Nested Row within Card Body -->
            <div class="row justify-content-center">
              <div class="col-lg-12">
                <div class="p-5">

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
              ?>

                  <div class="text-center">
                    <h1 class="h3 text-gray-900 mb-4">Registration</h1>
                  </div>

                  <form class="user" action="code.php" method="POST">

                    <div class="form-group">
                      <label class="col-form-label col-form-label-lg text-gray-900">Username</label>
                      <input type="text" name="username" autocomplete="off" class="form-control form-control-user text-gray-900" placeholder="Enter Username" required pattern="^[a-zA-Z0-9_. ]*$" title="Use Alphanumeric Characters Only" maxlength="60">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label col-form-label-lg text-gray-900">Password</label>
                      <input type="password" name="password" autocomplete="off" class="form-control form-control-user text-gray-900" placeholder="Enter Password" required maxlength="60">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label col-form-label-lg text-gray-900">Confirm Password</label>
                      <input type="password" name="confirmpassword" autocomplete="off" class="form-control form-control-user text-gray-900" placeholder="Rewrite Password" required maxlength="60">
                    </div>
                    <br>
                    <button type="submit" name="registrationbtn" class="btn btn-primary btn-user btn-block">Register</button>
                    <a class="btn btn-light btn-block btn-lg" role="button"  href="login.php">Back to Login Page</a>
                    <hr>
                    </form>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>


<?php 
include('includes/scripts.php'); 
?>

</body>

</html>