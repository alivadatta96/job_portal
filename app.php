<?
$reqlevel=1;
include 'ck.php';
$Sid=$_REQUEST['Sl'];


$select1=mysql_query("select * from org where Sl='$Sid'");
      while($r3=mysql_fetch_array($select1))
	 {   
		 $Jobid=$r3['Sl'];
	 }
	  
	  
date_default_timezone_set("Asia/Calcutta");
$dt1=date("Y-m-d h:i:s a");
	  
$query1="INSERT INTO job_app (Jobid,Appid,Datetime) VALUES('$Jobid','$user_currently_loged','$dt1')";
$result1 = mysql_query($query1) or die(mysql_error());







?>


<Script language="JavaScript">
alert('Applied');
document.location = "jobval.php";
</script> 
	  