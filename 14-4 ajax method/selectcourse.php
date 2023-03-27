<?php
$con=mysqli_connect("localhost","root","","web");
$id=$_POST['datapost'];
$q="select * from year where cid= '$id'";
$row=mysqli_query($con,$q);
while($result=mysqli_fetch_array($row))
 { ?>
 <option value="<?php echo $result['cid'] ?>"><?php echo $result['name'] ?></option>
 <?php
 }
 ?>
?>