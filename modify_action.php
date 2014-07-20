<html>
<body>
<?
	$idx	 =$_POST['idx'];
	$subject =$_POST['subject'];
	$name	 =$_POST['name'];
	$email	 =$_POST['email'];
	$content =$_POST['content'];
	$passwd	 =$_POST['passwd'];	

	$connect =mysql_connect("localhost", "root", "2100");
	mysql_select_db("web",$connect);
	
	$query	    ="select *from board where idx=$idx";
	$result     =mysql_query($query);
	$db_passwd  =mysql_result( $result, 0, 'passwd' ); 
	
	if($passwd != $db_passwd)
	echo"passwd mismatch";
	
	else
	{
		$result ="update board set subject='$subject', content='$content', name='$name', date=NOW(), email='$email' where idx=$idx";
		mysql_query($result);
		echo'complete modification';
		echo'<br>';
	}

		mysql_close($connect);
?>

<a href='list.php'>list</a>
</body>
</html>
