<?php 
    session_start();
?>
<?php
$ID = $_SESSION["U_id"];

if($ID == null){
    
    header("location:index.php");
    exit;
}
?>



<html>
<head>
<head>
		<title>Home</title>
		<style type="text/css">
        
        form {
  background: -webkit-linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
  background: -moz-linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
  background: linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
  margin: auto;
  margin-top: 40px;
  position: relative;
  width: 550px;
  height: 1310px;
  font-family: Tahoma, Geneva, sans-serif;
  font-size: 14px;
  font-style: italic;
  line-height: 24px;
  font-weight: bold;
  color: #09C;
  text-decoration: none;
  border-radius: 10px;
  padding: 10px;
  border: 1px solid #999;
  border: inset 1px solid #333;
  -webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}
input {
  width: 275px;
  display: block;
  border: 1px solid #999;
  height: 25px;
  -webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}

textarea#feedback {
  width: 375px;
  height: 150px;
}

textarea#feedback {
  width: 375px;
  height: 150px;
  display: block;
}

button {
  width: 100px;
  position: absolute;
  right: 20px;
  bottom: 20px;
  background: #09C;
  color: #fff;
  font-family: Tahoma, Geneva, sans-serif;
  height: 30px;
  border-radius: 15px;
  border: 1p solid #999;
}

input.button:hover {
  background: #fff;
  color: #09C;
}

textarea:focus, input:focus {
  border: 1px solid #09C;
}
        </style>
	</head>
</head>
<body>





<?php

//$ID=$_COOKIE["U_id"];
$li = mysql_connect("localhost","root","");
      mysql_select_db("csebook",$li);
if(isset($_POST['submit']))
{
    
    
    $Uname=$_POST['username'];
      $Uid=$_POST['id'];
      $Gyear=(int)$_POST['g_year'];
      $Uemil=$_POST['email'];
      $Fname=$_POST['fathername'];
      $Mname=$_POST['mothername'];
      $Padress=$_POST['p_adress'];
      $Dbrth=$_POST['d_birth'];
      $Uphone=$_POST['p_number'];
      $Pphone=$_POST['P_number'];
      $Ublood=$_POST['b_group'];
      
      
      $Uyear=$_POST['year'];
      $Usscp=$_POST['sscp'];
      $Uhscp=$_POST['hscp'];
      $Usscr=(double)$_POST['sscr'];
      $Uhscr=(double)$_POST['hscr'];
      
      
     // echo $Fname;
     //mysql_query("update signin set blood = '$Ublood' where id = '$Uid'");
      
     mysql_query("UPDATE signin SET username='$Uname',g_year='$Gyear',email='$Uemil',fathername='$Fname',mothername='$Mname',p_adress='$Padress',
     dateofbirth='$Dbrth',phone='$Uphone',p_phone='$Pphone',blood='$Ublood',year='$Uyear',sscpass='$Usscp',hscpass='$Uhscp',sscresult='$Usscr',hscresult='$Uhscr' WHERE id='$ID'");
      
         {
          header("location:timeline0.php");
         }
}

?>







<?php


{
    
//echo "$ID";
$li = mysql_connect("localhost","root","");
      mysql_select_db("csebook",$li);
      
      $all=mysql_query("SELECT  * FROM signin WHERE id=$ID");
      $row=mysql_fetch_array($all);
      
      $uname=$row[0];
      $uid=$row[1];
      $gryear=$row[2];
      $uemil=$row[3];
      //$upass=$row[4];
      $fname=$row[5];
      $mname=$row[6];
      $padress=$row[7];
      $dbrth=$row[8];
      $uphone=$row[9];
      $pphone=$row[10];
      $ublood=$row[11];
      
      $year=$row[12];
        $sscp=$row[13];
          $hscp=$row[14];
            $sscr=$row[15];
              $hscr=$row[16];
      
      $gyear=intval($gryear);
      
      
      
 }     
      
?>




<form action="finaleditprofile.php" method="post">
  <div>
    <h1>Edit profile </h1>
    <label>
      <span>User Name</span><input type="text" name="username" value=<?php echo "{$uname}"?>/></br>
    </label>
    
    <label>
      <span>Student Id</span><input type="text" name="id" value=<?php echo "{$uid}"?>/></br>
    </label>
    
    <label>
      <span>Graduation Year</span><input type="text" name="g_year" value=<?php echo"$gyear"?>/></br>
    </label>
    

    <label>
      <span>Email Address</span><input type="text" name="email" value=<?php echo"$uemil"?>/></br>
    </label>

<label>
      <span>Father Name</span><input type="text" name="fathername" value=<?php echo"$fname"?>/></br>
    </label>
    <label>
      <span>Mother Name</span><input type="text" name="mothername" value=<?php echo"$mname"?>/></br>
    </label>
    <label>
      <span>Home Town</span><input type="text" name="p_adress" value=<?php echo"$padress"?>/></br>
    </label>
    <label>
      <span>Date of Birth</span><input type="text" name="d_birth" value=<?php echo"$dbrth"?>/></br>
    </label>
    <label>
      <span>Phone Number</span><input type="text" name="p_number" value=<?php echo"$uphone"?>/></br>
    </label>
    <label>
      <span>Parents Number</span><input type="text" name="P_number" value=<?php echo"$pphone"?>/></br>
    </label>
    <label>
      <span>Blood Group</span><input type="text" name="b_group" value=<?php echo" $ublood"?>/></br>
    </label>
    <label>
      <span>Year</span><input type="text" name="year" value=<?php echo"$year"?>/></br>
    </label>
    <label>
      <span>SSC Passing Year</span><input type="text" name="sscp" value=<?php echo"$sscp"?>/></br>
    </label>
    <label>
      <span>HSC Passing Year</span><input type="text" name="hscp" value=<?php echo"$hscp"?>/></br>
    </label>
    <label>
      <span>SSC Result</span><input type="text" name="sscr" value=<?php echo"$sscr"?>/></br>
    </label>
    <label>
      <span>HSC Reault</span><input type="text" name="hscr" value=<?php echo"$hscr"?>/></br>
    </label>
    <label>
      <input type="submit" value="Submit Form"name="submit" />
    </label>

  </div>
</form>
</body>
</html>
