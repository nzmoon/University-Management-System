<?php
session_start();
 
if (!isset($_SESSION['user_id']))
{
  echo "<script>window.location.assign('index.php')</script>";
}
?>
<?php
	include("db.php");
	
	if(isset($_REQUEST['std_id']))
	{
		$std_id = $_REQUEST['std_id'];
		$sql = "select * from student where std_id= '".$std_id."'";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);
	
?>
 
<?php include("header.php"); ?>

<div class="row admin-custom">
<div class="col-lg-12">

<table  border="1 px solid"  align="center"   class="table"  >
 
		
		<tr><td colspan="3"> <center><h1>Student Information System</td> </center></tr>

<tr><td> Name </td><td>:</td><td><?php echo $row['std_name']?></td></tr>
 <tr><td> Father's Name </td><td>:</td><td><?php echo $row['std_fname']?></td></tr>
<tr><td> Mother's Name </td><td>:</td><td><?php echo $row['std_mname']?></td></tr>

<tr><td width="23%"> DEPARTMENT </td><td width="2%">:</td><td width="75%">

 <?php echo $row['std_department']?>
</td></tr>





<tr><td> ID Card No </td><td>:</td><td> <?php echo $row['std_idCardNo']?></td></tr>


<tr><td> DATE OF BIRTH  </td><td>:</td><td><?php echo $row['std_date_of_birth']?></td></tr>
<tr><td> NATIONAL ID </td><td>:</td><td><?php echo $row['std_nid']?></td></tr>
<tr><td> Contact Number </td><td>:</td><td><?php echo $row['std_contact']?></td></tr>
<tr><td> Student Picture </td><td>:</td>
    <?php 
	if(trim($row["image"])!="")
	{
			$image_dir = 'uploaded_image/';
			$img_name = trim($row["image"]);
			if(is_file($image_dir.$img_name))
			{
				$img_patd = '<img src="'.$image_dir.$img_name.'"  width="150" height="100"/>';
			}
			else
			{
				$img_patd = '<img src="'.$image_dir.'female.png" />';	
			}
			
	?>
<td>
	
	<?php echo $img_patd;?>



</td>
<?php 
	 }


	?>
   
   
   </tr>

<tr><td> PRESENT ADDRESS </td><td>:</td><td><?php echo $row['std_present_address']?></td></tr>
<tr><td> PERMANENT ADDRESS </td><td>:</td><td><?php echo $row['std_permanent_address']?></td></tr>


 <?php 
	 }


	?>


</table>
	

</div>

</div>


<?php include("footer.php"); ?>