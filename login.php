<?php
    session_start();
?>


<html>
<head>
<title>Login</title>
</head>
<body>
<div style="width: 250px;height: 80px;float: right;text-align: end;">
<form action="login.php" method="post">
 User Id  :<input type="text" name="id" value=""/></br>
Password:<input type="password" name="pass" value=""/></br>
<input type="submit" name="login" value="Log In"/>
</form>
</div>
<?php


$li = mysql_connect("localhost","root","");
      mysql_select_db("csebook",$li);
if(isset($_POST['login']))
{
        $s_id=$_POST['id'];
      $password=$_POST['pass'];
      
      $ms_pass=mysql_query("SELECT  * FROM signin WHERE id=$s_id");
      $row=mysql_fetch_array($ms_pass);
      $xxx=$row[4];
      if($xxx== $password)
      {
        
        //setcookie("U_id","$s_id");
        $_SESSION["U_id"] = $s_id;
        //echo $_SESSION["U_id"];
        header("Location: timeline0.php");
        exit;
        
      }
      else
      {
        ?>
         <script>
         alert("Sorry Wrong id or password");
         </script>
         <?php
      }
    
   
     // mysql_query("Insert into signin(username,id,g_year,email,password) values('$name','$s_id','$G_year','$email','$password')");
    
}
?>
</body>
</html>