<?

	$connect = mysql_connect("localhost", "root", "2100");
	mysql_select_db("web", $connect);
?>
<?
	$idx	 = $_GET['idx'];
	$query	 = "select * from board where idx=$idx";
	$result	 = mysql_query($query);

	$subject = mysql_result( $result, 0, 'subject' );
	$name    = mysql_result( $result, 0, 'name' );
	$email	 = mysql_result( $result, 0, 'email' );
	$content = mysql_result( $result, 0, 'content' );
	$date	 = mysql_result( $result, 0, 'date' );
	$count	 = mysql_result( $result, 0, 'count' );
	$query	 = "update board set count=(count+1) where idx=$idx";
	$result	 = mysql_query($query);

	mysql_close( $connect );
?>
<html>
<body>
	<center>
	<table width='400' border='1'>
	<tr>    
                <td>idx</td>
                <td><? echo"$idx"; ?></td>
        </tr>
	<tr>    
                <td>name</td>
                <td><? echo"$name"; ?></td>
        </tr>
	<tr>
		<td>e-mail</td>
		<td><? echo"$email"; ?></td>
	</tr>
	<tr>
		<td>date</td>
		<td><? echo"$date"; ?></td>
	</tr>
	<tr>
		<td>content</td>
		<td><? echo$content; ?></td>
	</tr>
	<tr>
		<td>count</td>
		<td><? echo$count; ?></td>
	</tr>
 
	</table>
	<a href='./list.php'>list</a>
	<?echo"<td><a href='./modify.php?idx=$idx'>modify</a></td>";?>
	<?echo"<td><a href='./delete.php?idx=$idx'>delete</a></td>";?>
</body>
</html>
