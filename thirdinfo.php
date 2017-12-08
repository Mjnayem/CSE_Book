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
		<title>Home</title>
		<link href="songleinfo.css" type="text/css" rel="stylesheet"/>
	</head>
	<body>
		<div class="main">
			<div class="mainmenu">
				<ul>
					<li><a href="indextmp.php">Home</a></li>
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
            
            <?php

?>



<h1 style="text-align: center;color: #0000A0;">All first year students info</h1>

<div align="center">
<table border="2" >
<tr>
<th>Name</th>
<th>Id</th>
<th>G_Year</th>
<th>Email</th>
<th>Father</th>
<th>Mother</th>
<th>Home Town</th>
<th>Date of Birth</th>
<th>Id Phone</th>
<th>Parents Phone</th>
<th>Blood Group</th>

<th>Year</th>
<th>SSC Pass</th>
<th>HSC Pass</th>
<th>SSC Result</th>
<th>HSC Result</th>

</tr>


<?php
     
    $li = mysql_connect("localhost","root","");
      mysql_select_db("csebook",$li);
      $run=mysql_query("select * from signin where year='3rd'");
      while($row=mysql_fetch_array($run))
     {
        $r0=$row[0];
        $r1=$row[1];
        $r2=$row[2];
        $r3=$row[3];
        $r5=$row[5];
        $r6=$row[6];
        $r7=$row[7];
        $r8=$row[8];
        $r9=$row[9];
        $r10=$row[10];
        $r11=$row[11];
        
       
        $year=$row[12];
        $sscp=$row[13];
          $hscp=$row[14];
            $sscr=$row[15];
              $hscr=$row[16];
              
              
              
        echo"<tr >
        <td>$r0</td>
        <td>$r1</td>
        <td>$r2</td>
        <td>$r3</td>
        
        <td>$r5</td>
        <td>$r6</td>
        <td>$r7</td>
        <td>$r8</td>
        <td>$r9</td>
        <td>$r10</td>
        <td>$r11</td>
        
        
        <td>$year</td>
        <td>$sscp</td>
        <td>$hscp</td>
        <td>$sscr</td>
        <td>$hscr</td>
        
       
        </tr>";
              
        
        }
       
        ?>
        
        </table> 
        </div>

			<div class="footer">
			<center><p><h3>All Rights Reserved &copy MasterMind Media (Private) Ltd 2014</h3></p></center>
			</div>
		</div>
	</body>
</html>