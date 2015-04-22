<?php
session_start();
include('dbconn.php');
$id=$_REQUEST['pid'];
$rating=$_REQUEST['rating'];
$Audible=0;
$Projector=0;
$clarity=0;
$Interactive=0;
$Helpfulness=0;
$easiness=0;
$count=0;

if(isset($_REQUEST['Audible'])){$Audible=1;}

if(isset($_REQUEST['Projector'])){$Projector=1;}

if(isset($_REQUEST['clarity'])){$clarity=1;}

if(isset($_REQUEST['Interactive'])){$Interactive=1;}

if(isset($_REQUEST['Helpfulness'])){$Helpfulness=1;}

if(isset($_REQUEST['easiness'])){$easiness=1;}
if($rating!=''  && $rating > 0 && $rating <10 )
	 {
$select="SELECT * FROM feedback where p_id='$id'";
$rs=mysql_query($select);

$data = mysql_fetch_assoc($rs);
$count=$data['count']+1;
$rating  =  (($data['rate'] + $rating)/$count) ;
$Audible  = (($data['Audible'] + $Audible)/$count) ;
$Projector  = (($data['Projector_Working'] + $Projector)/$count);
$clarity = (($data['clarity'] + $clarity)/$count) ;
$Interactive = (($data['Interactive'] + $Interactive)/$count);
$Helpfulness = (($data['Helpfulness']+ $Helpfulness)/$count);
$easiness = (($data['easiness']+ $easiness)/$count) ;

$qu="UPDATE  `rating`.`feedback` SET  `rate` =  '$rating',
`Audible` =  '$Audible',
`Projector_Working` =  '$Projector',
` clarity` =  '$clarity',
` Interactive` =  '$Interactive',
`Helpfulness` =  '$Helpfulness',
`easiness` =  '$easiness', `count` = '$count' WHERE  `feedback`.`p_id` ='$id'";
$f = mysql_query($qu);
header("Location:index.php");
	 }
	 else{
		  echo "RATING FIELD IS REQUIRED AND SHOULD BE (1-10)!!!";
		  
	  }
?>
