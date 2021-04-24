<!DOCTYPE html>
<html>
<head>
	<title>Form Input</title>
</head>
<body>
	<form method="post" action="simpan.php"> <!--membuat form dengan method post, ketika form dikirim akan mengeksekusi file simpan.php -->
		<table>
			<tr> <td> NIM </td> <td> <input type="text" onkeyup="isi_otomatis()" name="nim"> </td> </tr><!--membuat isi cell dengan teks NIM dan input type text -->
			<tr> <td> NAMA </td> <td> <input type="text" name="nama"> </td> </tr> <!-- membuat isi cell dengan teks NIM dan input type text-->
			<tr> <td> JENIS KELAMIN </td> <td> <!--membuat baris dan isi cell teks jenis kelamin -->
				<input type="radio" name="jenis_kelamin" value="L"> Laki Laki <!--membuat isi cell dengan teks Laki-Laki dan input type radio -->
				<input type="radio" name="jenis_kelamin" value="P"> Perempuan <!-- membuat isi cell dengan teks perempuan dan input type radio-->
			</td> </tr>
			<tr> <td> JURUSAN </td> <td> <!-- membuat baris dan isi cell jurusan-->
				<select name="jurusan"> <!--membuat input type select option yang memiliki beberapa pilihan -->
					<option value="TEKNIK INFORMATIKA"> TEKNIK INFORMATIKA </option> 
					<option value="TEKNIK MESIN"> TEKNIK MESIN </option> 
					<option value="TEKNIK KIMIA"> TEKNIK KIMIA </option>
				</select>
				</td> </tr>
			<tr> <td> ALAMAT </td> <td> <input type="text" name="alamat"> </td> </tr> <!-- membuat cell dengan teks alamat dan input type text-->
			<tr> <td colspan="2"> <button type="submit" value="simpan"> SIMPAN </button> </td> </tr> <!--membuat input type submit untuk mengirimkan form -->
		</table>
	</form>
</body>
</html>