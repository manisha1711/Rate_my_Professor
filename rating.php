<?php
  session_start();
   if ( $_SESSION['check']!=session_id() )
  {
	echo "PLEASE LOGIN TO RATE !!!!<a href='index.php'>GO TO HOME</a>";
	exit();  
  }
?> 
<!DOCTYPE HTML>
<html>
<head>
<title>Rate your Professor</title>
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
<style type="text/css">
* {
	margin: 0;
	padding: 0;
}
html {
	height: 100%;
	font-size: 62.5%
}
body {
	height: 100%;
	background-color: #FFFFFF;
	font: 1.2em Verdana, Arial, Helvetica, sans-serif;
}
/* ==================== Form style sheet ==================== */

form {
	margin: 25px 0 0 29px;
	width: 450px;
	padding-bottom: 30px;
}
fieldset {
	margin: 0 0 22px 0;
	border: 1px solid #A33200;
	padding: 12px 17px;
	background-color: #FFE1D3;
}
legend {
	font-size: 1.1em;
	background-color: #A33200;
	color: #FFFFFF;
	font-weight: bold;
	padding: 4px 8px;
}
label.float {
	float: left;
	display: block;
	width: 100px;
	margin: 4px 0 0 0;
	clear: left;
}
label {
	display: block;
	width: auto;
	margin: 0 0 10px 0;
}
label.spam-protection {
	display: inline;
	width: auto;
	margin: 0;
}
input.inp-text, textarea, input.choose, input.answer {
	border: 1px solid #909090;
	padding: 3px;
}
input.inp-text {
	width: 300px;
	margin: 0 0 8px 0;
}
textarea {
	width: 400px;
	height: 150px;
	margin: 0 0 12px 0;
	display: block;
}
input.choose {
	margin: 0 2px 0 0;
}
input.answer {
	width: 40px;
	margin: 0 0 0 10px;
}
input.submit-button {
	font: 1.4em Georgia, "Times New Roman", Times, serif;
	letter-spacing: 1px;
	display: block;
	margin: 23px 0 0 0;
}
form br {
	display: none;
}

/* ==================== Form style sheet END ==================== */
</style>

<!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css"><![endif]-->
</head><body>
<div id="header-wrapper">
  <header id="header" class="5grid-layout">
    <div class="row">
      <div class="12u"> 
        <!-- Logo -->
        <h1><a href="#" class="mobileUI-site-name">Rate Your Professor</a></h1>
        
        <!-- Nav -->
       <nav class="mobileUI-site-nav">
         <a href="index.php" >Homepage</a>
         <a href=" #" class="active"  >Feedback</a>
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
<form action="Rate.php" method="post" id="r1">
  <!-- ============================== Fieldset 1 ============================== -->
  <fieldset>
    <legend>Enter Your Rating:</legend>
    <label for="input-one" class="float"><strong>Rating(1-10):</strong></label>
    <br />
    <input class="inp-text" name="rating" id="input-one" type="text" size="30" class="req" />
    <br />
  </fieldset>
  <!-- ============================== Fieldset 1 end ============================== --> 
  
  <!-- ============================== Fieldset 2 ============================== -->
  <fieldset>
    <legend>Feedback:</legend>
    <label for="option1">	
      <input class="choose" name="Audible" id="option1" type="checkbox" value="1" class="rate" />
      &nbsp; Audible</label>
    <br />
    <label for="option2">
      <input class="choose" name="Projector" id="option2" type="checkbox" value="1" class="rate" />
      &nbsp; Projector Working</label>
    <br />
    <label for="option3">
      <input class="choose" name="clarity" id="option3" type="checkbox" value="1" class="rate" />
      &nbsp;clarity </label>
    <br />
    <label for="option4">
      <input class="choose" name="Interactive" id="option4" type="checkbox" value="1" class="rate" />
      &nbsp; Interactive</label>
    <br />
    <label for="option5">
      <input class="choose" name="Helpfulness" id="option5" type="checkbox" value="1" class="rate" />
      &nbsp;Helpfulness </label>
    <label for="option6">
      <input class="choose" name="easiness" id="option5" type="checkbox" value="1" class="rate" />
      &nbsp;easiness</label>
  </fieldset>
  <!-- ============================== Fieldset 2 end ============================== -->
  
  <p>
    <input type="hidden" name="pid" value="<?php echo $_GET['id']?>">
    <input class="submit-button" type="submit" alt="SUBMIT" name="Submit" value="SUBMIT"  />
    </a></p>
</form>
  
   </script>
</body>
</html>
