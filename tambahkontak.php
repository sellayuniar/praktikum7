<!DOCTYPE html>
<html>
<head>
	<title>Masukan Data Kontak </title>
</head>
<body>
	<form method="post" action="aksitambah.php">  <!--membuat form dengan method post, ketika form dikirim akan mengeksekusi file aksitambah.php -->
		<table>
			<tr> <td> ID </td> <td> <input type="text" onkeyup="isi_otomatis()" name="id"> </td> </tr> <!--membuat isi cell dengan teks ID dan input type text -->
			<tr> <td> NAMA </td> <td> <input type="text" name="nama"> </td> </tr> <!--membuat isi cell dengan teks Nama dan input type text -->
			<tr> <td> JENIS KELAMIN </td> <td> <input type="text" name="jenis_kelamin"> </td> </tr> <!--membuat isi cell dengan teks jenis kelamin dan input type text -->
			<tr> <td> EMAIL </td> <td> <input type="text" name="email"> </td> </tr> <!--membuat isi cell dengan teks email dan input type text -->
			<tr> <td> ALAMAT </td> <td> <input type="text" name="alamat"> </td> </tr> <!--membuat isi cell dengan teks Alamat dan input type text -->
			<tr> <td> KOTA </td> <td> <input type="text" name="kota"> </td> </tr> <!--membuat isi cell dengan teks Kota dan input type text -->
			<tr> <td> PESAN </td> <td> <input type="text" name="pesan"> </td> </tr> <!--membuat isi cell dengan teks Pesan dan input type text -->

			<tr> <td colspan="2"> <button type="submit" value="simpan"> SIMPAN </button> </td> </tr> <!--membuat input type submit untuk mengirimkan form -->
		</table>
	</form>
</body>
</html>