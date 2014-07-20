<?
	$passwd	 = $_POST['passwd'];
	$idx	 = $_POST['idx'];	
	$connect = mysql_connect("localhost", "root", "2100");
	mysql_select_db("web", $connect);


	$query	 ="select *from board where idx=$idx";	
	$result  = mysql_query($query);

	mysql_query("delete from board where idx=$idx");
	
	mysql_close($connect);	
?>

<a href='./list.php'>list</a>




