<!DOCTYPE html>
<html>
<head>
	<title>Edit Penghuni</title>
</head>
<body>
	<form action="<?php echo base_url()?>C_Penghuni/prosesEditPenghuni">
		<table border="1px">
			<tr>
			<th>Edit Penghuni</th>
		</tr>

		<tr>
			<td>
				Nama Penghuni
			</td>
			<td>
				<input type="date" name="namaPeng" value="<?php echo $dataPenghuni[0]->namaPenghuni?>">
			</td>
		</tr>

		<tr>
			<td>
				Unit
			</td>
			<td>
				<input type="text" name="unit" value="<?php echo $dataPenghuni[0]->unit?>">
			</td>
		</tr>

		<tr>
			<td>
				Nomor KTP
			</td>
			<td>
				<input type="text" name="ktp" value="<?php echo $dataPenghuni[0]->KTP?>">
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<input type="submit" name="submit" value="SUBMIT">
			</td>
		</tr>

		</table>
	</form>
</body>
</html>