<?php
session_start();
libxml_disable_entity_loader(true);

require 'dbc.php';


if(isset($_SESSION['user']))
{
    $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            
    if(strpos($fullurl, "adminprof") == true)
    {
        header("Location: index.php");
    }
    else if(strpos($fullurl, "editadmin") == true)
    {
        header("Location: index.php");
    }
    else if(strpos($fullurl, "edituser") == true)
    {
        header("Location: index.php");
    }
    else if(strpos($fullurl, "indexadmin") == true)
    {
        header("Location: index.php");
    }
    else if(strpos($fullurl, "tableadmin") == true)
    {
        header("Location: index.php");
    }
    else if(strpos($fullurl, "userprof") == true)
    {
        header("Location: index.php");
    }
    else if(strpos($fullurl, "editdb") == true)
    {
        header("Location: index.php");
    }
    else if(strpos($fullurl, "reportadmin") == true)
    {
        header("Location: index.php");
    }
    else if(strpos($fullurl, "addreportadmin") == true)
    {
        header("Location: index.php");
    }
    else if(strpos($fullurl, "editreportadmin") == true)
    {
        header("Location: index.php");
    }


    else if(strpos($fullurl, "css") == true)
    {
        header("Location: index.php");
    }
    else if(strpos($fullurl, "js") == true)
    {
        header("Location: index.php");
    }
    else if(strpos($fullurl, "vendor") == true)
    {
        header("Location: index.php");
    }
}
else if(isset($_SESSION['admin']))
{
    $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            
    if(strpos($fullurl, "index.php") == true)
    {
        header("Location: indexadmin.php");
    }
    else if(strpos($fullurl, "table.php") == true)
    {
        header("Location: indexadmin.php");
    }
    else if(strpos($fullurl, "report.php") == true)
    {
        header("Location: indexadmin.php");
    }
    else if(strpos($fullurl, "addreport.php") == true)
    {
        header("Location: indexadmin.php");
    }
    else if(strpos($fullurl, "editreport.php") == true)
    {
        header("Location: indexadmin.php");
    }


    else if(strpos($fullurl, "css") == true)
    {
        header("Location: indexadmin.php");
    }
    else if(strpos($fullurl, "js") == true)
    {
        header("Location: indexadmin.php");
    }
    else if(strpos($fullurl, "vendor") == true)
    {
        header("Location: indexadmin.php");
    }
}
else
{
    header("Location: login.php");
}