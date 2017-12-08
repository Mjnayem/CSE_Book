<?php 
    session_start();
?>
<html>
<head>
	<title>Timeline</title>
</head>

<body>

<?php

//$ID=$_COOKIE["U_id"];
$ID = $_SESSION["U_id"];

//echo "$ID";

/*if($ID==null)
{
    header("location:index.php");
}*/
if($_SESSION["U_id"] == null){
    header("location:index.php");
    exit;
}


?>
<div style="height: 700px;width: 900px; background-color: greenyellow;margin: 0 auto;">
<?php include("header.php");?>
<div style="height: 500px;width: 900px;">
<?php include("profile.php");?>
<?php include("comon.php");?>

</div>

</div>


</body>
</html>