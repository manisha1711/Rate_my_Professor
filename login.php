<?php
   session_start();
    mysql_connect('localhost','root','');
	mysql_select_db('rating');
	
	
	 if( isset($_REQUEST['sub']))
	{
		$userid = $_REQUEST['userid'];
		$psw = $_REQUEST['psw'];
		
		if ($userid !=''  && $psw!='' )
		{
		   	$q="select * from student_master where email='$userid' and  pass='$psw'";
			$rs = mysql_query($q);
			$count =mysql_num_rows($rs);
			$data=mysql_fetch_assoc($rs);
			
			if($count)
			{
				$_SESSION['check']=session_id();
				$_SESSION['name']=$data['name'];
				header('location:index.php');
				exit();
				
			}
			else
			{
				$msg="INVALID USERID PASSWORD!!";
			}
		}
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
           
          <a href="login.php" class="active" >Login</a>
           <a href="reg.php">Student Registration</a>
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
    <center>
      <section>
        <h2>Student Login</h2>
      </section>
      <div class="row">
        <div class="12u">
          <div class="row">
          
          <form action="" method="post">
            <table border="1">
              <tr>
                 <td>USERID</td>
                 <td><input type="text" name="userid"></td>
              </tr>
              <tr>
                 <td>PASSWORD</td>
                 <td><input type="password" name="psw"></td>
              </tr>
              <tr>
                 <td colspan="2" align="center"><input type="submit" name="sub" value="login"></td>
              </tr>
            </table>
            	</form>
               
          </div>
        </div>
      </div>
    </div>
     </section>
      </center>
      <div class="row">
        <div class="12u">
          <div class="row">
            
            
            
            
          </div>
        </div>
      </div>
    </div>
</div>
</div>
</body>
</html>
