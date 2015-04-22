<?php include('header.php')?>
<!-- Container -->
<?php
$msg=3;
   if(isset($_POST['sub']))
  {
	  	
	  mysql_connect('localhost','root','');
	  mysql_select_db('rating');
	  
	  $name=$_REQUEST['Pname'];
	  $img=time()."-".$_FILES['Img']['name'];
	  move_uploaded_file($_FILES['Img']['tmp_name'],"uploaded/$img");
	  
	  $q="insert into professor(Name,image) values ('$name','$img')"; 
	  $rs=mysql_query($q); 
	   
	 
	 if($rs)
	 {
	   $msg="1";
	 } 
	 else
	 {
	   $msg="0";	 
	 }
	  
 }
?>
<div id="container">
	<div class="shell">
		
			<?php if($msg==1){?>
		<!-- Message OK 	 -->
		<div class="msg msg-ok">
			<p><strong>Saved successfully!</strong></p>
			<a href="#" class="close">close</a>
		</div>
		<!-- End Message OK 
		<?php } ?>
        <?php if($msg==0){?>
		<!-- Message Error  -->
		<div class="msg msg-error">
			<p><strong>Not Saved!</strong></p>
			<a href="#" class="close">close</a>
		</div>	
		<!-- End Message Error -->
        <?php }?>
		<br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<!-- Content -->
			<div id="content">
				
				<!-- Box -->
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
									
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					<div class="table">
                    <form action="" method="post" enctype="multipart/form-data">
						<table>
                        <tr>
                          <th colspan="2">Register Professor</th>
                        </tr>
                          <tr>
                             <td>Name</td>
                             <td><input type="text" name="Pname" maxlength="70" /></td>
                          </tr>
                           <tr>
                             <td>Professor Image</td>
                             <td><input type="file" name="Img"/></td>
                          </tr>
                          
                          <tr>
                             <td><input type="submit" name="sub" value="Create" /></td>
                          </tr>
                        
                        </table>
				  </form>		
						
						
					</div>
					<!-- Table -->
					
				</div>
				<!-- End Box -->
				
				
			</div>
			<!-- End Content -->
			
			
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->
<?php include('footer.php')?>