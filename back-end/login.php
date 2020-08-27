<?php
	session_start();
	require "config.php";
	if(!isset($_POST["txtusername"],$_POST["txtpassword"])){
        header("location:../front-end/login.php");
        exit;
    }
    date_default_timezone_set($SiteConfig["site"]["timezone"]);
    $address = $SiteConfig["db"]["address"];
    $user = $SiteConfig["db"]["user"];
    $pass = $SiteConfig["db"]["pass"];
    $dbname = $SiteConfig["db"]["name"];
    $mysqli = new mysqli($address,$user,$pass,$dbname);

	$username = $mysqli->real_escape_string($_POST["txtusername"]);        
	$password = md5($mysqli->real_escape_string($_POST["txtpassword"]));
    $sel = "SELECT * FROM user WHERE username = '$username' AND password='$password'" ;
    $result = $mysqli->query($sel);
    $row = $result->fetch_row();
    $num_rows=count($row);
    
    if($num_rows>0){    	
        $qry = "INSERT INTO session_login(username,statuslogin,created_at) VALUES('$username',1,now());";
    	if($mysqli->query($qry)){
    		$_SESSION['username'] = $username;
	        $_SESSION['time']= date_format(date_create(),'Y-m-d H:i:s');    
	        header("location:../front-end/index.php");
	        exit;
    	}

    } else {
    	header('location:../front-end/login.php');
    	exit;
    }
?>