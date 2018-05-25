<!DOCTYPE html>
<html="en"
<head>
	<meta charset="UTS-8">
	<title>List Book</title>
	<link rel="stylesheet"href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"</script>
</head>
<body>
	<div class="container">
		<h2>Daftar Buku yang Tersedia</h2>
		<table class="table">
			<tr>
				<td>Kode Buku</td>
				<td>Judul Buku</td>
				<td>Pengarang Buku</td>
				<td>Penerbit Buku</td>
				<td>Edit</td>
				<td>Delete</td>
			</tr>
			<?php
			require("Library.php");
			$Lib = new Library();
			$Show = $Lib->showBooks();
			while($data = $show->fetch(PDO::FECTH_OBJ)){
				echo"
				<tr>
					<td>$data->kodeBuku</td>
					<td>$data->judulBuku</td>
					<td>$data->pengarang</td>
					<td>$data->penerbit</td>
					<td><a class='btn btn-danger' herf='list_buku.php?delete=$data->kodeBuku'>Delete</a></td>
					<td><a class='btn btn-info' href='edit_buku.php?kode=$daata->kodeBuku'>Edit</td>
				</tr>";
			};
			?>
		</table>
		<a href="input_buku.php" class="btn btn-success">Tambah Buku Baru</a>
	</div>
</body>
</html>
<?php
if(isset($_GET['delete'])){
	$del=$Lib->dleteBook($_GET['delete']);
	if($del == "Success"){
		header('Location: list_buku.php');
	}
}
?>