<html>
<body>


<center>
<form action='./write_action.php' method='POST'>

	
	<table width='600' border='1'>
	<tr>
	<td>subject</td>  <td><input type='text' name='subject' size=80 maxlength="20"></td>
	</tr>

	<tr>
	<td>name   </td>  <td><input type='text' name='name' size=80 maxlength="10"></td>
	</tr>
	<tr>
	<td>e-mail  </td> <td><input type='text' name='email' size=80 maxlength="20"></td> 
	</tr>
	
	<tr>
	<td>content</td>  <td><textarea name='content' rows='20'cols='80'></textarea></td>
</tr>
	<tr>
	<td>passwd </td>  <td><input type='password' name='passwd' size=80 maxlength="20"></td>
	</tr>	
	</table>

<input type='submit' value='submit'>
 
</form>
</center>
 

</body>
</html>
