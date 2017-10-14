<!DOCTYPE html>
<html>
<head>
	<title>PHP Mailer</title>
</head>
<body>
	<form action="set.php" method="post">
		<center>
			<table>
				<tr>
					<td colspan="2" align="center">
						LOGIN
					</td>
				</tr>
				<tr>
					<td>
						Mail id:
					</td>
					<td>
						<input type="text" name="mailid" required>
					</td>
				</tr>
				<tr>
					<td>
						Password:
					</td>
					<td>
						<input type="Password" name="password" required>
					</td>
				</tr>
				<tr>
					<td align="center">
						<input type="reset" name="reset" value="cancel">
					</td>
					<td align="center">
						<input type="submit" name="submit" value="Login">
					</td>
				</tr>
			</table>
		</center>				
	</form>
</body>
</html>
