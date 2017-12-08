
<?php

//$_SESSION["U_id"] = null;
//$con = $_SESSION["confirm"];


$ID = $_SESSION["U_id"];

if($ID == null){
    
    header("location:index.php");
    exit;
}





//$ID=$_COOKIE["U_id"];
//$ID = $_SESSION["U_id"];

$li = mysql_connect("localhost","root","");
      mysql_select_db("csebook",$li);

$query=mysql_query("select * from image where id='$ID'");
$row=mysql_fetch_object($query);


/*if($ID==null)
{
    header("location:index.php");
}*/


?>
<html>
<head>


</head>

<body>
<div style="height: 500px;width: 400px;background-color: #8C001A;float: left;text-align: center;">
<div style="height: 200px;width: 200px;">
<img src="<?php echo 'images/'.$row->name?>" style="width:400px;height:200px;"/>
</div>


<div style="height: 400px;margin-top: 2px;">
<b><li><a href="editprofile.php" style="color:lime;text-decoration:none;font-size: 30px;">Edit profile</a></li></b>
<b><li><a href="results.php" style="color:lime;text-decoration:none;font-size: 30px;">Results</a></li></b>
<b><li><a href="" style="color:lime;text-decoration:none;font-size: 30px;">More</a></li></b>
<b><li><a href="updateimage.php" style="color:lime;text-decoration:none;font-size: 30px;">Update Image</a></li></b>


<form action="" method="post">
<input type="submit"name="logout"value="logout"/>
</form>
<?php 
    if(isset($_POST['logout'])){
    //setcookie("U_id",null);
    //$ID=null;
    //echo $_POST['logout'];
    $_SESSION["U_id"] = null;
    header("location:index.php");
    exit;
}

?>
</div>


</div>

</html>