<?php
include('phpgraphlib.php');
$graph=new PHPGraphLib(550,350); 
$id=$_GET['id'];

if ($id != '')
{
include('dbconn.php');
$select="SELECT * FROM feedback where p_id='$id'";
$rs= mysql_query($select);

  $data = mysql_fetch_assoc($rs);
  $dataArray=array();
  foreach($data as $k => $v)
 {
   if($k != 'p_id')
  {	 
    $option = $k;
	$value =  $v;
	$dataArray[$option]=$value;
  }
 }
 
$graph->addData($dataArray);
$graph->setTitle("FEEDBACK GRAPH");
$graph->setGradient("lime", "green");
$graph->setBarOutlineColor("black");
$graph->createGraph();
}else{
	echo "<h2>NO TEACHER SELECTED FOR FEEDBACK !!!!</h2>";
}


 
?>
