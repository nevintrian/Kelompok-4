<!DOCTYPE html>
<html>
	<head>
		<title>Input Pemesanan Tiket Travel</title>
		<link rel="icon" type="img/png" href="img/logo.png" class="rounded-circle">
	</head>
	<body>
		<h3 align="center">INPUT PEMESANAN TIKET TRAVEL</h3>
		<center><a href="index.php">&Lt; Tabel Pemesanan Tiket Travel</a></center></br>
		<fieldset style="width: 50%; margin: auto;">
			<legend>Form Input Pemesanan Tiket Travel</legend>
		<form action="simpan.php" method="post">
		<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"required=required placeholder='nama lengkap'></td>
		</tr>
		<tr>
			<td>jurusan</td>
			<td>:</td>
			<td><select name="jurusan" id="jurusan" class="form-control" onchange='changeValue(this.value)' required>
  			<option value="">-Pilih-</option>
			<?php
			$koneksi = mysqli_connect("localhost","root","","bismillahyaallah");
            $result = mysqli_query($koneksi, "SELECT * FROM jurusan ORDER BY jurusan asc");
            $result = mysqli_query($koneksi, "SELECT *FROM jurusan");    
			$jsArray = "var prdName = new Array();\n";
			while($row = mysqli_fetch_assoc($result))
  			 {
				echo '<option name="jurusan"  value="' . $row['jurusan'] . '">' . $row['jurusan'] . '</option>';  
				$jsArray .= "prdName	['" . $row['jurusan'] . "'] = {harga:'" . addslashes($row['harga']) . "',jam:'". addslashes($row['jam'])."'};\n";
				
			}
			
		 ?>
				   </select>
			</td>
			
			<td>Jumlah Tiket</td>
			<td>:</td>
			<td><input type="number" name="Jumlah_Tiket"required=required placeholder='Jumlah Tiket'></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="text" name="berangkat"required=required placeholder='Alamat'></td>
			<td>Tanggal</td>
			<td>:</td>
			<td><input type="date" name="tanggal_berangkat"required=required placeholder='ex:YYYY-MM-DD'></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td>:</td>
			<td><input class="form-control"  name="harga" id="harga" readonly placeholder='harga tiket'> </td>
			
			<td>jam keberangkatan</td>
			<td>:</td>
			<td><input class="form-control"  name="jam" id="jam" readonly placeholder='jam keberangkatan'> 	 </td>
		</tr>
        <tr>
            <td><input type="submit" value="Simpan" /></td>
            <td><input type="reset" value="Reset" onclick="return confirm('hapus data yang telah diinput?')"></td>
        </tr>
		</table>
    </form>
	</fieldset>
	
	</body>
</html>
<script type="text/javascript"> 
<?php echo $jsArray; ?>
function changeValue(id){
    document.getElementById('harga').value = prdName[id].harga;
	document.getElementById('jam').value = prdName[id].jam;
};
</script>