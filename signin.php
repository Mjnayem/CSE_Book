<html>
<head>
<head>
		<title>Home</title>
		<link href="stylesignin.css" type="text/css" rel="stylesheet"/>
	</head>
</head>
<body>
<form action="signin.php" method="post">
  <div>
    <h1>Create Account </h1>
    <label>
      <span>User Name</span><input id="name" type="text" name="username" />
    </label>
    
    <label>
      <span>Student Id</span><input id="stdid" type="text" name="id" />
    </label>
    
    <label>
      <span>Graduation Year</span><input id="name" type="text" name="g_year" />
    </label>
    

    <label>
      <span>Email Address</span><input id="email" type="text" name="email" />
    </label>

    <label>
      <span>Password</span><input id="subject" type="password" name="pass" />
    </label>

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
   $name=$_POST['username'];
   $email=$_POST['email'];
      $password=$_POST['pass']; 
      $G_year=$_POST['g_year'];
      $s_id=$_POST['id'];
      mysql_query("Insert into signin(username,id,g_year,email,password) values('$name','$s_id','$G_year','$email','$password')");
        mysql_query("Insert into image(name,id,type,size) values('$name','$s_id','$G_year','$password')");
        mysql_query("Insert into results(id) values('$s_id')");
        mysql_query("Insert into image(id,name,type,size) values('$s_id','nayem','type','10')");
        
             {
            
          header("location:conferm.php");
         }
}
?>

</body>
</html>
