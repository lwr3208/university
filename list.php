<html>
<body>

<?
	$connect = mysql_connect("localhost" , "root" , "2100");
	mysql_select_db("web", $connect);
?>



<center>
<table width='600' border='2'>

<tr>
	<td>idx</td>
	<td>subject</td>
	<td>name</td>
	<td>date</td>
	<td>count</td>
</tr>

<?
	$result = mysql_query("select * from board");
	$total 	= mysql_num_rows($result);

	for( $i = $total-1; $i >= 0; $i-- )
	{	
		
		$idx     = mysql_result( $result, $i, 'idx');
		$subject = mysql_result( $result, $i, 'subject');
		$name    = mysql_result( $result, $i, 'name');
		$date	 = mysql_result( $result, $i, 'date');
		$count 	 = mysql_result( $result, $i, 'count');  		
		$fakeidx = $i+1;

		echo"<tr>";	
		echo"<td>$fakeidx</td>";
		echo"<td><a href='./view.php?idx=$idx'>$subject</a></td>";
		echo"<td>$name</td>";
		echo"<td>$date</td>";
		echo"<td>$count</td>";
		echo"</tr>";
	}

?>

</table>

<?
	mysql_close($connect);
?>

<a href='./write.php'>write</a>

</body>
</html>
