<html>
	<head>
		<title>Conferm</title>
		<link href="style.css" type="text/css" rel="stylesheet"/>
	</head>
	<body>
    <script>
    alert("Congratulation your id is created .");
    </script>
		<div class="main">
			<!--<div class="banner">
				<img src="1781763_662075757185153_1825342558_o.jpg" style="height: 20px;width: 800px;"/>
			</div>-->
			<div class="mainmenu">
				<ul>
					<b><li><a href="indextmp.php">Home</a></li></b>
					<b><li><a href="">About CSE</a>
                    
                    <ul>
                    	<li><a href="">Programming Club</a></li><br />
					<li><a href="signin1.php">Networl & Web Club</a></li><br />
					<li><a href="login1.php">Mecatonic Club</a></li><br />
                    	<li><a href="">Sports & Caltural</a></li><br />
					<li><a href="signin1.php">Softwear Club</a></li><br />
					<li><a href="login1.php">CSE Associon</a></li>
                      </ul>
                    </li></b>
                    
					<b><li><a href="">Info</a>
                    <ul>
                      <li><a href="signin1.php">Students Info</a></li><br />
					   <li><a href="login1.php">Teachers Info</a></li>
                       
                    </ul>
                    </li></b>
					<b><li><a href="signin1.php">Sign Up</a></li></b>
					<b><li><a href="login1.php">Log In</a></li></b>
				</ul>
			</div>
			<div class="player">
				<div class="audio">
				
				<?php
                 include("sliteshow1.php");
                ?>
				</div>
				<div class="video">
				
				<video width="450" height="300" controls>
				<source src="Documentary_CSE.mp4" type="video/mp4"></video>
				</div>
			</div>
			<div class="maincontent">
				<div class="content">
					<h2>CSE BOOK</h2>
					<p>CSE BOOK is an information based site.Every one can get general info on Dept. of CSE BSMRSTU from this site.Thank you..</p>
					<h2>Educational Sites</h2>
					<ul>
					<li><b><a href="">Tutorials Point</b></a></li>
					<li><b><a href="">UVA</b></a></li>
					<li><b><a href="">Codedorces</b></a></li>
					<li><b><a href="">Youtube</b></a></li>
					</ul>
				</div>
				<div class="UpcomingEvent">
				<h2>Upcoming Event</h2>
				<ul>
                
                <?php
                
                $li = mysql_connect("localhost","root","");
      mysql_select_db("csebook",$li);
      
      $ms_pass=mysql_query("SELECT  * FROM more ");
      $row=mysql_fetch_array($ms_pass);
      $upevent=$row[0];
      $pastevent=$row[1];
      
      
      
      
                
                ?>
                
                
                
                
					<b><li><marquee behavior="scroll" direction="left" width="300" scrollamount="2"><?php echo "$upevent"?></marquee></li></b>
					
                    <h2>Recent Past events</h2>
                    <b><li><marquee behavior="scroll" direction="left" width="300" scrollamount="2"><?php echo "$pastevent"?></marquee></li></b>
                    
                    
				</ul>
				</div>
			</div>
			<div class="footer">
			<center><p><h3>All Rights Reserved & copy @Mj Nayem </h3></p></center>
			</div>
		</div>
	</body>
</html>