<?

include 'connect.php';
?>
<form name="f1" method="post" action="value4.php">

<table border="0" width="450px" align="center" bgcolor="yellow">
<tr>
<td colspan="5"><input type="button" value="Student's location"></td>
</tr>
<tr>
<td  align="right">Location:</td>
<td>
<select name="Location" id="Location">
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
 <td colspan="5"  align="right"><br>
<input type="submit" value="SUBMIT">&nbsp&nbsp&nbsp&nbsp
</td>
</tr>
</table>
</form>