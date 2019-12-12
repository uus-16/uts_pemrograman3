<?php
//fungsi untuk menggabungkan file
include("koneksiuts.php");
if (isset($_POST['simpan'])) {
	$query_input_cuti = "insert into t_cuti(nik,nama,jabatan,hak_Cuti)values
	('" . $_POST['nik'] . "',
	 '" . $_POST['nama'] . "',
     '" . $_POST['jabatan'] . "',
     '" . $_POST['hakCuti'] . "')";
	$proses_data =mysqli_query($conn,$query_input_cuti);
if ($proses_data){
		 echo 'SUCCESS';
	 } else {
		 echo mysqli_error();
	 }
}
?>

<form method="POST" action="">
	<table>
		<tr>
			<td>Nik</td>
			<td><input name="nik" type="text"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input name="nama" type="text"></td>
		</tr>
		<tr>
			<td>Jabatan</td>
			<td><input name="jabatan" type="text"></td>
		</tr>
		<tr>
			<td>Cuti</td>
			<td><input name="hakCuti" type="number"></td>
		</tr>
		<tr>
			<td><input name="simpan" type="submit"></td>
		</tr>
		<button><a href="viewuts.php">tampilkan data</a></button>
	</table>
</form>