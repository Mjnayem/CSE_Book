


<html>
	<head>
		<title>Home</title>
		<link href="timelinedrop.css" type="text/css" rel="stylesheet"/>
	</head>
	<body>
		<div class="main">
			<!--<div class="banner">
				<img src="1781763_662075757185153_1825342558_o.jpg" style="height: 20px;width: 800px;"/>
			</div>-->
			<div class="mainmenu">
				<ul>
					<li><a href="timeline0.php">Home</a></li>
					<li><a href="">About CSE</a></li>
					<li><a href="">Info</a>
                       <ul>
                            <li><a href="studentinfo.php">Student Info</a></li><br />
					        <li><a href="">Teacher Info</a></li><br />
                       </ul>
                    </li>
		 	        <li><a href="">Sign Up</a></li>
                    <li><a href="">Edit</a>
                    
                          <ul>
                    
                             <li><a href="">Edit Profile</a></li>
				          	 <li><a href="signin1.php">Update Image</a></li>
                             <li><a href="signin1.php">Edit Results</a></li>
                          </ul>
                    </li>
                    
                    <li><a href="signin1.php">Educational Links</a></li>
                    <li><a href="">More</a>
                    
                             <ul>
                             <li><a href="My Results">See Results</a></li>
                             </ul>
                    
                    
                    </li>
                
				</ul>
			</div>
			<div class="maincontent">
				
                
               <?php 
    session_start();
?>
<?php
$ID = $_SESSION["U_id"];

if($ID == null){
    
    header("location:indextmp.php");
    exit;
}
?>



<html>
<head>
<head>
		<title>Edit Result</title>
		<style type="text/css">
        
        form {
  background: -webkit-linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
  background: -moz-linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
  background: linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
  margin: auto;
  margin-top: 30px;
  position: relative;
  width: 550px;
  height: 750px;
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
//echo "$ID";
$li = mysql_connect("localhost","root","");
      mysql_select_db("csebook",$li);
      
      $all=mysql_query("SELECT  * FROM results WHERE id=$ID");
      $row=mysql_fetch_array($all);
      
      //$uname=$row[0];
      $R1=$row[1];
      $R2=$row[2];
      $R3=$row[3];
      $R4=$row[4];
      $R5=$row[5];
      $R6=$row[6];
      $R7=$row[7];
      $R8=$row[8];
      
?>





<form action="editresult01.php" method="post">
  <div>
    <h1>Edit Result </h1>
    <label>
      <span>First Semester</span><input type="text" name="r1" value=""placeholder=<?php echo "{$R1}"?>/></br>
    </label>
    
    <label>
      <span>Second Semester</span><input type="text" name="r2" value=""placeholder=<?php echo "{$R2}"?>/></br>
    </label>
    
    <label>
      <span>Third Semester</span><input type="text" name="r3" value=""placeholder=<?php echo "{$R3}"?>/></br>
    </label>
    

    <label>
      <span>Fourth Semester</span><input type="text" name="r4" value=""placeholder=<?php echo "{$R4}"?>/></br>
    </label>
    <label>
      <span>Fifth Semester</span><input type="text" name="r5" value=""placeholder=<?php echo "{$R5}"?>/></br>
    </label>
    <label>
      <span>Sixth Semester</span><input type="text" name="r6" value=""placeholder=<?php echo "{$R6}"?>/></br>
    </label>
    <label>
      <span>Seventh Semester</span><input type="text" name="r7" value=""placeholder=<?php echo "{$R7}"?>/></br>
    </label>
    <label>
      <span>Eighth Semester</span><input type="text" name="r8" value=""placeholder=<?php echo "{$R8}"?>/></br>
    </label>

<label>
     
    <label>
      <input type="submit" value="Submit Form"name="submit" />
    </label>

  </div>
</form>
<?php
$li = mysql_connect("localhost","root","");
      mysql_select_db("csebook",$li);
if(isset($_POST['submit']))
{
    
    
      $re_1=$_POST['r1'];
      $re_2=$_POST['r2'];
      $re_3=$_POST['r3'];
      $re_4=$_POST['r4'];
      $re_5=$_POST['r5'];
      $re_6=$_POST['r6'];
      $re_7=$_POST['r7'];
      $re_8=$_POST['r8'];
      
      
      $r_1=doubleval($re_1);
       $r_2=doubleval($re_2);
        $r_3=doubleval($re_3);
         $r_4=doubleval($re_4);
          $r_5=doubleval($re_5);
           $r_6=doubleval($re_6);
            $r_7=doubleval($re_7);
             $r_8=doubleval($re_8);
            
      
     //mysql_query("update signin set blood = '$Ublood' where id = '$Uid'");
      
      mysql_query("UPDATE results SET firsth='$r_1',secondth='$r_2',thirdth='$r_3',fourth='$r_4',fifth='$r_5',sixth='$r_6',seventh='$r_7',eighth='$r_8' WHERE id='$ID'");
      
         {
          header("location:timeline0.php");
         }
}

?>
                
                
                
                
                
			<div class="footer">
			<center><p><h3>All Rights Reserved & copy @Mj Nayem </h3></p></center>
			</div>
		</div>
	</body>
</html>

