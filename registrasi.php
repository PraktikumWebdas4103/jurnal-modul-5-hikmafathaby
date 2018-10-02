<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body>
	<form  method="POST">
	<table>
		<tr>
			<td>NIM</td>
			<td><input type="text" name="nim" minlength="10" maxlength="10" placeholder="Nomor Identitas" style="width: 160px; height: 18px; border-radius: 10%"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" maxlength="25" placeholder="Nama Lengkap" style="width: 160px; height: 18px; border-radius: 10%"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email" placeholder="Eg: oreo@gmail.com" style="width: 160px; height: 18px; border-radius: 10%"></td>
		</tr>
		<tr>
			<td></td>
			<td style="padding-top: 10px"><center><input type="submit" name="regist" value="Daftar" style="width: 55px; height: 23px; border-radius: 10%; background-color: white"></center></td>
		</tr>
 	</table>
 </form>

 <?php
 include 'prosesregris.php';
 if (isset($_POST['regist'])) {
     $nim=$_POST['nim'];
     $nama=$_POST['nama'];
     $email=$_POST['email'];
   
      $sql="INSERT INTO mhsform VALUES ('$nim','$nama','$email')";
      $yeay = mysqli_query($conn,$sql);
    if($yeay){
      echo "Database sudah masuk";
    }else{
      echo "error";
    }
}

 ?>
</body>
</html>

