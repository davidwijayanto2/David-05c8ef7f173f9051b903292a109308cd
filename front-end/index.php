<?php
    session_start();  
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include ("import.php"); ?>
<title>Home</title>
</head>
<body>
	<div id="realtime">
	</div>
	<button class="btn btn-primary" type="button" id="btnhello">Hello</button>
	<button class="btn btn-primary" type="button" id="btnlogout">Logout</button>
</body>
</html>
<script type="text/javascript" language="javascript">
	initializeClock("realtime");
	
    document.getElementById("btnhello").onclick= function(){
    	checklogin();
    }

    function initializeClock(id) {
        var clock = document.getElementById(id);                
        
        function updateClock() {            
        	var date = new Date();
        	var hours = date.getHours().toString().length==2?date.getHours():"0"+date.getHours();
        	var minutes = date.getMinutes().toString().length==2?date.getMinutes():"0"+date.getMinutes();
        	var seconds = date.getSeconds().toString().length==2?date.getSeconds():"0"+date.getSeconds();
            clock.innerHTML = hours+":"+minutes+":"+seconds;
                        
        }               
        var timeinterval = setInterval(updateClock, 1000);
    }
    function checklogin(){
    	var flag = '<?php if(isset($_SESSION['username'])){echo true;}else{echo false;} ?>';    	
    	if(flag=='false'){
    		window.location.href = "login.php";
    	} else {
    		var username = '<?php if(isset($_SESSION['username'])){echo $_SESSION['username'];}?>';
    		var time = '<?php if(isset($_SESSION['username'])){echo $_SESSION['time'];} ?>';
    		alert("Hai "+username+", waktu login anda "+time);
    	}
    }
</script>