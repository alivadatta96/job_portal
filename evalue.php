<?
include 'connect.php';

echo $sid=$_POST[sid];
echo $Location=$_POST[Location];


if($sid=='')
{
if($Location=="")
{
?>
	<Script language="JavaScript">
	alert('Please Fill All Field');
	window.history.go(-1);
	</script>
<?	
}	
else
{
$query = "INSERT INTO loc(Location) VALUES ('$Location')";
$result = mysql_query($query) or die(mysql_error());
?>
<script language="javascript">
alert('Submited!');
document.location = "loc.php";
</script>
<?
}}
