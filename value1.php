<?
include 'connect.php';
$sid=$_POST[sid];
$emOTP=$_POST[emOTP];


$select=mysql_query("select * from org where Sl='$sid'");
      while($r1=mysql_fetch_array($select))
	 {   

		 $Orgid=$r1['Orgid'];
		 $OrgName=$r1['OrgName'];
		 $Contact=$r1['Contact'];
		 $Password=$r1['Password'];
	 }

if($emOTP==$OTP)
	 {
		 $query = "INSERT INTO main_signup(Username,Name,Contact,Password) VALUES ('$Orgid','$OrgName','$Contact','$Password')";
		 $result = mysql_query($query) or die(mysql_error());
		 
?>	

	<script language="javascript">
	alert('Your OTP is verifiied!');
	document.location = "signup.php";
	</script>
<?
	 }
else
	{
?>	
	<script language="javascript">
	alert('Your OTP is invalid!');
	document.location = "otp.php?Sl=<?=$sid;?>";
	</script>
<?
	 }
?>

	 
	 