<?
include 'connect.php';

?>

<form name="f1" method="post" action="qvalue.php">
<table border="0" width="450px" align="center" bgcolor="pink">
<tr>
<td  align="right">Exam:</td>
<td>
<select name="Exam" id="Exam">
<option value="">---Select---</option>
<?
$select=mysql_query("select * from main_exam") or die(mysql_error());;
      while($r1=mysql_fetch_array($select))   
	 {
		  $Exam=$r1['Exam'];
?>
<option value="<?=$Exam;?>"><?=$Exam;?></option>
<?
	 }
?>
</select>
</td>
</tr>
<tr>
<td align="right">Question:</td>
<td><input type="text" name="Question" id="Question"></td>
</tr>
<tr>
<td align="right">A:</td>
<td colspan="5"><input type="text" name="Option1" id="Option1"></td>
</tr>
<tr>
<td align="right">B:</td>
<td><input type="text" name="Option2" id="Option2"></td>
</tr>
<tr>
<td align="right">C:</td>
<td><input type="text" name="Option3" id="Option3"></td>
</tr>
<tr>
<td align="right">D::</td>
<td><input type="text" name="Option4" id="Option4"></td>
</tr>
<tr>
<td align="right">Answer:</td>
<td>
<select name="Answer" id="Answer">
<option value="">---Select---</option>
<option value="A">A</option>
<option value="B">B</option>
<option value="C">C</option>
<option value="D">D</option>
</select>
</td>
</tr>
<tr>
<td colspan="5" align="right"><br>
<input type="submit" value=" SUBMIT ">


 </td>
</tr>
</table>
</form>