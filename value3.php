<?
$reqlevel=1;
include 'ck.php';

echo "<br>qua".$Qualification=$_POST[Qualification];
echo "<br>pass".$Year=$_POST[Year];


$select1=mysql_query("select * from qualification where Qualification='$Qualification'");
      while($r2=mysql_fetch_array($select1))
	 {   
		 $Qualification=$r2['Sl'];
	 } 
if($Qualification=="" or $Year=="")
{
?>
	<Script language="JavaScript">
	alert('Please Fill All Field');
	
	</script>
<?	
}	
else
{
	
$query = "INSERT INTO stud_qualy(Studid,Qualification,Year) VALUES ('$user_currently_loged','$Qualification','$Year')";
$result = mysql_query($query) or die(mysql_error());

?>
<script language="javascript">
alert('Submited!');
document.location = "studQualy.php";
</script>
<?
}
