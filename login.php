<?php 
include('includes/header.php'); 
?>

<body class="bg-gradient-light">
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          
            <!-- Nested Row within Card Body -->
            
            <div class="row">
            <img class="img-responsive" src="img/vmlogo.jpg" class="rounded" style="width:460px;">
              
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">

            <?php
              $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            
              if(strpos($fullurl, "error=sqlerror") == true)
              {
                echo '<div class="alert alert-danger alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>FAIL!</strong> Error While Logging In
                </div>';
              }
              else if(strpos($fullurl, "error=invalid") == true)
              {
                echo '<div class="alert alert-danger alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>INVALID USERNAME OR PASSWORD!</strong>
                </div>';
              }
              else if(strpos($fullurl, "error=approval") == true)
              {
                echo '<div class="alert alert-danger alert-dismissible fade show" data-auto-dismiss="10000" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>ADMIN HAS NOT APPROVED YOUR REGISTRATION YET!</strong>
                </div>';
              }
              else if(strpos($fullurl, "registersuccess") == true)
              {
                echo '<SCRIPT> alert("REGISTRATION SUCCESSFUL!\nRequest have been sent to the Admin for Approval");</SCRIPT>';
              }
            ?>

                    <h1 class="h3 text-gray-900 mb-4">Vulnerability Manager</h1>
                  </div>

                  <form class="user" action="code.php" method="POST">
                    <div class="form-group">
                      <input type="text" style='font-size: 18px;' name="username" autocomplete="off" class="form-control form-control-user text-gray-900" placeholder="Username" required pattern="^[a-zA-Z0-9_. ]*$" title="Use Alphanumeric Characters Only" maxlength="60">
                    </div>
                    <div class="form-group">
                      <input type="password" style='font-size: 18px;' name="password" autocomplete="off" class="form-control form-control-user text-gray-900" placeholder="Password" required maxlength="60">
                    </div>
                    <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block">Login</button>
                    <br>
                    <a class="btn btn-dark btn-user btn-block" role="button"  href="register.php">Register</a>
                    <hr><!-- Note -->
                    
                    <label class="text-dark">
                    For Username or Password related queries please contact Admin / Super User
                    </label><br><br>
                    
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