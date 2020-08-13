<style>
td
{
padding:10px;
}
</style>
<?php
 include("connection.php");
 error_reporting(0);
 $query="SELECT*FROM APPLICATION";
 $data=mysqli_query($conn,$query);
 $total=mysqli_num_rows($data);
if($total!=0)
{
?>
<table>
 <tr>
<th>Name</th>
<th>Email</th>
<th>Mobilenumber</th>
<th>DateofBirth</th>
<th>Pincode</th>
<th colspan="2">Operations</th>
</tr>

<?php
	while( $result=mysqli_fetch_assoc($data))
	{
	echo "<tr>
	<td>".$result['Name']."</td>
	<td>".$result['Email']."</td>
	<td>".$result['Mobilenumber']."</td>
	<td>".$result['DateofBirth']."</td>
	<td>".$result['Pincode']."</td>
	<td><a href='update.php?na=$result[Name]&em=$result[Email]&mn=$result[Mobilenumber]&da=$result[DateofBirth]&pi=$result[Pincode]'>Edit<a></td>
	<td><a href='delete.php?na=$result[Name] ' onclick='return checkdelete()'>Delete</a></td>
	</tr>";
	}
}
else{
echo"no records";
}

?>
</table>
<script type="">
	function checkdelete(){
		return confirm('Are you sure you want to delete this data??');

	}
</script>