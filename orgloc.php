<?
$reqlevel=1;
include 'ck.php';
?>

<form name="f1" method="post" action="vacvalue1.php">
<table border="0" width="500px" align="center" bgcolor="pink">
<tr>
<td colspan="5"><input type="button" value="Organigation Vacancies"></td>
</tr>
<tr>
<td align="right">Location:</td>
<td><select name="Location" id="Location">
<option value="">---Select---</option>
<?
$select=mysql_query("select * from location") or die(mysql_error());;
      while($r1=mysql_fetch_array($select))   
	 {
		  $Location=$r1['Location'];
?>
<option value="<?=$Location;?>"><?=$Location;?></option>
<?
	 }
?>
</select>
</td>
</tr>
<tr>
<td align="right">Contact:</td>
<td><input type="text" name="Contact" id="Contact"></td>
</tr>


<tr>
<td colspan="5" align="right"><br>
<input type="submit" value=" SUBMIT ">


 </td>
</tr>
</table>
</form>




<table border="0" align="center" width="400px">
<tr>
<th align="center" width="2%">Sl.</th>
<th align="center" width="10%">Orgid</th>
<th align="center" width="2%">Location</th>
<th align="center" width="30%">Contact</th>
<th align="center" width="2%">Edit.</th>
</tr>
<?

$f=0;
$select=mysql_query("select * from org_loc order by Sl");
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
		  $Contact=$r1['Contact'];
		  $Edit=$r1['Edit'];
$select1=mysql_query("select * from location where Sl='$Locid'");
      while($r2=mysql_fetch_array($select1))   
	 {		
          $Locid=$r2['Location'];		  
	 }  

?>
<tr bgcolor="<?=$clr;?>">
<td ><?=$f;?></td>
<td ><?=$Orgid;?></td>
<td ><?=$Locid;?></td>
<td ><?=$Contact;?></td>
<td ><a href="edit.php?Sl=<?=$Sid?>"title="Edit">Edit</a></td>
</tr>
<?
	 }
?>
</table>