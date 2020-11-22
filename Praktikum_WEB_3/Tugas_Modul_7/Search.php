<html>
<head>
</head>
<body>
	<div>
		<h3> Data</h3>
		<table border="1" cellpadding="3px">
			<th>
				<tr>
					<th>NRP</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>ID Jurusan</th>
				</tr>
			</th>
		<td>
<?php
include 'koneksi.php';
if(isset($_POST["search"])){
	$search = $_POST['keyword'];
	$sql = "SELECT * FROM mahasiswa WHERE Nama like '%$search%'";
	$query = mysqli_query($koneksi, $sql) or die (mysqli_error());
}
				
$jumlah = mysqli_num_rows($query);
echo "<br>";
echo "Data Ditemukan: $jumlah";
echo "<br>";
while ($baris = mysqli_fetch_array($query)) {
echo "<tr>
	<td>$baris[0]</td>
	<td>$baris[1]</td>
	<td>$baris[2]</td>
	<td>$baris[3]</td>
	</tr>";

}
?>
		</td>
	</table>
</div>
</body>
</html>