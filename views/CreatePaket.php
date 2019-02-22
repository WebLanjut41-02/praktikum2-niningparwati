<!DOCTYPE html>
<html>
<head>
	<title>Input Paket</title>
</head>
<form action="<?php echo base_url()?>C_PaketPos/prosesInput" method="post">
	<table border="1px">
		<tr>
			<th>Input Paket</th>
		</tr>

		<tr>
			<td>
				Tanggal Datang
			</td>
			<td>
				<input type="date" name="datang" value="">
			</td>
		</tr>

		<tr>
			<td>
				Sasaran
			</td>
			<td>
				<input type="text" name="sasaran" value="">
			</td>
		</tr>

		<tr>
			<td>
				Penerima
			</td>
			<td>
				<input type="text" name="penerima" value="">
			</td>
		</tr>

		<tr>
			<td>
				Isi Paket
			</td>
			<td>
				<input type="text" name="isi" value="">
			</td>
		</tr>

		<tr>
			<td>
				Tanggal Ambil
			</td>
			<td>
				<input type="date" name="ambil" value="">
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