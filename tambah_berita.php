<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<h2> Tambah Berita</h2>
	<form action="perintah/kelola_berita.php?aksi=tambah" method="post" enctype="multipart/form-data" name="form1">
		<table width="100%" border="1" cellspacing="0" cellpadding="0"> 
			<tr>    
				<td>Judul</td> 
				<td>
					<input type="text" name="judul">
				</td>  
			</tr>  
			<tr>   
				<td>Kategori Berita</td>   
				<td> <select name="kategori"> <option value="">-pilih</option>
					<?php $query=mysql_query("select*from kategori");while($kategori=mysql_fetch_array($query)){echo "<option value='$kategori[id_kategori]'>$kategori[kategori]</option>";}?></select>
				</td>  
			</tr>  
			<tr>
				  <td>Gambar</td>  
				<td><input type="file" name="gambar"></td>
			</tr>  
			<tr>   
				<td>Teks</td> 
				<td><textarea name="teks"></textarea>
				</td>
			 
			</tr>  
			<tr>   
				<td><button type="submit"> Simpan </button></td>   
				<td><button type="button" onClick="location=('admin.php?tampilan=kelola_berita')"> Kembali </button></td> 
			</tr>
		</table>
	</form>
</body>
</html>