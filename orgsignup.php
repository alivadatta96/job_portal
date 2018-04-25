<?
include 'connect.php';
?>
<form name="f1" method="post" action="value.php">

<table border="0" width="450px" align="center" bgcolor="sky blue">
<tr>
<td colspan="5"><input type="button" value="Organisation's signup"></td>
</tr>
<tr>
<td  align="right">OrgName:</td>
<td colspan="3"><input type="text" name="OrgName" id="OrgName"></td> 
</tr>
<tr>
<td align="right">Contact:</td>
<td><input type="text" name="Contact" id="Contact"></td>
</tr>
<tr>
<td align="right">Email:</td>
<td><input type="text" name="Email" id="Email"></td>
</tr>
<tr>
<td align="right">Password:</td>
<td><input type="Password" name="Password" id="Password"></td>
</tr>
<tr>
<input type="hidden" name="OTP" id="OTP" value="<?=$OTP=rand(1000,9999);?>">
</tr>
<tr>
<td colspan="5" align="right"><br>
<input type="submit" value="SUBMIT">&nbsp&nbsp&nbsp&nbsp
 </td>  
</tr>
</table>
</form>
