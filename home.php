<!DOCTYPE html>
<html>
<head>
	<title>PHP Mailer</title>
</head>
<body>
	<form action="mail.php" method="post">
	<center>
		<table>
			<tr>
				<td colspan="2" align="center">
					Mailer
				</td>
			</tr>
			<tr>
				<td>
					To:
				</td>
				<td>
					<input type="text" name="tomail">
				</td>
			</tr>
			<tr>
				<td>
					Subject:
				</td>
				<td>
					<input type="text" name="subject">
				</td>
			</tr>
			<tr>
				<td>
					Content:
				</td>
				<td>
					<input type="text" name="content">
				</td>
			</tr>
			<tr>
				<td align="center">
					<input type="reset" name="reset" value="cancel">		
				</td>
				<td align="center">
					<input type="submit" name="submit" value="send">
				</td>
			</tr>
		</table>
	</center>
	</form>

</body>
</html>