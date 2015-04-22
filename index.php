<?php
    session_start();
    mysql_connect('localhost','root','');
	mysql_select_db('rating');
	$q="select * from professor"; 
	$rs=mysql_query($q); 
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
         <a href="index.php" class="active">Homepage</a>
        
         <?php if(! isset($_SESSION['check'])){?>
         <a href="login.php" >Login</a>
         <a href="reg.php">Student Registration</a>
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
      <section>
        <h2>Our Professors</h2>
      </section>
      <div class="row">
        <div class="12u">
          <div class="row">
          <?php while($r=mysql_fetch_assoc($rs)){?>
            <div class="3u">
              <section>
                <div>
                  <div class="image-style1"><a href="#"><img src="admin/uploaded/<?php echo $r['image']?>" alt=""></a></div>
                  <div><a href="#"><img src="css/images/img02.png" width="262" height="30" alt=""></a></div>
                </div>
                <p><?php echo $r['Name']?></p>
                <p class="button"><a href="rating.php?id=<?php echo $r['prof_id'] ?>">Rate	</a></p>
                <p class="button"><a href="report.php?id=<?php echo $r['prof_id'] ?>">VIEW REPORT</a></p>
              </section>
            </div>
            
            <?php } ?>
            	
          </div>
        </div>
      </div>
    </div>
     </section>
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
