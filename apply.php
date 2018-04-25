<?
include 'connect.php';
$Sid=$_REQUEST[Sl];

{
?>
<table border="0" align="center" width="800px">
<tr>
<th align="center" width="5%">Sl.</th>
<th align="center" width="5%">Name</th>
<th align="center" width="5%">Location</th>
<th align="center" width="5%">Designation</th>
<th align="center" width="50%">Salary</th>
<th align="center" width="20%">No_of_vacancies</th>
<th align="center" width="10%">Min_eligibility</th>
<th align="center" width="10%">Action</th>
</tr>
<?

$f=0;
$select=mysql_query("select org.Name,location.Location,org_loc_vac.Designation,org_loc_vac.Salary,org_loc_vac.No_of_vacancies,org_loc_vac.Min_eligibility from org,location,org_loc_vac where org_loc_vac.Locid=location.Location");
      while($r1=mysql_fetch_array($select))   
	 {		$f++;
		  $f1=$r1['Name'];
		  $f2=$r1['Location'];
		  $f3=$r1['Designation'];
		  $f4=$r1['Salary'];
		  $f5=$r1['No_of_vacancies'];
		  $f6=$r1['Min_eligibility'];
		  $f7=$r1['Qualification'];
		  $f8=$r1['Action'];

		  $Sid=$r1['Sl'];
	if($f%2==0)
	{
		$color="#2FDCC1";

		}
		else
		{
			$color="#9BFC6E";
		}
		  
		  
	 ?>
<tr bgcolor="<?=$color;?>">
<td ><?=$f;?></td>
<td ><?=$f1;?></td>
<td ><?=$f2;?></td>
<td ><?=$f3;?></td>
<td ><?=$f4;?></td>
<td ><?=$f5;?></td>
<td ><?=$f6;?></td>
<td ><?=$f7;?></td>

<td ><a href="app.php?Sl=<?=$Sid;?>" title="Approved">Approved</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>
<?
	 }
?>
</table>
<?
}
?>