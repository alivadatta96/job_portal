<?
$reqlevel=1;
include 'ck.php';
echo $Location=$_POST[Location];
echo $Designation=$_POST[Designation];
echo $Salary=$_POST[Salary];
echo $No_of_vacancies=$_POST[No_of_vacancies];
echo $Qualification=$_POST[Qualification];


$select=mysql_query("select * from location where Location='$Location'");
      while($r1=mysql_fetch_array($select))
	 {   
		 $Locid=$r1['Sl'];
	 } 
		 
		 $select1=mysql_query("select * from qualification where Qualification='$Qualification'");
      while($r2=mysql_fetch_array($select1))
	 {   
		 $Qualification=$r2['Sl'];
	 } 

if($Designation=="" or $Salary=="" or $No_of_vacancies=="" or $Qualification=="")
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
	
$query = "INSERT INTO org_loc_vac(Orgid,Locid,Designation,Salary,No_of_vacancies,Qualification) VALUES ('$user_currently_loged','$Locid','$Designation','$Salary','$No_of_vacancies','$Qualification')";
$result = mysql_query($query) or die(mysql_error());
?>

<script language="javascript">
alert('Vacancy Created!');
document.location = "vac.php";
</script>

	 <?
	 }
	 ?>