<html>
<title>Form Upload</title>
<body background = "musik.jpg">
<center>    
<form enctype="multipart/form-data" method="POST" action="querytf2.php">
File yang di upload : <input type="file" name="fupload"><br>
Deskripsi File : <br>
<textarea name="deskripsi" rows="8" cols="40"></textarea><br>
<input type=submit value=Upload>
<a href="index.php"><input type="button" value="<< Kembali"/></a>
</form>
</center>   
<br>