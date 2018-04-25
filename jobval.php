

<?
include "connect.php";
$val=$_POST[bnm];
$val1=$_POST[bnm1];
$qry="";
$count=0;

for($tb=0;$tb<count($val);$tb++)
	
{
	if($count==0)
	{
		$qry=" and ( Locid='$val[$tb]'";
	}
	else
	{
		$qry=$qry."or Locid='$val[$tb]'";
	}
	$count++;
}
if($count>0)
{
 $qry=$qry.")" ; 
}
$qry1="$";
$count1=0;

for($tb1=0;$tb1<count($val1);$tb1++)
	
{
	if($count1==0)
	{
		$qry1=" and ( Qualification='$val1[$tb1]'";
	}
	else
	{
		$qry1=$qry1."or Qualification='$val1[$tb1]'";
	}
	$count1++;
}
if($count1>0)
{
 $qry1=$qry1.")" ; 
}
echo $QRY="select * from org_loc_vac where Sl>0".$qry.$qry1;
?>

<table border="1" align="center" width="800px">
<tr>
<th align="center" width="5%">Sl.</th>
<th align="center" width="5%">Name</th>
<th align="center" width="5%">Location</th>
<th align="center" width="5%">Designation</th>
<th align="center" width="50%">Salary</th>
<th align="center" width="20%">No_of_vacancies</th>
<th align="center" width="10%">Qualification</th>
<th align="center" width="10%">Status</th>
<th align="center" width="10%">Action</th>
</tr>
<?

$f=0; 
$select=mysql_query($QRY);
      while($r1=mysql_fetch_array($select))   
	 {		
 $f++;
 
		  $Orgid=$r1['Orgid'];
		  $Locid=$r1['Locid'];
		  $Designation=$r1['Designation'];
		  $Salary=$r1['Salary'];
		  $No_of_vacancies=$r1['No_of_vacancies'];
		  $Qualification=$r1['Qualification'];
		  $Status=$r1['Status'];
		  $Sid=$r1['Sl'];
	if($f%2==0)
	{
		$color="#2FDCC1";

		}
		else
		{
			$color="#9BFC6E";
		}
		 
	$select1=mysql_query("select * from org where Sl='$Orgid'");
      while($r2=mysql_fetch_array($select1))   
	 {		
          $Orgid=$r2['OrgName'];
		    $Orgsl=$r2['Sl'];
	 }
	 
 $select2=mysql_query("select * from location where Sl='$Locid'");
      while($r3=mysql_fetch_array($select2))   
	 {	
          $Locid=$r3['Location'];
	 }
	 $select3=mysql_query("select * from qualification where Sl='$Qualification'");
      while($r4=mysql_fetch_array($select3))   
	 {		  $Qualification=$r4['Qualification'];
	 
	 }
?>
	
<tr bgcolor="<?=$color;?>">
<td ><?=$f;?></td>
<td ><?=$Orgid;?></td>
<td ><?=$Locid;?></td>
<td ><?=$Designation;?></td>
<td ><?=$Salary;?></td>
<td ><?=$No_of_vacancies;?></td>
<td ><?=$Qualification;?></td>
<td ><?=$Status;?></td>

<td >

<a href="app.php?Sl=<?=$Sid;?>" title="Apply">Apply</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</td>
</tr>
<?
	 }
?>
</table>
