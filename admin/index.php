<?php
  session_start();
   if($_SESSION['check']==session_id())
  {
	header('location:logout.php');  
  }
  if(isset($_REQUEST['sub']))
  {
	mysql_connect('localhost','root','');
	mysql_select_db('rating');
	$q="select * from admin where userid='".$_POST['login']."'and password='".$_POST['password']."' "; 
	$rs=mysql_query($q); 
	 
	 if(mysql_num_rows($rs))
	 {
	    $_SESSION['check']=session_id();
		header('location:home.php');
		exit();	 
	 } 
	 else
	 {
	   $msg="invalid id password";	 
	 }
	  
  }
  
?>
<div style="text-align: center;">
	<div style="box-sizing: border-box; display: inline-block; width: auto; max-width: 480px; background-color: #FFFFFF; border: 2px solid #0361A8; border-radius: 5px; box-shadow: 0px 0px 8px #0361A8; margin: 50px auto auto;">
	<div style="background: #0361A8; border-radius: 5px 5px 0px 0px; padding: 15px;"><span style="font-family: verdana,arial; color: #D4D4D4; font-size: 1.00em; font-weight:bold;">Admin Login Panel</span></div>
	<div style="background: ; padding: 15px">
	<style type="text/css" scoped>
	td { text-align:left; font-family: verdana,arial; color: #064073; font-size: 1.00em; }
	input { border: 1px solid #CCCCCC; border-radius: 5px; color: #666666; display: inline-block; font-size: 1.00em;  padding: 5px; width: 100%; }
	input[type="button"], input[type="reset"], input[type="submit"] { height: auto; width: auto; cursor: pointer; box-shadow: 0px 0px 5px #0361A8; float: right; text-align:right; margin-top: 10px; margin-left:7px;}
	table.center { margin-left:auto; margin-right:auto; }
	.error { font-family: verdana,arial; color: #D41313; font-size: 1.00em; }
	</style>
    <?php if (isset($msg)){?>
<div style="height:25px; width:100%; background-color:#F93;" align="center" ><?php echo $msg?></div>
<?php } ?>
<form method="post" action="" name="aform" target="_top">
<input type="hidden" name="action" value="login">
<input type="hidden" name="hide" value="">
<table class='center'>
<tr><td>Userid</td><td><input type="text" name="login"></td></tr>
<tr><td>Password</td><td><input type="password" name="password"></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="sub" value="Login"></td></tr>
<tr><td colspan=2>&nbsp;</td></tr>	
</table>
</form>
</div></div></div>