<?
	$subject= $_POST['subject'];
	$content= $_POST['content'];
	$name	= $_POST['name'];
	$passwd = $_POST['passwd'];
	$email	= $_POST['email'];
	$content= nl2br($content);
	
	$connect = mysql_connect("localhost", "root", "2100");
	mysql_select_db("web" , $connect);
	
	$result = mysql_query("select *from board order by idx desc limit 1");	
	

	$idx 	= mysql_result($result, 0, 'idx')+1;
	$count 	= 0;
	
	if($subject == NULL || $name == NULL || $email == NULL || $content == NULL || $passwd == NULL )	
	{ echo'NOT blank';}
	else
	{	
		if(filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			$query 	= "insert into board values($idx, '$subject', '$content', '$name', NOW(), $count ,'$passwd','$email')";
			echo'write complte';
			echo'<br>';
		}
		else
		echo'NOT E-MAIL';
	}
	mysql_query($query);
	mysql_close($connect);

?>



<a href='./list.php'>list</a>


