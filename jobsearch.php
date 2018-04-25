<?
$reqlevel=1;
include 'ck.php';
?>
<table border="0" align="center" width="800px">
<tr>
<th align="center" width="5%">Sl.</th>
<th align="center" width="5%">Exam</th>
<th align="center" width="5%">Sid</th>
<th align="center" width="5%">Date</th>
<th align="center" width="5%">Question</th>
<th align="center" width="50%">Answer</th>
<th align="center" width="20%">Studanswer</th>
<th align="center" width="10%">Status</th>

</tr>
<?
$select=mysql_query("select * from exam_app where Status='3' and Sid='$user_currently_loged'");
      while($r1=mysql_fetch_array($select))   
	 {		$f++;
 $eid=$r1['Eid'];
$f=0;
date_default_timezone_set('Asia/Kolkata');
$dt1 = date('Y-m-d');
$select1=mysql_query("select stud_question.Sid,stud_question.Date,stud_question.Answer,stud_question.Studanswer,stud_question.status,exam_question.Question from stud_question where stud_question.Sid='$user_currently_loged' and stud_question.Esl='$eid' and stud_question.Qsl=exam_question.Sl");
      while($r2=mysql_fetch_array($select1))   
	 {		$f++;
      	
		  
		  $f2=$r2['Sid'];
		  $f3=$r2['Date'];
			 
		  $f5=$r2['Answer'];
		  $f6=$r2['Studanswer'];
		  $f7=$r2['status'];
		  $qstn=$r2['Question'];
		
	if($f%2==0)
	{
		$color="#2FDCC1";

		}
		else
		{
			$color="#9BFC6E";
		}
	
	 ?>
<tr bgcolor="<?=$color;?>">
<td ><?=$f;?></td>
<td ><?=$f1;?></td>
<td ><?=$f2;?></td>
<td ><?=$f3;?></td>
<td ><?=$qstn;?></td>
<td ><?=$f5;?></td>
<td ><?=$f6;?></td>
<td ><?=$f7;?></td>
</tr>
<?
	 }
?>
<?
	 }
	 ?>

	 
</table>