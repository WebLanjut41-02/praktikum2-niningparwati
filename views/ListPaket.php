<!DOCTYPE html>
<html>
<head>
	<title>List Paket</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Tanggal Datang</th>
			<th>Sasaran</th>
			<th>Penerima</th>
			<th>Isi Paket</th>
			<th>Tanggal Ambil</th>
			<th>Update</th>
			<th>Tambah Paket</th>
		</tr>
			<?php $paket = $this->session->datapaket;

			foreach ($paket as $data) {

			 ?>
		<tr>
			<td><?php echo $data->id ?></td>
			<td><?php echo $data->tgl_datang ?></td>
			<td><?php echo $data->sasaran ?></td>
			<td><?php echo $data->penerima ?></td>
			<td><?php echo $data->isiPaket ?></td>
			<td><?php echo $data->tgl_ambil ?></td>
			<td><a href="<?php echo base_url(); ?>C_PaketPos/EditPaket?IdPaket=<?php echo $data->id ?>">Edit</a></td>
			<td><a href="<?php echo base_url(); ?>C_PaketPos/InputPaket">Tambah Paket</a></td>
		</tr>
	<?php } ?>
	</table>
</body>
</html>