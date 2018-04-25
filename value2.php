<?
include 'connect.php';

echo "<br>nm".$Name=$_POST[Name];
echo "<br>addr".$Address=$_POST[Address];
echo "<br>cont".$Contact=$_POST[Contact];
echo "<br>pass".$Password=$_POST[Password];

if($Name=="" or $Contact=="")
{
?>
	<Script language="JavaScript">
	alert('Please Fill All Field');
	
	</script>
<?	
}	
else
{
$f=0;
$select=mysql_query("select * from stud_dtls");
      while($r1=mysql_fetch_array($select))   
	 {   $f++;
	 }
	 $f++;
	 $Studid="STUD".str_pad($f,4,0,str_pad_right);
	
$query = "INSERT INTO stud_dtls(Studid,Name,Address,Contact) VALUES ('$Studid','$Name','$Address','$Contact')";
$result = mysql_query($query) or die(mysql_error());
$query1 = "INSERT INTO main_signup(Username,Name,Contact,Password) VALUES ('$Studid','$Name','$Contact','$Password')";
$result1 = mysql_query($query1) or die(mysql_error());
?>
<script language="javascript">
alert('Submited!');
document.location = "studsignup.php";
</script>
<?
}
