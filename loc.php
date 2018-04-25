<?
include 'connect.php';

?>
<form name="f1" method="post" action="lvalue.php">
<table border="0" width="300px" align="center" bgcolor="pink">
<tr>
<td  align="right">Location:</td>
<td colspan="4"><input type="text" name="Location" id="Location"></td> 
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
<th align="center" width="30%">Location</th>
<th align="center" width="2%">Edit.</th>
</tr>
<?
$f=0;
$select=mysql_query("select * from location order by Sl");
      while($r1=mysql_fetch_array($select))   
	 {		$f++;
        if($f%2==0)
		{
				$clr="#63A6B8";
		}
		else
		{
			$clr="#DEB5E3";
		}
		  $Location=$r1['Location'];
		  $Edit=$r1['Edit'];
		  
		  

?>
<tr bgcolor="<?=$clr;?>">
<td ><?=$f;?></td>
<td ><?=$Location;?></td>
<td ><a href="edit.php?Sl=<?=$Sid?>"title="Edit">Edit</a></td>
</tr>
<?
	 }
?>
</table>