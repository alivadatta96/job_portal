<?
$reqlevel=1;
include 'ck.php';
$Sid=$_REQUEST[Sl]; 


date_default_timezone_set("Asia/Calcutta");
$dt1=date("Y-m-d h:i:s a");

$query1="UPDATE job_app set Status='2' and Selectdttm='$dt1' where Sl='$Sid'";
$result1 = mysql_query($query1) or die(mysql_error());	
?>

	<Script language="JavaScript">
	alert('Selected');
	document.location = "new.php";
	</script> 
