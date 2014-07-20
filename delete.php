<html>
<body>
<?
	$connect = mysql_connect("localhost", "root", "2100");
	mysql_select_db("web" , $connect);

?>
	PASSWORD CHACK!!<br>
	<form action='./delete_action.php' method='POST'>
	<td align=center>password</td>
	<?
		$idx=$_GET['idx'];
		echo("<input type='hidden' name='idx' value=$idx>");
	?>	
	
	<td><input type='password' name='passwd' size=20 maxlength=20></td>

	<td><input type='submit' value='submit'></td>
	
	</form>
</body>
</html>

