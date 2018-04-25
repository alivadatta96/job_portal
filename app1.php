<?
$reqlevel=1;
include 'ck.php';
echo $Appid=$_REQUEST[Appid]; 


date_default_timezone_set("Asia/Calcutta");
$dt1=date("Y-m-d h:i:s a");



$query1="UPDATE job_app set Status='1',Shortlistdttm='$dt1' where Appid='$Appid'";
$result1 = mysql_query($query1) or die(mysql_error());	
?>
	<Script language="JavaScript">
	alert('Shortlisted');
	document.location = "new.php";
	</script> 

