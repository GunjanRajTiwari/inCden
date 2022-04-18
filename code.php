<?php
include('includes/security.php'); 
date_default_timezone_set('Asia/Karachi');

if(isset($_POST['login_btn']))
{
    require 'dbc.php';

    $username_login = $_POST['username'];
    $password_login = $_POST['password'];

    $query = "SELECT * FROM user WHERE uusername=?";
    $stmt = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($stmt, $query))
        {
            header("Location: login.php?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "s", $username_login);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt); 
            if($row = mysqli_fetch_assoc($result))
            {
                $pwdcheck = password_verify($password_login, $row['upassword']);
                if($pwdcheck == false)
                {
                    $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
                    "Attempt: Failed".PHP_EOL.
                    "User: ".$username_login.PHP_EOL.
                    "-------------------------".PHP_EOL;
                    //-
                    file_put_contents('./logs/login_logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);

                    header("Location: login.php?error=invalid");
                    exit();
                }
                else if($pwdcheck == true)
                {
                    if($row['accept'] == 1)
                    {
                    $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
                    "Attempt: Success".PHP_EOL.
                    "User: ".$username_login.PHP_EOL.
                    "-------------------------".PHP_EOL;
                    //-
                    file_put_contents('./logs/login_logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);
                    
                    $_SESSION['user'] = $row['uusername']; 
                    header("Location: index.php");
                    exit();
                    }
                    else
                    {
                        $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
                        "Attempt: Failed (Request Not Approved)".PHP_EOL.
                        "User: ".$username_login.PHP_EOL.
                        "-------------------------".PHP_EOL;
                        //-
                        file_put_contents('./logs/login_logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);

                        header("Location: login.php?error=approval");
                        exit();
                    }
                }
            }
            else
            {
                $query = "SELECT * FROM admin WHERE ausername=?";
                $stmt = mysqli_stmt_init($connection);
                if(!mysqli_stmt_prepare($stmt, $query))
                    {
                        header("Location: login.php?error=sqlerror");
                        exit();
                    }
                    else
                    {
                        mysqli_stmt_bind_param($stmt, "s", $username_login);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt); 
                        if($row = mysqli_fetch_assoc($result))
                        {
                            $pwdcheck = password_verify($password_login, $row['apassword']);
                            if($pwdcheck == false)
                            {
                                $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
                                "Attempt: Failed".PHP_EOL.
                                "User: ".$username_login.PHP_EOL.
                                "-------------------------".PHP_EOL;
                                //-
                                file_put_contents('./logs/login_logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);

                                header("Location: login.php?error=invalid");
                                exit();
                            }
                            else if($pwdcheck == true)
                            {
                                $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
                                "Attempt: Success".PHP_EOL.
                                "User: ".$username_login.PHP_EOL.
                                "-------------------------".PHP_EOL;
                                //-
                                file_put_contents('./logs/login_logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);

                                $_SESSION['admin'] = $row['ausername'];
                                header("Location: indexadmin.php");
                                exit();
                            }
                        }
                        else
                        {
                            $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
                            "Attempt: Failed".PHP_EOL.
                            "User: ".$username_login.PHP_EOL.
                            "-------------------------".PHP_EOL;
                            //-
                            file_put_contents('./logs/login_logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);
                            
                            header("Location: login.php?error=invalid");
                            exit();
                        }
                    }
                }
                        
            }
        
    mysqli_stmt_close($stmt);
    mysqli_close($connection);
}















if(isset($_POST['adminbtn']))
{
    require 'dbc.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    if(empty($username) || empty($password) || empty($cpassword))
    {
        header("Location: adminprof.php?error=emptyfields");
        exit();
    }
    else if(!preg_match("/^[a-zA-Z0-9_. ]*$/", $username))
    {
        header("Location: adminprof.php?error=invaliduser");
        exit();
    }
    else if($password !== $cpassword)
    {
        header("Location: adminprof.php?error=invalidpass");
        exit();
    }
    else
    {
        $query = "SELECT ausername FROM admin WHERE ausername=?";
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt, $query))
        {
            header("Location: adminprof.php?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheck = mysqli_stmt_num_rows($stmt); 
            if($resultcheck > 0)
            {
                header("Location: adminprof.php?error=usertaken");
                exit();
            }
            else
            {
                $query = "SELECT uusername FROM user WHERE uusername=?";
                $stmt = mysqli_stmt_init($connection);
                if(!mysqli_stmt_prepare($stmt, $query))
                {
                    header("Location: adminprof.php?error=sqlerror");
                    exit();
                }
                else
                {
                    mysqli_stmt_bind_param($stmt, "s", $username);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    $resultcheck = mysqli_stmt_num_rows($stmt); 
                    if($resultcheck > 0)
                    {
                        header("Location: adminprof.php?error=usertaken");
                        exit();
                    }
                    else
                    {
                        $query = "INSERT INTO admin (ausername, apassword) VALUES (?,?)";
                        $stmt = mysqli_stmt_init($connection);
                        if(!mysqli_stmt_prepare($stmt, $query))
                        {
                            header("Location: adminprof.php?error=sqlerror");
                            exit();
                        }
                        else
                        {
                            $hashedpwd = password_hash($password, PASSWORD_DEFAULT);

                            mysqli_stmt_bind_param($stmt, "ss", $username, $hashedpwd);
                            mysqli_stmt_execute($stmt);

                            $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
                            "Status: Add Success".PHP_EOL.
                            "User Added: ".$username.PHP_EOL.
                            "-------------------------".PHP_EOL;
                            //-
                            file_put_contents('./logs/adminprofile_logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);

                            header("Location: adminprof.php?success=admin.added");
                            exit();
                        }
                    }
                }
            }       
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);

}














if(isset($_POST['updatebtn']))
{
    require 'dbc.php';

    $DEFAULT = 'DEFAULT_ADMIN';
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $password = $_POST['edit_password'];

    if(empty($username) || empty($password))
    {
        header("Location: adminprof.php?error=emptyfields");
        exit();
    }
    else if(!preg_match("/^[a-zA-Z0-9_. ]*$/", $username))
    {
        header("Location: adminprof.php?error=invaliduser");
        exit();
    }
    else
    {
        $query = "UPDATE admin SET ausername=? WHERE ano=?";
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt, $query))
        {
            header("Location: adminprof.php?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "ss", $DEFAULT, $id);
            mysqli_stmt_execute($stmt);
        }

        
        $query = "SELECT ausername FROM admin WHERE ausername=?";
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt, $query))
        {
            header("Location: adminprof.php?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheck = mysqli_stmt_num_rows($stmt); 
            if($resultcheck > 0)
            {
                header("Location: adminprof.php?error=usertaken");
                exit();
            }
            else
            {
                $query = "SELECT uusername FROM user WHERE uusername=?";
                $stmt = mysqli_stmt_init($connection);
                if(!mysqli_stmt_prepare($stmt, $query))
                {
                    header("Location: adminprof.php?error=sqlerror");
                    exit();
                }
                else
                {
                    mysqli_stmt_bind_param($stmt, "s", $username);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    $resultcheck = mysqli_stmt_num_rows($stmt); 
                    if($resultcheck > 0)
                    {
                        header("Location: adminprof.php?error=usertaken");
                        exit();
                    }
                    else
                    {
                        $query = "UPDATE admin SET ausername=?, apassword=? WHERE ano=?";
                        $stmt = mysqli_stmt_init($connection);
                        if(!mysqli_stmt_prepare($stmt, $query))
                        {
                            header("Location: adminprof.php?error=sqlerror");
                            exit();
                        }
                        else
                        {
                            $hashedpwd = password_hash($password, PASSWORD_DEFAULT);

                            mysqli_stmt_bind_param($stmt, "sss", $username, $hashedpwd, $id);
                            mysqli_stmt_execute($stmt);

                            $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
                            "Status: Edit Success".PHP_EOL.
                            "User Edited: ".$id.PHP_EOL.
                            "-------------------------".PHP_EOL;
                            //-
                            file_put_contents('./logs/adminprofile_logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);

                            header("Location: adminprof.php?success=admin.updated");
                            exit();
                        }
                    }
                }
            }
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);

}













if(isset($_POST['deletebtn']))
{
    require 'dbc.php';
    $id = $_POST['delete_id'];

    $query = "DELETE FROM admin WHERE ano=?";
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

        $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
        "Status: Delete Success".PHP_EOL.
        "User Deleted: ".$id.PHP_EOL.
        "-------------------------".PHP_EOL;
        //-
        file_put_contents('./logs/adminprofile_logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);

        header("Location: adminprof.php?success=admin.deleted");
        exit();
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);
}
















if(isset($_POST['registrationbtn']))
{
    require 'dbc.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    if(empty($username) || empty($password) || empty($cpassword))
    {
        header("Location: register.php?error=emptyfields");
        exit();
    }
    else if(!preg_match("/^[a-zA-Z0-9_. ]*$/", $username))
    {
        header("Location: register.php?error=invaliduser");
        exit();
    }
    else if($password !== $cpassword)
    {
        header("Location: register.php?error=invalidpass");
        exit();
    }
    else
    {
        $query = "SELECT uusername FROM user WHERE uusername=?";
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt, $query))
        {
            header("Location: register.php?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheck = mysqli_stmt_num_rows($stmt); 
            if($resultcheck > 0)
            {
                header("Location: register.php?error=usertaken");
                exit();
            }
            else
            {
                $query = "SELECT ausername FROM admin WHERE ausername=?";
                $stmt = mysqli_stmt_init($connection);
                if(!mysqli_stmt_prepare($stmt, $query))
                {
                    header("Location: register.php?error=sqlerror");
                    exit();
                }
                else
                {
                    mysqli_stmt_bind_param($stmt, "s", $username);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    $resultcheck = mysqli_stmt_num_rows($stmt); 
                    if($resultcheck > 0)
                    {
                        header("Location: register.php?error=usertaken");
                        exit();
                    }
                    else
                    {
                        $query = "INSERT INTO user (uusername, upassword) VALUES (?,?)";
                        $stmt = mysqli_stmt_init($connection);
                        if(!mysqli_stmt_prepare($stmt, $query))
                        {
                            header("Location: register.php?error=sqlerror");
                            exit();
                        }
                        else
                        {
                            $hashedpwd = password_hash($password, PASSWORD_DEFAULT);

                            mysqli_stmt_bind_param($stmt, "ss", $username, $hashedpwd);
                            mysqli_stmt_execute($stmt);
                            header("Location: login.php?registersuccess");
                            exit();
                        }
                    }
                }
            }       
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);

}
















if(isset($_POST['acceptbtn']))
{
    require 'dbc.php';
    $access = 1;
    $id = $_POST['accept_id'];

    $query = "UPDATE user SET accept=? WHERE uno=?";
    $stmt = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($stmt, $query))
    {
        header("Location: userprof.php?error=sqlerror");
        exit();
    }
    else
    {
        mysqli_stmt_bind_param($stmt, "ss", $access, $id);
        mysqli_stmt_execute($stmt);

        $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
        "Status: User Accepted".PHP_EOL.
        "User: ".$id.PHP_EOL.
        "-------------------------".PHP_EOL;
        //-
        file_put_contents('./logs/userprofile_logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);

        header("Location: userprof.php?success=user.accepted");
        exit();
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);
}















if(isset($_POST['rejectbtn']))
{
    require 'dbc.php';
    $access = 0;
    $id = $_POST['reject_id'];

    $query = "UPDATE user SET accept=? WHERE uno=?";
    $stmt = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($stmt, $query))
    {
        header("Location: userprof.php?error=sqlerror");
        exit();
    }
    else
    {
        mysqli_stmt_bind_param($stmt, "ss", $access, $id);
        mysqli_stmt_execute($stmt);

        $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
        "Status: User Rejected".PHP_EOL.
        "User: ".$id.PHP_EOL.
        "-------------------------".PHP_EOL;
        //-
        file_put_contents('./logs/userprofile_logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);

        header("Location: userprof.php?success=user.rejected");
        exit();
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);
}
















if(isset($_POST['deletebtnuser']))
{
    require 'dbc.php';
    $id = $_POST['delete_id'];

    $query = "DELETE FROM user WHERE uno=?";
    $stmt = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($stmt, $query))
    {
        header("Location: userprof.php?error=sqlerror");
        exit();
    }
    else
    {
        mysqli_stmt_bind_param($stmt, "s", $id);
        mysqli_stmt_execute($stmt);

        $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
        "Status: Delete Success".PHP_EOL.
        "User Deleted: ".$id.PHP_EOL.
        "-------------------------".PHP_EOL;
        //-
        file_put_contents('./logs/userprofile_logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);

        header("Location: userprof.php?success=user.deleted");
        exit();
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);
}














if(isset($_POST['updatebtnuser']))
{
    require 'dbc.php';

    $DEFAULT = 'DEFAULT_USER';
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $password = $_POST['edit_password'];

    if(empty($username) || empty($password))
    {
        header("Location: userprof.php?error=emptyfields");
        exit();
    }
    else if(!preg_match("/^[a-zA-Z0-9_. ]*$/", $username))
    {
        header("Location: userprof.php?error=invaliduser");
        exit();
    }
    else
    {
        $query = "UPDATE user SET uusername=? WHERE uno=?";
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt, $query))
        {
            header("Location: userprof.php?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "ss", $DEFAULT, $id);
            mysqli_stmt_execute($stmt);
        }

        
        $query = "SELECT uusername FROM user WHERE uusername=?";
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt, $query))
        {
            header("Location: userprof.php?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheck = mysqli_stmt_num_rows($stmt); 
            if($resultcheck > 0)
            {
                header("Location: userprof.php?error=usertaken");
                exit();
            }
            else
            {

                $query = "SELECT ausername FROM admin WHERE ausername=?";
                $stmt = mysqli_stmt_init($connection);
                if(!mysqli_stmt_prepare($stmt, $query))
                {
                    header("Location: userprof.php?error=sqlerror");
                    exit();
                }
                else
                {
                    mysqli_stmt_bind_param($stmt, "s", $username);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    $resultcheck = mysqli_stmt_num_rows($stmt); 
                    if($resultcheck > 0)
                    {
                        header("Location: userprof.php?error=usertaken");
                        exit();
                    }
                    else
                    {
                        $query = "UPDATE user SET uusername=?, upassword=? WHERE uno=?";
                        $stmt = mysqli_stmt_init($connection);
                        if(!mysqli_stmt_prepare($stmt, $query))
                        {
                            header("Location: userprof.php?error=sqlerror");
                            exit();
                        }
                        else
                        {
                            $hashedpwd = password_hash($password, PASSWORD_DEFAULT);

                            mysqli_stmt_bind_param($stmt, "sss", $username, $hashedpwd, $id);
                            mysqli_stmt_execute($stmt);

                            $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
                            "Status: Edit Success".PHP_EOL.
                            "User Edited: ".$id.PHP_EOL.
                            "-------------------------".PHP_EOL;
                            //-
                            file_put_contents('./logs/userprofile_logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);

                            header("Location: userprof.php?success=user.updated");
                            exit();
                        }
                    }
                }
            }
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);

}















if(isset($_POST['addsystem']))
{
    require 'dbc.php';

    $system = $_POST['system'];

    if(empty($system))
    {
        header("Location: editdb.php?error=emptysystem");
        exit();
    }
    else if(!preg_match("/^[a-zA-Z0-9_. ]*$/", $system))
    {
        header("Location: editdb.php?error=invalidsystem");
        exit();
    }
    else
    {
        $query = "SELECT sydata FROM system WHERE sydata=?";
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt, $query))
        {
            header("Location: editdb.php?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "s", $system);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheck = mysqli_stmt_num_rows($stmt); 
            if($resultcheck > 0)
            {
                header("Location: editdb.php?error=systemexists");
                exit();
            }
            else
            {
                $query = "INSERT INTO system (sydata) VALUES (?)";
                $stmt = mysqli_stmt_init($connection);
                if(!mysqli_stmt_prepare($stmt, $query))
                {
                    header("Location: editdb.php?error=sqlerror");
                    exit();
                }
                else
                {
                    mysqli_stmt_bind_param($stmt, "s", $system);
                    mysqli_stmt_execute($stmt);

                    $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
                    "Status: System Added".PHP_EOL.
                    "System: ".$system.PHP_EOL.
                    "-------------------------".PHP_EOL;
                    //-
                    file_put_contents('./logs/db_logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);

                    header("Location: editdb.php?success=system.added");
                    exit();       
                }
            }       
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);

}















if(isset($_POST['addhost']))
{
    require 'dbc.php';

    $hostname = $_POST['hostname'];

    if(empty($hostname))
    {
        header("Location: editdb.php?error=emptyhost");
        exit();
    }
    else
    {
        $query = "SELECT idata FROM hostname WHERE idata=?";
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt, $query))
        {
            header("Location: editdb.php?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "s", $hostname);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheck = mysqli_stmt_num_rows($stmt); 
            if($resultcheck > 0)
            {
                header("Location: editdb.php?error=hostexists");
                exit();
            }
            else
            {
                $query = "INSERT INTO hostname (idata) VALUES (?)";
                $stmt = mysqli_stmt_init($connection);
                if(!mysqli_stmt_prepare($stmt, $query))
                {
                    header("Location: editdb.php?error=sqlerror");
                    exit();
                }
                else
                {
                    mysqli_stmt_bind_param($stmt, "s", $hostname);
                    mysqli_stmt_execute($stmt);

                    $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
                    "Status: Hostname Added".PHP_EOL.
                    "Hostname: ".$hostname.PHP_EOL.
                    "-------------------------".PHP_EOL;
                    //-
                    file_put_contents('./logs/db_logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);

                    header("Location: editdb.php?success=host.added");
                    exit();       
                }
            }       
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);

}















if(isset($_POST['addseverity']))
{
    require 'dbc.php';

    $severity = $_POST['severity'];

    if(empty($severity))
    {
        header("Location: editdb.php?error=emptyseverity");
        exit();
    }
    else if(!preg_match("/^[a-zA-Z0-9_. ]*$/", $severity))
    {
        header("Location: editdb.php?error=invalidseverity");
        exit();
    }
    else
    {
        $query = "SELECT sedata FROM severity WHERE sedata=?";
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt, $query))
        {
            header("Location: editdb.php?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "s", $severity);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheck = mysqli_stmt_num_rows($stmt); 
            if($resultcheck > 0)
            {
                header("Location: editdb.php?error=severityexists");
                exit();
            }
            else
            {
                $query = "INSERT INTO severity (sedata) VALUES (?)";
                $stmt = mysqli_stmt_init($connection);
                if(!mysqli_stmt_prepare($stmt, $query))
                {
                    header("Location: editdb.php?error=sqlerror");
                    exit();
                }
                else
                {
                    mysqli_stmt_bind_param($stmt, "s", $severity);
                    mysqli_stmt_execute($stmt);

                    $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
                    "Status: Severity Added".PHP_EOL.
                    "Severity: ".$severity.PHP_EOL.
                    "-------------------------".PHP_EOL;
                    //-
                    file_put_contents('./logs/db_logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);

                    header("Location: editdb.php?success=severity.added");
                    exit();       
                }
            }       
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);

}















if(isset($_POST['deletesystem']))
{
    require 'dbc.php';

    $system = $_POST['system'];

    if(empty($system))
    {
        header("Location: editdb.php?error=emptysystem");
        exit();
    }
    else if(!preg_match("/^[a-zA-Z0-9_. ]*$/", $system))
    {
        header("Location: editdb.php?error=invalidsystem");
        exit();
    }
    else
    {
        $query = "SELECT sydata FROM system WHERE sydata=?";
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt, $query))
        {
            header("Location: editdb.php?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "s", $system);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheck = mysqli_stmt_num_rows($stmt); 
            if($resultcheck > 0)
            {
                $query = "DELETE FROM system WHERE sydata=?";
                $stmt = mysqli_stmt_init($connection);
                if(!mysqli_stmt_prepare($stmt, $query))
                {
                    header("Location: editdb.php?error=sqlerror");
                    exit();
                }
                else
                {
                    mysqli_stmt_bind_param($stmt, "s", $system);
                    mysqli_stmt_execute($stmt);

                    $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
                    "Status: System Deleted".PHP_EOL.
                    "System: ".$system.PHP_EOL.
                    "-------------------------".PHP_EOL;
                    //-
                    file_put_contents('./logs/db_logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);

                    header("Location: editdb.php?success=system.deleted");
                    exit();       
                }
            }
            else
            {
                header("Location: editdb.php?error=systemnotexists");
                exit();
            }       
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);

}















if(isset($_POST['deletehost']))
{
    require 'dbc.php';

    $hostname = $_POST['hostname'];

    if(empty($hostname))
    {
        header("Location: editdb.php?error=emptyhost");
        exit();
    }
    else
    {
        $query = "SELECT idata FROM hostname WHERE idata=?";
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt, $query))
        {
            header("Location: editdb.php?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "s", $hostname);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheck = mysqli_stmt_num_rows($stmt); 
            if($resultcheck > 0)
            {
                $query = "DELETE FROM hostname WHERE idata=?";
                $stmt = mysqli_stmt_init($connection);
                if(!mysqli_stmt_prepare($stmt, $query))
                {
                    header("Location: editdb.php?error=sqlerror");
                    exit();
                }
                else
                {
                    mysqli_stmt_bind_param($stmt, "s", $hostname);
                    mysqli_stmt_execute($stmt);

                    $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
                    "Status: Host Deleted".PHP_EOL.
                    "Host: ".$hostname.PHP_EOL.
                    "-------------------------".PHP_EOL;
                    //-
                    file_put_contents('./logs/db_logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);

                    header("Location: editdb.php?success=host.deleted");
                    exit();       
                }
            }
            else
            {
                header("Location: editdb.php?error=hostnotexists");
                exit();       
            }       
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);

}
















if(isset($_POST['deleteseverity']))
{
    require 'dbc.php';

    $severity = $_POST['severity'];

    if(empty($severity))
    {
        header("Location: editdb.php?error=emptyseverity");
        exit();
    }
    else if(!preg_match("/^[a-zA-Z0-9_. ]*$/", $severity))
    {
        header("Location: editdb.php?error=invalidseverity");
        exit();
    }
    else
    {
        $query = "SELECT sedata FROM severity WHERE sedata=?";
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt, $query))
        {
            header("Location: editdb.php?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "s", $severity);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheck = mysqli_stmt_num_rows($stmt); 
            if($resultcheck > 0)
            {
                $query = "DELETE FROM severity WHERE sedata=?";
                $stmt = mysqli_stmt_init($connection);
                if(!mysqli_stmt_prepare($stmt, $query))
                {
                    header("Location: editdb.php?error=sqlerror");
                    exit();
                }
                else
                {
                    mysqli_stmt_bind_param($stmt, "s", $severity);
                    mysqli_stmt_execute($stmt);

                    $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
                    "Status: Severity Deleted".PHP_EOL.
                    "Severity: ".$severity.PHP_EOL.
                    "-------------------------".PHP_EOL;
                    //-
                    file_put_contents('./logs/db_logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);

                    header("Location: editdb.php?success=severity.deleted");
                    exit();       
                }
            }
            else
            {
                header("Location: editdb.php?error=severitynotexists");
                exit();
            }       
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);

}















if(isset($_POST['addvuln']))
{
    require 'dbc.php';

    date_default_timezone_set('Asia/Karachi');
    $date = date('Y/m/d H:i:s');
    $status = 1;
    $vulnerability = $_POST['vulnerability'];
    $severity = $_POST['severity'];
    $system = $_POST['system'];
    $hostname = $_POST['hostname'];

    
    $query = "SELECT * FROM severity WHERE sedata=?";
    $stmt = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($stmt, $query))
    {
        header("Location: tableadmin.php?error=sqlerror");
        exit();
    }
    else
    {
        mysqli_stmt_bind_param($stmt, "s", $severity);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultcheck = mysqli_stmt_num_rows($stmt); 
        if($resultcheck == 0)
        {
            header("Location: tableadmin.php?error=invalidseverity");
            exit();
        }
        else
        {
            $query = "SELECT * FROM system WHERE sydata=?";
            $stmt = mysqli_stmt_init($connection);
            if(!mysqli_stmt_prepare($stmt, $query))
            {
                header("Location: tableadmin.php?error=sqlerror");
                exit();
            }
            else
            {
                mysqli_stmt_bind_param($stmt, "s", $system);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $resultcheck = mysqli_stmt_num_rows($stmt); 
                if($resultcheck == 0)
                {
                    header("Location: tableadmin.php?error=invalidsystem");
                    exit();
                }
                else
                {
                    $query = "SELECT * FROM hostname WHERE idata=?";
                    $stmt = mysqli_stmt_init($connection);
                    if(!mysqli_stmt_prepare($stmt, $query))
                    {
                        header("Location: tableadmin.php?error=sqlerror");
                        exit();
                    }
                    else
                    {
                        mysqli_stmt_bind_param($stmt, "s", $hostname);
                        mysqli_stmt_execute($stmt);
                        mysqli_stmt_store_result($stmt);
                        $resultcheck = mysqli_stmt_num_rows($stmt); 
                        if($resultcheck == 0)
                        {
                            header("Location: tableadmin.php?error=invalidhost");
                            exit();
                        }
                        else
                        {
                                
                            if(empty($vulnerability) || empty($severity) || empty($system))
                            {
                                header("Location: tableadmin.php?error=emptyfields");
                                exit();
                            }
                            else
                            {
                                $query = "INSERT INTO register (vuln, status, vdate, senofk, synofk, inofk)
                                            VALUES (?,?,?,
                                            (SELECT seno FROM severity WHERE sedata=?),
                                            (SELECT syno FROM system WHERE sydata=?),
                                            (SELECT ino FROM hostname WHERE idata=?))";
                                $stmt = mysqli_stmt_init($connection);
                                if(!mysqli_stmt_prepare($stmt, $query))
                                {
                                    header("Location: tableadmin.php?error=sqlerror");
                                    exit();
                                }
                                else
                                {
                                    mysqli_stmt_bind_param($stmt, "ssssss", $vulnerability, $status, $date, $severity, $system, $hostname);
                                    mysqli_stmt_execute($stmt);

                                    $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
                                    "Status: Vulnerability Added".PHP_EOL.
                                    "Added By: ".$_SESSION['user'].$_SESSION['admin'].PHP_EOL.
                                    "-------------------------".PHP_EOL;
                                    //-
                                    file_put_contents('./logs/vulnerability_logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);

                                    header("Location: tableadmin.php?success=vulnerability.added");
                                    exit();
                                }
                            }

                        }
                    }
                }
            }
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);
}















if(isset($_POST['addvulnuser']))
{
    require 'dbc.php';

    date_default_timezone_set('Asia/Karachi');
    $date = date('Y/m/d H:i:s');
    $status = 1;
    $vulnerability = $_POST['vulnerability'];
    $severity = $_POST['severity'];
    $system = $_POST['system'];
    $hostname = $_POST['hostname'];

    
    $query = "SELECT * FROM severity WHERE sedata=?";
    $stmt = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($stmt, $query))
    {
        header("Location: table.php?error=sqlerror");
        exit();
    }
    else
    {
        mysqli_stmt_bind_param($stmt, "s", $severity);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultcheck = mysqli_stmt_num_rows($stmt); 
        if($resultcheck == 0)
        {
            header("Location: table.php?error=invalidseverity");
            exit();
        }
        else
        {
            $query = "SELECT * FROM system WHERE sydata=?";
            $stmt = mysqli_stmt_init($connection);
            if(!mysqli_stmt_prepare($stmt, $query))
            {
                header("Location: table.php?error=sqlerror");
                exit();
            }
            else
            {
                mysqli_stmt_bind_param($stmt, "s", $system);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $resultcheck = mysqli_stmt_num_rows($stmt); 
                if($resultcheck == 0)
                {
                    header("Location: table.php?error=invalidsystem");
                    exit();
                }
                else
                {
                    $query = "SELECT * FROM hostname WHERE idata=?";
                    $stmt = mysqli_stmt_init($connection);
                    if(!mysqli_stmt_prepare($stmt, $query))
                    {
                        header("Location: table.php?error=sqlerror");
                        exit();
                    }
                    else
                    {
                        mysqli_stmt_bind_param($stmt, "s", $hostname);
                        mysqli_stmt_execute($stmt);
                        mysqli_stmt_store_result($stmt);
                        $resultcheck = mysqli_stmt_num_rows($stmt); 
                        if($resultcheck == 0)
                        {
                            header("Location: table.php?error=invalidhost");
                            exit();
                        }
                        else
                        {
                                
                            if(empty($vulnerability) || empty($severity) || empty($system))
                            {
                                header("Location: table.php?error=emptyfields");
                                exit();
                            }
                            else
                            {
                                $query = "INSERT INTO register (vuln, status, vdate, senofk, synofk, inofk)
                                            VALUES (?,?,?,
                                            (SELECT seno FROM severity WHERE sedata=?),
                                            (SELECT syno FROM system WHERE sydata=?),
                                            (SELECT ino FROM hostname WHERE idata=?))";
                                $stmt = mysqli_stmt_init($connection);
                                if(!mysqli_stmt_prepare($stmt, $query))
                                {
                                    header("Location: table.php?error=sqlerror");
                                    exit();
                                }
                                else
                                {
                                    mysqli_stmt_bind_param($stmt, "ssssss", $vulnerability, $status, $date, $severity, $system, $hostname);
                                    mysqli_stmt_execute($stmt);

                                    $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
                                    "Status: Vulnerability Added".PHP_EOL.
                                    "Added By: ".$_SESSION['user'].$_SESSION['admin'].PHP_EOL.
                                    "-------------------------".PHP_EOL;
                                    //-
                                    file_put_contents('./logs/vulnerability_logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);

                                    header("Location: table.php?success=vulnerability.added");
                                    exit();
                                }
                            }

                        }
                    }
                }
            }
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);
}
















if(isset($_POST['chngstatusbtn']))
{
    require 'dbc.php';
    $id = $_POST['vuln_id'];
    $status = $_POST['status_id'];

    if($status==1)
    {
        $status=0;
        $query = "UPDATE register SET status=? WHERE rid=?";
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt, $query))
        {
            header("Location: tableadmin.php?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "ss", $status, $id);
            mysqli_stmt_execute($stmt);

            $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
            "Status: Vulnerability Status Changed".PHP_EOL.
            "Vulnerability: ".$id.PHP_EOL.
            "-------------------------".PHP_EOL;
            //-
            file_put_contents('./logs/vulnerability_logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);

            header("Location: tableadmin.php?success=status.changed");
            exit();
        }
    }
    else
    {
        $status=1;
        $query = "UPDATE register SET status=? WHERE rid=?";
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt, $query))
        {
            header("Location: tableadmin.php?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "ss", $status, $id);
            mysqli_stmt_execute($stmt);

            $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
            "Status: Vulnerability Status Changed".PHP_EOL.
            "Vulnerability: ".$id.PHP_EOL.
            "-------------------------".PHP_EOL;
            //-
            file_put_contents('./logs/vulnerability_logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);

            header("Location: tableadmin.php?success=status.changed");
            exit();
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);
}
















if(isset($_POST['chngstatusbtnuser']))
{
    require 'dbc.php';
    $id = $_POST['vuln_id'];
    $status = $_POST['status_id'];

    if($status==1)
    {
        $status=0;
        $query = "UPDATE register SET status=? WHERE rid=?";
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt, $query))
        {
            header("Location: table.php?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "ss", $status, $id);
            mysqli_stmt_execute($stmt);

            $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
            "Status: Vulnerability Status Changed".PHP_EOL.
            "Vulnerability: ".$id.PHP_EOL.
            "-------------------------".PHP_EOL;
            //-
            file_put_contents('./logs/vulnerability_logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);

            header("Location: table.php?success=status.changed");
            exit();
        }
    }
    else
    {
        $status=1;
        $query = "UPDATE register SET status=? WHERE rid=?";
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt, $query))
        {
            header("Location: table.php?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "ss", $status, $id);
            mysqli_stmt_execute($stmt);

            $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
            "Status: Vulnerability Status Changed".PHP_EOL.
            "Vulnerability: ".$id.PHP_EOL.
            "-------------------------".PHP_EOL;
            //-
            file_put_contents('./logs/vulnerability_logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);

            header("Location: table.php?success=status.changed");
            exit();
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);
}
















if(isset($_POST['savereport']))
{
    require 'dbc.php';

    date_default_timezone_set('Asia/Karachi');
    $prefix = "SECINC-";
    $premonth = date('M-');
    $reportdate = date('d/M/Y');

    $username = $_POST['username'];
    $email = $_POST['email'];
    $bunit = $_POST['bunit'];
    $country = $_POST['country'];
    $iname = $_POST['iname'];
    $originaldate = $_POST['idate'];
    $idate = date("d/M/Y", strtotime($originaldate));
    $severity = $_POST['severity'];
    $status = $_POST['status'];
    $idetails = $_POST['idetails'];
    $cause = $_POST['cause'];
    $implications = $_POST['implications'];
    $risk = $_POST['risk'];
    $mitigate = $_POST['mitigate'];
    $comment = $_POST['comment'];

    $query = "INSERT INTO reports 
    (prefix, premonth, cname, cemail, bunit, bcountry, iname, idate, ireportdate, iseverity, istatus, idetails, rootcause, implications, risks, mitigating, comments) 
    VALUES 
    (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($stmt, $query))
    {
        header("Location: addreportadmin.php?error=sqlerror");
        exit();
    }
    else
    {
        mysqli_stmt_bind_param($stmt, "sssssssssssssssss", $prefix, $premonth, $username, $email, $bunit, $country, $iname, $idate, $reportdate, $severity, $status, $idetails, $cause, $implications, $risk, $mitigate, $comment);
        mysqli_stmt_execute($stmt);

        $query = "UPDATE reports SET reno = concat( prefix, premonth, reid )";
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt, $query))
        {
            header("Location: addreportadmin.php?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_execute($stmt);

            $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
            "Status: Report Add Success".PHP_EOL.
            "-------------------------".PHP_EOL;
            //-
            file_put_contents('./logs/report_logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);

            header("Location: reportadmin.php?reportsuccess");
            exit();
        }

    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);

}
















if(isset($_POST['editedreport']))
{
    require 'dbc.php';

    date_default_timezone_set('Asia/Karachi');

    $id = $_POST['edit_id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $bunit = $_POST['bunit'];
    $country = $_POST['country'];
    $iname = $_POST['iname'];
    $originaldate = $_POST['idate'];
    $idate = date("d/M/Y", strtotime($originaldate));
    $severity = $_POST['severity'];
    $status = $_POST['status'];
    $idetails = $_POST['idetails'];
    $cause = $_POST['cause'];
    $implications = $_POST['implications'];
    $risk = $_POST['risk'];
    $mitigate = $_POST['mitigate'];
    $comment = $_POST['comment'];

    $query = "UPDATE reports SET 
    cname=?, cemail=?, bunit=?, bcountry=?, iname=?, idate=?, iseverity=?, istatus=?, idetails=?, rootcause=?, implications=?, risks=?, mitigating=?, comments=?
    WHERE reid=?";
    $stmt = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($stmt, $query))
    {
        header("Location: editreportadmin.php?error=sqlerror");
        exit();
    }
    else
    {
        mysqli_stmt_bind_param($stmt, "sssssssssssssss", $username, $email, $bunit, $country, $iname, $idate, $severity, $status, $idetails, $cause, $implications, $risk, $mitigate, $comment, $id);
        mysqli_stmt_execute($stmt);

        $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
        "Status: Report Edit Success".PHP_EOL.
        "Report Edited: ".$id.PHP_EOL.
        "-------------------------".PHP_EOL;
        //-
        file_put_contents('./logs/report_logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);

        header("Location: reportadmin.php?reportedit=success");
        exit();
    }

    

    mysqli_stmt_close($stmt);
    mysqli_close($connection);

}
















if(isset($_POST['editedreportuser']))
{
    require 'dbc.php';

    date_default_timezone_set('Asia/Karachi');

    $id = $_POST['edit_id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $bunit = $_POST['bunit'];
    $country = $_POST['country'];
    $iname = $_POST['iname'];
    $originaldate = $_POST['idate'];
    $idate = date("d/M/Y", strtotime($originaldate));
    $severity = $_POST['severity'];
    $status = $_POST['status'];
    $idetails = $_POST['idetails'];
    $cause = $_POST['cause'];
    $implications = $_POST['implications'];
    $risk = $_POST['risk'];
    $mitigate = $_POST['mitigate'];
    $comment = $_POST['comment'];

    $query = "UPDATE reports SET 
    cname=?, cemail=?, bunit=?, bcountry=?, iname=?, idate=?, iseverity=?, istatus=?, idetails=?, rootcause=?, implications=?, risks=?, mitigating=?, comments=?
    WHERE reid=?";
    $stmt = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($stmt, $query))
    {
        header("Location: editreport.php?error=sqlerror");
        exit();
    }
    else
    {
        mysqli_stmt_bind_param($stmt, "sssssssssssssss", $username, $email, $bunit, $country, $iname, $idate, $severity, $status, $idetails, $cause, $implications, $risk, $mitigate, $comment, $id);
        mysqli_stmt_execute($stmt);

        $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
        "Status: Report Edit Success".PHP_EOL.
        "Report Edited: ".$id.PHP_EOL.
        "-------------------------".PHP_EOL;
        //-
        file_put_contents('./logs/report_logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);

        header("Location: report.php?reportedit=success");
        exit();
    }

    

    mysqli_stmt_close($stmt);
    mysqli_close($connection);

}
















if(isset($_POST['deletereport']))
{
    require 'dbc.php';
    $id = $_POST['reportdelete_id'];
    $no = $_POST['reportno_id'];

    $query = "DELETE FROM reports WHERE reid=?";
    $stmt = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($stmt, $query))
    {
        header("Location: reportadmin.php?error=sqlerror");
        exit();
    }
    else
    {
        mysqli_stmt_bind_param($stmt, "s", $id);
        mysqli_stmt_execute($stmt);

        $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
        "Status: Delete Success".PHP_EOL.
        "Report Deleted: ".$no.PHP_EOL.
        "-------------------------".PHP_EOL;
        //-
        file_put_contents('./logs/report_logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);

        header("Location: reportadmin.php?success=report.deleted");
        exit();
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);
}
















if(isset($_POST['savereportuser']))
{
    require 'dbc.php';

    date_default_timezone_set('Asia/Karachi');
    $prefix = "SECINC-";
    $premonth = date('M-');
    $reportdate = date('d/M/Y');

    $username = $_POST['username'];
    $email = $_POST['email'];
    $bunit = $_POST['bunit'];
    $country = $_POST['country'];
    $iname = $_POST['iname'];
    $originaldate = $_POST['idate'];
    $idate = date("d/M/Y", strtotime($originaldate));
    $severity = $_POST['severity'];
    $status = $_POST['status'];
    $idetails = $_POST['idetails'];
    $cause = $_POST['cause'];
    $implications = $_POST['implications'];
    $risk = $_POST['risk'];
    $mitigate = $_POST['mitigate'];
    $comment = $_POST['comment'];

    $query = "INSERT INTO reports 
    (prefix, premonth, cname, cemail, bunit, bcountry, iname, idate, ireportdate, iseverity, istatus, idetails, rootcause, implications, risks, mitigating, comments) 
    VALUES 
    (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($stmt, $query))
    {
        header("Location: addreport.php?error=sqlerror");
        exit();
    }
    else
    {
        mysqli_stmt_bind_param($stmt, "sssssssssssssssss", $prefix, $premonth, $username, $email, $bunit, $country, $iname, $idate, $reportdate, $severity, $status, $idetails, $cause, $implications, $risk, $mitigate, $comment);
        mysqli_stmt_execute($stmt);

        $query = "UPDATE reports SET reno = concat( prefix, premonth, reid )";
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt, $query))
        {
            header("Location: addreport.php?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_execute($stmt);

            $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
            "Status: Report Add Success".PHP_EOL.
            "-------------------------".PHP_EOL;
            //-
            file_put_contents('./logs/report_logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);

            header("Location: report.php?reportsuccess");
            exit();
        }

    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);

}
















if(isset($_POST['deletereportuser']))
{
    require 'dbc.php';
    $id = $_POST['reportdelete_id'];
    $no = $_POST['reportno_id'];

    $query = "DELETE FROM reports WHERE reid=?";
    $stmt = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($stmt, $query))
    {
        header("Location: report.php?error=sqlerror");
        exit();
    }
    else
    {
        mysqli_stmt_bind_param($stmt, "s", $id);
        mysqli_stmt_execute($stmt);

        $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
        "Status: Delete Success".PHP_EOL.
        "Report Deleted: ".$no.PHP_EOL.
        "-------------------------".PHP_EOL;
        //-
        file_put_contents('./logs/report_logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);

        header("Location: report.php?success=report.deleted");
        exit();
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);
}
















if(isset($_POST['chngreportstatus']))
{
    require 'dbc.php';
    $id = $_POST['report_id'];
    $status = $_POST['status_id'];

    if($status==1)
    {
        $status=0;
        $query = "UPDATE reports SET istatus=? WHERE reid=?";
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt, $query))
        {
            header("Location: reportadmin.php?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "ss", $status, $id);
            mysqli_stmt_execute($stmt);

            $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
            "Status: Report Status Changed".PHP_EOL.
            "Report: ".$id.PHP_EOL.
            "-------------------------".PHP_EOL;
            //-
            file_put_contents('./logs/report_logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);

            header("Location: reportadmin.php?success=status.changed");
            exit();
        }
    }
    else
    {
        $status=1;
        $query = "UPDATE reports SET istatus=? WHERE reid=?";
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt, $query))
        {
            header("Location: reportadmin.php?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "ss", $status, $id);
            mysqli_stmt_execute($stmt);

            $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
            "Status: Report Status Changed".PHP_EOL.
            "Report: ".$id.PHP_EOL.
            "-------------------------".PHP_EOL;
            //-
            file_put_contents('./logs/report_logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);

            header("Location: reportadmin.php?success=status.changed");
            exit();
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);
}















if(isset($_POST['chngreportstatususer']))
{
    require 'dbc.php';
    $id = $_POST['report_id'];
    $status = $_POST['status_id'];

    if($status==1)
    {
        $status=0;
        $query = "UPDATE reports SET istatus=? WHERE reid=?";
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt, $query))
        {
            header("Location: report.php?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "ss", $status, $id);
            mysqli_stmt_execute($stmt);

            $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
            "Status: Report Status Changed".PHP_EOL.
            "Report: ".$id.PHP_EOL.
            "-------------------------".PHP_EOL;
            //-
            file_put_contents('./logs/report_logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);

            header("Location: report.php?success=status.changed");
            exit();
        }
    }
    else
    {
        $status=1;
        $query = "UPDATE reports SET istatus=? WHERE reid=?";
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt, $query))
        {
            header("Location: report.php?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "ss", $status, $id);
            mysqli_stmt_execute($stmt);

            $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
            "Status: Report Status Changed".PHP_EOL.
            "Report: ".$id.PHP_EOL.
            "-------------------------".PHP_EOL;
            //-
            file_put_contents('./logs/report_logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);

            header("Location: report.php?success=status.changed");
            exit();
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);
}



