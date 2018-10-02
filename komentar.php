<form action=" " method="post">
	<table>
		<tr>
			<td><input type="text" name="kalimat" placeholder="Masukan kalimat" style="width: 250px; height: 25px; border-radius: 10%; background-color: white"></td>
		</tr>
		<tr>
			<td style="padding-top: 10px"><center><input type="submit" name="submit" style="width: 55px; height: 23px; border-radius: 10%; background-color: lightgrey"></center></td>
		</tr>
	</table>
</form>
<?php 
	if (isset($_POST['submit'])) {
		$kalimat = $_POST['kalimat'];
		$pecah = explode(' ', $kalimat);
		$hitung = count($pecah);

		echo "<b>".$kalimat.".</b><br>";

		if ($hitung >= 5) {
			echo "ada ".$hitung." kata.";
			# code...
		}else{
			echo "ERROR!!! Kata kurang dari 5";
		}
		
	}
?>