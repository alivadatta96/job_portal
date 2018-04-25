<?
include 'connect.php';
$Sid=$_REQUEST[Sl]; 
$f=0;
$select=mysql_query("select * from stud_dtls where Sl='$Sid'");
      while($r1=mysql_fetch_array($select))
	  {
$Email=$r1['Email'];
	  }
$query1="UPDATE main_signup set Status='2' where Sl='$Sid'";
$result1 = mysql_query($query1) or die(mysql_error());	
 
$query2="UPDATE main_signup set actnum='0' where Email='$Email'";
$result2 = mysql_query($query2) or die(mysql_error()); 

	 

	?>
	<Script language="JavaScript">
	alert('Selected');
	document.location = "new.php";
	</script> 
	