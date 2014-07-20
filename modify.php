<html>
<body>
<?
	$connect = mysql_connect("localhost", "root", "2100");
	mysql_select_db("web", $connect);
?>

	<form action='./modify_action.php' method='POST'>
	        
<?
	$idx	 =$_GET['idx'];
        $query   = "select *from board where idx=$idx";
        $result  = mysql_query($query);
        $subject = mysql_result( $result, 0, 'subject' );
        $name    = mysql_result( $result, 0, 'name' );
        $content = mysql_result( $result, 0, 'content' );       	
	$email	 = mysql_result( $result, 0, 'email' );
	$count	 = mysql_result( $result, 0, 'count' );	
?>
<center>
<table width='600' border='1'>
<? printf("<input type = 'hidden' name='idx' value=%d>",$idx);?>

<tr>
<td>subject</td>  <td><input type='text' name='subject' size=80 value="<? printf($subject)?>" ></td>
</tr>

<tr>
<td>name   </td>  <td><input type='text' name='name' size=80 value="<? printf($name)?>"></td>
</tr>

<tr>
<td>e-mail  </td> <td><input type='text' name='email' size=80 maxlength=20 value=<? printf($email)?>></td>
</tr>

<tr>
<? printf("<td>content</td> <td><textarea name='content' rows='20' cols='80'>%s</textarea>",$content); ?>
</tr>

<tr>
<td>passwd</td>  <td><input type='password' name='passwd' size=80 maxlength=20></td></tr>

</table>
</form>		
	
	<input type='submit' value='submit'>
</html>
</body>
