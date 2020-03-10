<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard | Pasien Baru</title>
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <!-- Add custom CSS here -->
    <link href="../css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <style>
    	/* Center the loader */
	/*#loader {
	position: absolute;
	left: 50%;
	top: 50%;
	z-index: 1;
	width: 150px;
	height: 150px;
	margin: -75px 0 0 -75px;
	border: 16px solid #f3f3f3;
	border-radius: 50%;
	border-top: 16px solid #3498db;
	width: 120px;
	height: 120px;
	-webkit-animation: spin 0.5s linear infinite;
	animation: spin 0.5s linear infinite;
	}
	@-webkit-keyframes spin {
	0% { -webkit-transform: rotate(0deg); }
	100% { -webkit-transform: rotate(360deg); }
	}
	@keyframes spin {
	0% { transform: rotate(0deg); }
	100% { transform: rotate(360deg); }
	}

	/* Add animation to "page content" */
	.animate-bottom {
	position: relative;
	-webkit-animation-name: animatebottom;
	-webkit-animation-duration: 1s;
	animation-name: animatebottom;
	animation-duration: 1s
	}
	@-webkit-keyframes animatebottom {
	from { bottom:-100px; opacity:0 }
	to { bottom:0px; opacity:1 }
	}
	@keyframes animatebottom {
	from{ bottom:-100px; opacity:0 }
	to{ bottom:0; opacity:1 }
	}
	#myDiv {
	display: none;
	}*/
    </style>
    <style>
	.bluetext {
	color: #008cba;
	}
    .navbar-rachmi{
        background-color:#e67e22;
        border-color:#d35400
    }
    .navbar-brand{
        color:#ffffff;
    }

</style>
    <script>
	function showResult(str) {
	  if (str.length==0) {
	    document.getElementById("livesearch").innerHTML="";
	    document.getElementById("livesearch").style.border="0px";
	    return;
	  }
	  if (window.XMLHttpRequest) {
	    // code for IE7+, Firefox, Chrome, Opera, Safari
	    xmlhttp=new XMLHttpRequest();
	  } else {  // code for IE6, IE5
	    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
	    if (this.readyState==4 && this.status==200) {
	      document.getElementById("livesearch").innerHTML=this.responseText;
	      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
	    }
	  }
	  xmlhttp.open("GET","livesearch.php?q="+str,true);
	  xmlhttp.send();
	}
	</script>
  </head>
  <!-- Loading Page -->
<!--<body onload="myFunction()" style="margin:0;">
<div id="loader"></div>
<div style="display:none;" id="myDiv" class="animate-bottom"><br><br>-->
	<body>
