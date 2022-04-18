<?php
include('includes/security.php'); 
include('includes/header.php'); 
include('includes/navbaradmin.php');
?>


<div class="container-fluid">
<!-- /.container -->


<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Admin Profile</h6>
  </div>

  <div class="card-body">

  <?php
    if(isset($_POST['edit_btn']))
    {
    require 'dbc.php';
    $id = $_POST['edit_id'];

    $query = "SELECT * FROM admin WHERE ano=?";
    $stmt = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($stmt, $query))
    {
        header("Location: adminprof.php?error=sqlerror");
        exit();
    }
    else
    {
        mysqli_stmt_bind_param($stmt, "s", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

    while($row = mysqli_fetch_assoc($result))
    {
  ?>

      <form action="code.php" method="POST">

        <input type="hidden" name="edit_id" value="<?php echo $row['ano'] ?>"> 
        <div class="form-group">
            <label class="text-gray-900">Username</label>
            <input type="text" autocomplete="off" name="edit_username" value="<?php echo $row['ausername'] ?>" class="form-control text-gray-900" placeholder="Enter Username" required pattern="^[a-zA-Z0-9_. ]*$" title="Use Alphanumeric Characters Only" maxlength="60">
        </div>
        <div class="form-group">
            <label class="text-gray-900">Password</label>
            <input type="password" autocomplete="off" name="edit_password" value="<?php echo $row['apassword'] ?>" class="form-control text-gray-900" placeholder="Enter Password" required maxlength="60">
        </div>
        <br>
        <button type="submit" name="updatebtn" class="btn btn-primary">UPDATE</button>&emsp;
        <a href="adminprof.php" class="btn btn-danger">CANCEL</a>

    </form>

  <?php
    }
    }
  }
  ?>

  </div>
</div>



</div>
<!-- /.container -->


<?php 
include('includes/scripts.php'); 
include('includes/footer.php');
?>