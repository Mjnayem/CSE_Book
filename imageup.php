
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
                    
                             <li><a href="editprofilelasr.php">Edit Profile</a></li>
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
			<div class="player">
				<div class="audio">
			
            <?php


$li = mysql_connect("localhost","root","");
      mysql_select_db("csebook",$li);
      if(isset($_POST['save']))
      {
        $image_name=$_FILES['file']['name'];
         $image_type=$_FILES['file']['type'];
         $image_size=$_FILES['file']['size'];
         
         if($image_type=='image/jpeg'||$image_type=='image/gif'||$image_type=='image/png'||$image_type=='image/jpg'||$image_type=='image/JPG'||$image_type=='image/JPEG')
         {
            
            
            
            
            
             $query2=mysql_query("select * from image WHERE id='$ID'");
            
            
            
            
            
            
            $uploadfile=move_uploaded_file($_FILES['file']['tmp_name'],'images/'.$_FILES['file']['name']);
            
            
                
                 $query=mysql_query("UPDATE  image SET name='$image_name',type='$image_type',size='$image_size' WHERE id='$ID'");
            if($uploadfile&&$query)
            {
                echo "Image upload complete";
                header("location:timeline0.php");
             }
            else if(!$uploadfile)
            {
                echo "image not uploaded";
            }
            else if(!$query)
            {
                echo "Image not saved";
            }
            else
         echo "Invalit File Type";
              
         
      }
      
                
                
            }
            
           
      
      else if(isset($_POST['delete'])){
        mysql_query("UPDATE  image SET name='no',type='no',size='0' WHERE id='$ID'");
        
         header("location:timeline0.php");
      }
?>




<form action="imageup.php" method="post" enctype="multipart/form-data">
<input type="file" name="file"/><br /><br />
<input type="submit" value="Update pic" name="save"/><br /><br /><br />

<input type="submit"name="delete"value="delete Image"/>
</form>
</div>
				<div class="video">
				<video width="400" height="250" controls>
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