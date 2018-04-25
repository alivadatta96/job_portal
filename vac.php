<?
$reqlevel=1;
include 'ck.php';
?>

<form name="f1" method="post" action="vacvalue.php">
<table border="0" width="500px" align="center" bgcolor="pink">
<tr>
<td colspan="5"><input type="button" value="Organigation Vacancies"></td>
</tr>
<tr>
<td align="right">Location:</td>
<td><select name="Location" id="Location">
<option value="">---Select---</option>
<?
 
		  
	 
$select=mysql_query("select * from org_loc where Orgid='$user_currently_loged'" ) or die(mysql_error());;
      while($r1=mysql_fetch_array($select))   
	 {
		  
  $Locid=$r1['Locid'];
  $select1=mysql_query("select * from location where Sl='$Locid'"); 
      while($r2=mysql_fetch_array($select1))   
	 {
		  $Location=$r2['Location'];
		   
		  
?>
<option value="<?=$Location;?>"><?=$Location;?></option>
<?
	 }}
?>
</select>
</td>
</tr>
<tr>
<td align="right">Designation:</td>
<td><input type="text" name="Designation" id="Designation"></td>
</tr>

<tr>
<td  align="right">Salary:</td>
<td colspan="3"><input type="text" name="Salary" id="Salary"></td> 
</tr>
<tr>
<td align="right">No_of_vacancies:</td>
<td><input type="text" size="8" name="No_of_vacancies" id="No_of_vacancies"></td>
</tr>
<tr>
<td align="right">Qualification:</td>
<td colspan="5"><select name="Qualification" id="Qualification">


<option value="">---Select---</option>
<?
 
		  
	 
$select=mysql_query("select * from qualification") or die(mysql_error());;
      while($r1=mysql_fetch_array($select))   
	 {
		  
  $Qualification=$r1['Qualification'];
  
		   
		  
?>
<option value="<?=$Qualification;?>"><?=$Qualification;?></option>
<?
	 }
?>
</select>
</td>
</tr>
</tr>

<tr>
<td colspan="5" align="right"><br>
<input type="submit" value=" SUBMIT ">


 </td>
</tr>
</table>
</form>







<table border="1" align="center" width="600px">
<tr>
<th align="center" width="2%">Sl.</th>
<th align="center" width="30%">OrgName</th>
<th align="center" width="2%">Location</th>
<th align="center" width="2%">Designation</th>
<th align="center" width="2%">Salary</th>
<th align="center" width="2%">No_of_vacancies</th>
<th align="center" width="2%">Qualification</th>
<th align="center" width="2%">Edit</th>
</tr>
<?
$f=0;
$select=mysql_query("select * from org_loc_vac order by Sl");
      while($r1=mysql_fetch_array($select))   
	 {		$f++;
        if($f%2==0)
		{
				$clr="pink";
		}
		else
		{
			$clr="yellow";
		}
		$Orgid=$r1['Orgid'];
		  $Locid=$r1['Locid'];
		  $Designation=$r1['Designation'];
		  $Salary=$r1['Salary'];
		  $No_of_vacancies=$r1['No_of_vacancies'];
		  $Qualification=$r1['Qualification'];
		  $Edit=$r1['Edit'];

		  $select2=mysql_query("select * from org where Orgid='$Orgid'");
      while($r3=mysql_fetch_array($select2))   
	 {		  $Orgid=$r3['OrgName'];
$select1=mysql_query("select * from location where Sl='$Locid'");
      while($r2=mysql_fetch_array($select1))   
	 {		  $Locid=$r2['Location'];
	 $select3=mysql_query("select * from qualification where Sl='$Qualification'");
      while($r4=mysql_fetch_array($select3))   
	 {		  $Qualification=$r4['Qualification'];
	 
?>
<tr bgcolor="<?=$clr;?>">
<td ><?=$f;?></td>
<td ><?=$Orgid;?></td>
<td ><?=$Locid;?></td>
<td ><?=$Designation;?></td>
<td ><?=$Salary;?></td>
<td ><?=$No_of_vacancies;?></td>
<td ><?=$Qualification;?></td>
<td ><a href="edit.php?Sl=<?=$Sid?>"title="Edit">Edit</a></td>
</tr>
<?
	 }}}}
?>
</table>