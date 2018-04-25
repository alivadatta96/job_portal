<?

include 'connect.php';
?>
<form name="f1" method="post" action="value3.php">

<table border="0" width="450px" align="center" bgcolor="yellow">
<tr>
<td colspan="5"><input type="button" value="Student's Qualification"></td>
</tr>
<tr>
<td  align="right">Qualification:</td>
<td>
<select name="Qualification" id="Qualification">
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
<tr>
<td align="right">Year:</td>
<td><input type="text" name="Year" id="Year"></td>
</tr><tr>
 <td colspan="5"  align="right"><br>
<input type="submit" value="SUBMIT">&nbsp&nbsp&nbsp&nbsp
</td>
</tr>
</table>
</form>







<table border="1" align="center" width="600px">
<tr>
<th align="center" width="2%">Sl.</th>
<th align="center" width="10%">Studid</th>
<th align="center" width="2%">Qualification</th>
<th align="center" width="5%">Year</th>
<th align="center" width="2%">Edit</th>
</tr>
<?
$f=0;
$select=mysql_query("select * from stud_qualy order by Sl");
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
		$Studid=$r1['Studid'];
		$Year=$r1['Year'];
		  $Qualification=$r1['Qualification'];
		  $Edit=$r1['Edit'];

		  
	 $select3=mysql_query("select * from qualification where Sl='$Qualification'");
      while($r4=mysql_fetch_array($select3))   
	 {		  $Qualification=$r4['Qualification'];
	 
?>
<tr bgcolor="<?=$clr;?>">
<td ><?=$f;?></td>
<td ><?=$Studid;?></td>
<td ><?=$Qualification;?></td>
<td ><?=$Year;?></td>
<td ><a href="edit.php?Sl=<?=$Sid?>"title="Edit">Edit</a></td>
</tr>
<?
	 }}
?>
</table>