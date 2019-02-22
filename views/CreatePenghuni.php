<!DOCTYPE html>
<html>
<head>
	<title>Input Paket</title>
</head>
<form action="<?php echo base_url()?>C_Penghuni/prosesInput" method="post">
	<table border="1px">
		<tr>
			<th colspan="2">Input Penghuni</th>
		</tr>

		<tr>
			<td>
				Nama Penghuni
			</td>
			<td>
				<input type="text" name="namaPeng" value="">
			</td>
		</tr>

		<tr>
			<td>
				Unit
			</td>
			<td>
				<input type="text" name="unit" value="">
			</td>
		</tr>

		<tr>
			<td>
				Nomor KTP
			</td>
			<td>
				<input type="text" name="ktp" value="">
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<input type="submit" name="submit" value="SUBMIT">
			</td>
		</tr>

	</table>
</form>
<body>
</body>
</html>