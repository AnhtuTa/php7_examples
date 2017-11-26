<html>
	<head>
		<title>thuc hanh php buoi 2</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<table>
			<form action="bai2-1.php" method="get">
				<tr>
					<td>Province</td>
					<td>
						<select name="province">
							<option value="HAN">Ha Noi</option>
							<option value="HCM">Ho Chi Minh</option>
							<option value="HUE">Hue</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Industry</td>
					<td>
						<select name="industry" multiple>
							<option value="AUT">Automobile</option>
							<option value="FOO">Foods</option>
							<option value="ENG">Enginering</option>
							<option value="GAR">Garment</option>
							<option value="FB">Facebook</option>
							<option value="TT">Twitter</option>
							<option value="YT">Youtube</option>
							<option value="GL">GooglePlus</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="submit" value="Submit"></td>
				</tr>
			</form>
		</table>

	</body>
</html>

