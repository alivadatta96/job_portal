<?
$reqlevel=1;
include 'ck.php';

$Location=$_POST[Location];
$Contact=$_POST[Contact];


$select=mysql_query("select * from location where Location='$Location'");
      while($r1=mysql_fetch_array($select))
	 {   
		 $Locid=$r1['Sl'];

if($Location=="" or $Contact=="")
{
?>
	<Script language="JavaScript">
	alert('Please Fill All Field');
	
	</script>
<?	
}	
else
{
	
$query = "INSERT INTO org_loc(Orgid,Locid,Contact) VALUES ('$user_currently_loged','$Locid','$Contact')";
$result = mysql_query($query) or die(mysql_error());

?>
<script language="javascript">
alert('Branch Created!');
document.location = "orgloc.php";
</script>
<?
	 }}
