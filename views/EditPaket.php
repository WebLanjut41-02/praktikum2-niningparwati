<!DOCTYPE html>
<html>
<head>
	<title>Edit Paket</title>
</head>
<body>
	<form action="<?php echo base_url()?>C_PaketPos/prosesEditPaket">
		<table border="1px">
			<tr>
			<th>Edit Paket</th>
		</tr>

		<tr>
			<td>
				Tanggal Datang
			</td>
			<td>
				<input type="date" name="datang" value="<?php echo $dataPaket[0]->tgl_datang?>">
			</td>
		</tr>

		<tr>
			<td>
				Sasaran
			</td>
			<td>
				<input type="text" name="sasaran" value="<?php echo $dataPaket[0]->sasaran?>">
			</td>
		</tr>

		<tr>
			<td>
				Penerima
			</td>
			<td>
				<input type="text" name="penerima" value="<?php echo $dataPaket[0]->penerima?>">
			</td>
		</tr>

		<tr>
			<td>
				Isi Paket
			</td>
			<td>
				<input type="text" name="isi" value="<?php echo $dataPaket[0]->isiPaket?>">
			</td>
		</tr>

		<tr>
			<td>
				Tanggal Ambil
			</td>
			<td>
				<input type="date" name="ambil" value="<?php echo $dataPaket[0]->tgl_ambil?>">
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