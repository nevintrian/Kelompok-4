<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'perumahan'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}


$sql ='SELECT profil.KD_PROFIL, profil.KD_USER, profil.KD_profil.NAMA, profil.TGL_LAHIR, profil.JENIS_KELAMIN, profil_detil.NO_TELEPON, profil.FOTO
FROM profil, profil_detil, user
WHERE user.KD_USER=profil.KD_PROFIL, profil.KD_PROFIL=profil_detil.KD_PROFIL';

$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
echo '<table>
		<thead>
			<tr>
				<th>KD_CLUSTER</th>
				<th>nama</th>
				<th>tipe</th>
                <th>stok</th>
                <th>harga</th>
			</tr>
		</thead>
		<tbody>';

while ($row = mysqli_fetch_array($query))
{
	echo '<tr>
			<td>'.$row['KD_PERUM'].'</td>
            <td>'.$row['NAMA_PERUM'].'</td>
            <td>'.$row['KD_CLUSTER'].'</td>
            <td>'.$row['NAMA_CLUSTER'].'</td>
            <td>'.$row['TIPE'].'</td>
            <td>'.$row['STOK'].'</td>
            <td>'.$row['HARGA'].'</td>
            
            
		</tr>';
}
echo "<td><img src='images/".$row['GAMBAR']."' width='100' height='100'></td>";
echo '
	</tbody>
</table>';

// Apakah kita perlu menjalankan fungsi mysqli_free_result() ini? baca bagian VII
mysqli_free_result($query);

// Apakah kita perlu menjalankan fungsi mysqli_close() ini? baca bagian VII
mysqli_close($conn);