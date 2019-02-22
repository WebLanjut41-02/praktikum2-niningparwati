<!DOCTYPE html>
<html>
<head>
	<title>List Penghuni</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>Nama Penghuni</th>
			<th>Unit</th>
			<th>Nomor KTP</th>
			<th>Update</th>
			<th>Tambah Penghuni</th>
		</tr>
			<?php $penghuni = $this->session->datapenghuni;

			foreach ($penghuni as $data) {

			 ?>
		<tr>
			<td><?php echo $data->namaPenghuni ?></td>
			<td><?php echo $data->unit ?></td>
			<td><?php echo $data->KTP ?></td>
			<td><a href="<?php echo base_url(); ?>C_Penghuni/EditPenghuni?ktp=<?php echo $data->KTP ?>">Edit</a></td>
			<td><a href="<?php echo base_url(); ?>C_Penghuni/InputPenghuni">Tambah Penghuni</a></td>
		</tr>
	<?php } ?>
	</table>
</body>
</html>