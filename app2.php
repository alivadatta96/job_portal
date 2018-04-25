<?
$reqlevel=1;
include 'ck.php';
$Sid=$_REQUEST[Sl]; 




$query1="UPDATE job_app set Status='-1' where Sl='$Sid'";
$result1 = mysql_query($query1) or die(mysql_error());	
?>

	<Script language="JavaScript">
	alert('Shortlisted');
	document.location = "new.php";
	</script> 
