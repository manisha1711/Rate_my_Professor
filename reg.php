<?php
    session_start();
    mysql_connect('localhost','root','');
	mysql_select_db('rating');
	$msg=NULL;
	if( isset($_REQUEST['sub']))
	{
		$name=$_REQUEST['name'];
		$roll=$_REQUEST['roll'];
		$email=$_REQUEST['email'];
		$contact=$_REQUEST['contact'];
		$pass=$_REQUEST['pas'];
		if ($email !=''  )
		{
		   	$q="select * from student_master where email='$email'";
			$rs = mysql_query($q);
			$count =mysql_num_rows($rs);
			if($count)
			{
				$msg="REGISTRATION FAIL!!! Email is already registerd";
			}
			else
			{
		if($name!=''  && $roll!=''  && $contact!=''  && $pass!='')
	  { 
	 
	 if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
	 {
		
		
		$qs="insert into student_master(name,roll,email,contact,pass)values('$name','$roll','$email','$contact','$pass')";
		
		 if (mysql_query($qs))
		{
		  $msg="DATA SAVED!!";	
		}else
		{
		   $msg="REGISTRATION FAIL!!!";
		}
		
	  
	  
	 }
	  else
		{
    $msg= "This ($email) email address is considered invalid.";
         }
	 }
	}
	 }
		
		
	}
			else{
		  $msg="ALL FIELDS ARE REQUIRED!!!";
	  }
    
		
	
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Rate your prof</title>
<meta charset="utf-8">
<noscript>
<link rel="stylesheet" href="css/5grid/core.css">
<link rel="stylesheet" href="css/5grid/core-desktop.css">
<link rel="stylesheet" href="css/5grid/core-1200px.css">
<link rel="stylesheet" href="css/5grid/core-noscript.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style-desktop.css">
</noscript>
<script src="css/5grid/jquery.js"></script>
<script src="css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none"></script>
<!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css"><![endif]-->
</head>
<body>
<div id="header-wrapper">
  <header id="header" class="5grid-layout">
    <div class="row">
      <div class="12u">
        <!-- Logo -->
        <h1><a href="#" class="mobileUI-site-name">Rate Your Professor</a></h1>
       
        <!-- Nav -->
      <nav class="mobileUI-site-nav">
         <a href="index.php" >Homepage</a>
        
         <?php if(! isset($_SESSION['check'])){?>
         <a href="login.php" >Login</a>
         <a href="reg.php" class="active">Student Registration</a>
         <?php }else{?>
          <a href="index.php">WELCOME <?php echo $_SESSION['name']?></a>
          <a href="logout.php">LOGOUT</a>
         <?php } ?>
         <a href="Developer.html" >Developers</a>  </nav>
      </div>
    </div>
  </header>
</div>
<div id="wrapper">
  <div class="5grid-layout">
    <div class="row">
      <div class="12u" id="banner">
        <section><a href="#"><img src="images/nu.jpg" alt=""></a></section>
      </div>
    </div>
    <div id="feature-content">
    <?php if($msg!=NULL){?>
    <div style="height:25px; width:100%; background-color:#F96;" align="center">
      <?php echo $msg ?>
    </div>
    <?php } ?>
    <center>
      <section>
        <h2>Student Registration</h2>
      </section>
      <div class="row">
        <div class="12u">
          <div class="row">
          <form action="" method="post">
            <table border="1">
              <tr>
                 <td>Full Name</td>
                 <td><input type="text" name="name" class="req"></td>
              </tr>
              <tr>
                 <td>Roll No.</td>
                 <td><input type="text" name="roll" class="req"></td>
              </tr>
              <tr>
                 <td>Email</td>
                 <td><input type="text" name="email" class="req"></td>
              </tr>
              <tr>
                 <td>Contact</td>
                 <td><input type="text" name="contact" class="req"></td>
              </tr>
              <tr>
                 <td>Password</td>
                 <td><input type="password" name="pas" class="req"></td>
              </tr>
              <tr>
                 <td> Re-Password</td>
                 <td><input type="password" name="repas" class="req"></td>
              </tr>
              <tr>
                 <td colspan="2" align="center"><input type="submit" name="sub" value="Register"></td>
              </tr>
            </table>
           </form>
            	
          </div>
        </div>
      </div>
    </div>
     </section>
     </center>
     
    </div>
</div>
</div>

</body>
</html>
