<?php
session_start();
 
if (!isset($_SESSION['user_id']))
{
  echo "<script>window.location.assign('index.php')</script>";
}
?>

<?php include"header.php" ?>

<div class="row admin-custom">
<div class="col-lg-12">
<table  border="1 px solid"  align="center"   class="table"  >
        
		<form class="form-horizontal" action="student_add_process.php" method="post" enctype="multipart/form-data">
		

<tr><td> Name </td><td>:</td><td><input type="text" class="form-control has-warning" name="std_name" placeholder="Mahmudul Alam" required ></td>

</tr>
 <tr><td> Father's Name </td><td>:</td><td><input type="text" name="std_fname"  class="form-control"   placeholder="Mofizur Rahaman" required></td></tr>

<tr><td> Mother's Name </td><td>:</td><td><input type="text" name="std_mname" class="form-control"  placeholder="ferdousy Begum" required></td></tr>

<tr><td width="23%"> DEPARTMENT </td><td width="2%">:</td><td width="75%">


  <select name="std_department"  class="form-control" required>
 <option value="CSE"> CSE </option>
 <option value="CEN"> CEN </option>
  <option value="EEE"> EEE </option>
    <option value="BBA">BBA</option>
 <option value="BTE"> BTE</option>
  <option value="BFT"> BFT</option>
  <option value="LLB"> LLB </option>
    <option value="ENG">ENG</option>
 <option value="BSS"> BSS</option>

    </select>
</td></tr>





<tr><td> ID Card NO </td><td>:</td><td><input type="text" name="std_idCardNo" class="form-control" placeholder="CSE01005781" ></td></tr>
<tr><td> DATE OF BIRTH  </td><td>:</td><td><input type="text" id="date" name="std_date_of_birth" class="form-control" placeholder="27-8-1995" ></td></tr>
<tr><td> NATIONAL ID </td><td>:</td><td><input type="text" name="std_nid" class="form-control" placeholder="71409056" ></td></tr>
<tr><td> Contact Number </td><td>:</td><td><input type="text" name="std_contact" class="form-control" placeholder="01834598598" ></td></tr>
<tr><td> Student Picture </td><td>:</td><td> 
   <span class="btn btn-default btn-file">  <input type="file"  class="form-control" name="image">    </span></td></tr>

<tr><td> PRESENT ADDRESS </td><td>:</td><td>
<textarea class="ckeditor" class="form-control"   id="editor1" placeholder="Present Address" name="std_present_address" rows="1"></textarea>
</td></tr>
<tr><td> PERMANENT ADDRESS </td><td>:</td><td><textarea  class="ckeditor" class="form-control"   id="editor1" placeholder="Permanent Address" name="std_permanent_address" rows="1"></textarea></td></tr>

<tr>
<td colspan="3"> <center> 
<input type="reset" class="btn btn-primary" name="submit" value="Reset" size="30%">
<button type="submit" name="submit" class="btn btn-success " style="width: 12%;">Submit</button> </td>
</tr>
</form>

</table>

</div>

</div>

<?php include("footer.php"); ?>