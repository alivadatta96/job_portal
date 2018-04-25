<?
include 'connect.php';


$OrgName=$_POST[OrgName];
$Contact=$_POST[Contact];
$Email=$_POST[Email];
$Password=$_POST[Password];
$OTP=$_POST[OTP];

if($OrgName=="" or $Contact=="")
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
	$f=0;	
$select=mysql_query("select * from org");
      while($r1=mysql_fetch_array($select))   
	 {   $f++;
	 }
	 $f++;
	 $Orgid="ORG".str_pad($f,4,0,str_pad_right);
	
$query = "INSERT INTO org(Orgid,OrgName,Contact,Email,OTP,Password) VALUES ('$Orgid','$OrgName','$Contact','$Email','$OTP','$Password')";
$result = mysql_query($query) or die(mysql_error());




$select=mysql_query("select * from org where OrgName='$OrgName' and Contact='$Contact' and Email='$Email'");
      while($r1=mysql_fetch_array($select))
	 {   

		 $Sl=$r1['Sl'];
    }

?>
<script language="javascript">
alert('Submited!');
document.location = "otp.php?Sl=<?=$Sl;?>";
</script>
<?
}
