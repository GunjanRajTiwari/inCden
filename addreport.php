<?php
include('includes/security.php'); 
include('includes/header.php'); 
include('includes/navbar.php');
?>


<div class="container-fluid">
<!-- /.container -->


<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Report Details</h6>
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
            ?>

            <form action="code.php" method="POST">

            <p class="h5 mb-4 text-gray-900">User Details</p>

            <div class="form-row mb-4">
            <div class="col">
              <input type="text" autocomplete="off" name="username" class="form-control text-gray-900" placeholder="Contact Name" required pattern="^[a-zA-Z0-9_. ]*$" title="Use Alphanumeric Characters Only" maxlength="60">
            </div>
            <div class="col">
              <input type="email" autocomplete="off" name="email" class="form-control text-gray-900" placeholder="Email" required title="Use Alphanumeric Characters Only" maxlength="60">
            </div>
            </div>

            <p class="h5 mb-4 text-gray-900">Location of Incident</p>

            <div class="form-row mb-4">
            <div class="col">
              <input type="text" autocomplete="off" name="bunit" class="form-control text-gray-900" placeholder="Business Unit" required pattern="^[a-zA-Z0-9_. ]*$" title="Use Alphanumeric Characters Only" maxlength="60">
            </div>
            <div class="col">
              <input type="text" autocomplete="off" name="country" class="form-control text-gray-900" placeholder="Country" required pattern="^[a-zA-Z0-9_. ]*$" title="Use Alphanumeric Characters Only" maxlength="60">
            </div>
            </div>

            <!-- Summary -->
            <p class="h5 mb-4 text-gray-900">Summary of Incident</p>

            <div class="form-row mb-4">
            <div class="col">
              <input type="text" autocomplete="off" name="iname" class="form-control text-gray-900" placeholder="Incident Name" required pattern="^[a-zA-Z0-9_. ]*$" title="Use Alphanumeric Characters Only" maxlength="60">
            </div>
            <div class="col">
              <input type="text" autocomplete="off" name="idate" class="form-control text-gray-900" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Date of Incident" required pattern="^[a-zA-Z0-9_./- ]*$" title="Use Date Picker">
            </div>
            <div class="col">
              <input type="text" autocomplete="off" name="severity" class="form-control text-gray-900" placeholder="Severity Level" required pattern="^[a-zA-Z0-9_. ]*$" title="Use Alphanumeric Characters Only" maxlength="60">
            </div>
            <div class="col">
              <select name="status" class="browser-default custom-select mb-4">
                  <option value="" selected disabled>Status</option>
                  <option value=1>Open</option>
                  <option value=0>Closed</option>
              </select>
            </div>
            </div>



            <!-- Incident -->
            <p class="h5 mb-4 text-gray-900">Incident Details</p>

            <div class="form-group">
                <textarea onkeyup="this.value = this.value.replace(/[$#*<>]/g, '')" style="white-space: pre-wrap;" name="idetails" autocomplete="off" class="form-control rounded-1 text-gray-900" rows="5" placeholder="Incident Details &#013; &#010;Brief description of the incident, i.e. period of detection, how it was detected, assets involved, vulnerabilities, threats, etc." required pattern="^[a-zA-Z0-9_.',: ]*$" title="Use Alphanumeric Characters Only"></textarea>
            </div><br>

            <div class="form-group">
                <textarea onkeyup="this.value = this.value.replace(/[$#*<>]/g, '')" style="white-space: pre-wrap;" name="cause" autocomplete="off" class="form-control rounded-1 text-gray-900" rows="5" placeholder="Root Cause Analysis" required pattern="^[a-zA-Z0-9_.',: ]*$" title="Use Alphanumeric Characters Only"></textarea>
            </div><br>

            <div class="form-group">
                <textarea onkeyup="this.value = this.value.replace(/[$#*<>]/g, '')" style="white-space: pre-wrap;" name="implications" autocomplete="off" class="form-control rounded-1 text-gray-900" rows="5" placeholder="Implications" required pattern="^[a-zA-Z0-9_.',: ]*$" title="Use Alphanumeric Characters Only"></textarea>
            </div><br>

            <div class="form-group">
                <textarea onkeyup="this.value = this.value.replace(/[$#*<>]/g, '')" style="white-space: pre-wrap;" name="risk" autocomplete="off" class="form-control rounded-1 text-gray-900" rows="5" placeholder="Potential Risk &#013; &#010;What are the potential risks if the incident is not handled or mitigated?" required pattern="^[a-zA-Z0-9_.',: ]*$" title="Use Alphanumeric Characters Only"></textarea>
            </div><br>

            <div class="form-group">
                <textarea onkeyup="this.value = this.value.replace(/[$#*<>]/g, '')" style="white-space: pre-wrap;" name="mitigate" autocomplete="off" class="form-control rounded-1 text-gray-900" rows="5" placeholder="Mitigating Measures &#013; &#010;What are the action(s) taken or plan actions to mitigate the loss or impact and measured implemented (corrective measures) to prevent the reoccurrence of the incident (preventive measures)? Please indicate the timeline." required pattern="^[a-zA-Z0-9_.',: ]*$" title="Use Alphanumeric Characters Only"></textarea>
            </div><br>

            <div class="form-group">
                <textarea onkeyup="this.value = this.value.replace(/[$#*<>]/g, '')" style="white-space: pre-wrap;" name="comment" autocomplete="off" class="form-control rounded-1 text-gray-900" rows="5" placeholder="Comments &#013; &#010;Any other valuable information to which may be of interest." pattern="^[a-zA-Z0-9_.',: ]*$" title="Use Alphanumeric Characters Only"></textarea>
            </div><br>

            <!-- Note -->
            <label class="text-dark"><u>Note:</u><ul>
            <li>All information are mandatory except for comments column.</li>
            <li>This reporting template is applicable for Information Security. Use this template when reporting Severe Security Incident or Security Incident with high impact and/or possibility of impacting other business units.</li>
            </ul></label><br><br>
            <!-- Print button -->
            <button type="submit" name="savereportuser" class="btn btn-outline-primary btn-lg btn-block" >Save Report</button>

            </form>
     

  </div>
</div>



</div>
<!-- /.container -->


<?php 
include('includes/scripts.php'); 
include('includes/footer.php');
?>