<?
include 'connect.php';

$Sl=$_REQUEST[Sl];
?>
<form name="f1" method="post" action="value1.php">
<input type="text" name="sid" id="sid" value="<?=$Sl;?>">
<table border="0" width="450px" align="center" bgcolor="green">
<tr>
<td align="right">emOTP:</td>
<td><input type="text" name="emOTP" id="emOTP"></td>
</tr>
<tr>
<td colspan="5" align="right">
<input type="submit" value="VERIFY">&nbsp&nbsp&nbsp&nbsp
 </td>  
</tr>
</table>
</form>
