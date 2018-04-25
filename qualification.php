<?
include 'connect.php';

?>
<form name="f1" method="post" action="qvalue.php">
<table border="0" width="300px" align="center" bgcolor="orange">
<tr>
<td  align="right">Qualification:</td>
<td colspan="4"><input type="text" name="Qualification" id="Qualification"></td> 
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
<th align="center" width="30%">Qualification</th>
<th align="center" width="2%">Edit.</th>
</tr>
<?
$f=0;
$select=mysql_query("select * from qualification order by Sl");
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
		  $Qualification=$r1['Qualification'];
		  $Edit=$r1['Edit'];
		  
		  

?>
<tr bgcolor="<?=$clr;?>">
<td ><?=$f;?></td>
<td ><?=$Qualification;?></td>
<td ><a href="edit.php?Sl=<?=$Sid?>"title="Edit">Edit</a></td>
</tr>
<?
	 }
?>
</table>