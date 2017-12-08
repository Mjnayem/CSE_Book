<?php 
    session_start();
?>

<html>
<head>
<head>
		<title>Home</title>
		<link href="studentinfosearch.css" type="text/css" rel="stylesheet"/>
	</head>
</head>
<body>
<form action="studentinfosearch.php" method="post">
  <div>
    <h1>Search Individual </h1>
    <label>
      <span>Inter Id</span><input id="name" type="text" name="id" />
    </label>

    <label>
      <input type="submit" value="Search"name="search" />
    </label>
    
    <h1>Search Yearly </h1>
    
    <label>
      <input type="submit" value="1st Year"name="year1" />
    </label>
    <label>
      <input type="submit" value="2nd Year"name="year2" />
    </label>
    <label>
      <input type="submit" value="3rd Year"name="year3" />
    </label>
    <label>
      <input type="submit" value="4th Year"name="year4" />
    </label>
    <label>
      <input type="submit" value="Graduate"name="year5" />
    </label>

  </div>
  
  
  
  
  <?php
  
  if(isset($_POST['search']))
  {
    
    $IDS=$_POST['id'];
    $_SESSION["serid"]=$IDS;
    header("location:singleinfo.php");
  }
  
  
   if(isset($_POST['year1']))
  {
    
    header("location:firstinfo.php");
  }
  
   if(isset($_POST['year2']))
  {
    
   ;
    header("location:secondinfo.php");
  }
   if(isset($_POST['year3']))
  {
    
  
    header("location:thirdinfo.php");
  }
   if(isset($_POST['year4']))
  {
    
   
    header("location:fourthinfo.php");
  }
   if(isset($_POST['year5']))
  {
    
  
    header("location:fifthinfo.php");
  }
  
  
  
  ?>
  
  
  
  
  
  
  
  
  
</form>