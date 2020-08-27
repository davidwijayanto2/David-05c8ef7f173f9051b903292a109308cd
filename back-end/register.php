<?php
    session_start();
	require "config.php";
	if(!isset($_POST["txtusername"],$_POST["txtpassword"],$_POST["txtrepeatpassword"])){
        header("location:../front-end/login.php");
        exit;
    }
    date_default_timezone_set($SiteConfig["site"]["timezone"]);
    $address = $SiteConfig["db"]["address"];
    $user = $SiteConfig["db"]["user"];
    $pass = $SiteConfig["db"]["pass"];
    $dbname = $SiteConfig["db"]["name"];
    $mysqli = new mysqli($address,$user,$pass,$dbname);

    if($_POST["txtpassword"] == $_POST["txtrepeatpassword"]) {
        $password = md5($mysqli->real_escape_string($_POST["txtpassword"]));
    }else{        
        header("location:../front-end/login.php");
    }
    $username = $mysqli->real_escape_string($_POST["txtusername"]);        
    $sel = "SELECT * FROM user WHERE username = '$username'" ;
    $result = $mysqli->query($sel);
    $row = $result->fetch_row();
    $num_rows=count($row);
    
    if($num_rows>0){
        header("location:../front-end/login.php?kembar");
        exit;        
    }
    $qry = "INSERT INTO user VALUES('$username','$password')";
                                    
    if($mysqli->query($qry)){
        $qry2 = "INSERT INTO session_login(username,statuslogin,created_at) VALUES('$username',1,now());";
        if($mysqli->query($qry2)){
            $_SESSION['username'] = $username;
            $_SESSION['time']= date_format(date_create(),'Y-m-d H:i:s');    
            header("location:../front-end/index.php");
            exit;
        }        
    }    

?>