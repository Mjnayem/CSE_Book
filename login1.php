<html>
	<head>
		<title>Home</title>
		<link href="style.css" type="text/css" rel="stylesheet"/>
	</head>
	<body>
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

                    <?php include("login.php");?>
				</ul>
			</div>
			<div class="player">
				<div class="audio">
				<?php
                 include("sliteshow1.php");
                ?>
				</div>
				<div class="video">
				<video width="400" height="250" controls>
				<source src="Documentary_CSE.mp4" type="video/mp4"></video>
				</div>
			</div>
			<div class="maincontent">
				<div class="content">
					<h2>RADIO MASTI</h2>
					<p>Radio Mastio is a online Radio Station in bangladesh. willing to provide a self service confident among the people to build their carrer strongly and make their life successful. We all are expecting yours wish. Thank you..</p>
					<h2>Masti RJ's</h2>
					<ul>
					<li><b><a href="">RJ Azmani</b></a></li>
					<li><b><a href="">RJ Utsho</b></a></li>
					<li><b><a href="">RJ Ashik Tomal</b></a></li>
					<li><b><a href="">RJ Anne</b></a></li>
					</ul>
				</div>
				<div class="UpcomingEvent">
				<h2>Upcoming Program</h2>
				<ul>
					<h3>MORNING</h3>
					<b><li><marquee behavior="scroll" direction="left" width="300" scrollamount="2">NO program will be on air.</marquee></li></b>
					<h3>EVENING</h3>
					<b><li><marquee behavior="scroll" direction="left" width="300"scrollamount="2"> NO Program will be On air</marquee></li></b>
					<h3>NIGHT</h3>
					<b><li><marquee behavior="scroll" direction="left" width="300"scrollamount="2"> NO Program will be On air</marquee></li></b>
					<h3>SPECIAL EPISOD</h3>
					<b><li><marquee behavior="scroll" direction="left" width="300"scrollamount="2"> NO Program will be On air</marquee></li></b>
				</ul>
				</div>
			</div>
			<div class="footer">
			<center><p><h3>All Rights Reserved &copy MasterMind Media (Private) Ltd 2014</h3></p></center>
			</div>
		</div>
	</body>
</html>