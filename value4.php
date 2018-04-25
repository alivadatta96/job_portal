<?
$reqlevel=1;
include 'ck.php';

echo "<br>qua".$Location=$_POST[Location];

$select1=mysql_query("select * from location where Location='$Location'");
      while($r2=mysql_fetch_array($select1))
	 {   
		 $Location=$r2['Sl'];
	 } 

if($Location=="")
{
?>
	<Script language="JavaScript">
	alert('Please Fill All Field');
	
	</script>
<?	
}	
else
{
	
$query = "INSERT INTO stud_ref_loc(Studid,Location) VALUES ('$user_currently_loged','$Location')";
$result = mysql_query($query) or die(mysql_error());

?>
<script language="javascript">
alert('Submited!');
document.location = "studloc.php";
</script>
<?
}
