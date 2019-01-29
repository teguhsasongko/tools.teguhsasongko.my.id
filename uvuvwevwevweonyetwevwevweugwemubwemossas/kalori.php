<html>
    <meta name="author" content="Teguh Tri Sasongko">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Kalkulator Kalori Harian">
    <meta name="keywords" content="Kalkulator Kalori Harian, Kalkulator Kalori, Cek Kalori Harian, Cek Kalori, Kalori">
 <body>
<center><h3 style="color:white;padding:2px;background:#5997f9;margin-top:0px;border:2px dashed white;">Kalkulator Kalori Harian</h3>
	<form method="post">
	Gender:
		<Select name="gender" ><br>
		<option>Pria</option>
		<option>Wanita</option>
		</select><br><br>
	Usia:
		<input name="age" type="text"> tahun.<br><br>
	Berat:
		<input name="weight" type="text">kgs.<br><br>
	Tinggi:
		<input name="height" type="text">cm.<br><br>
		<br><input type="Submit" value="Kalkulasi">
	

		<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
			$age= $_POST['age'];
			$weight= $_POST['weight'];
			$height = $_POST['height'];
			$calories="0.0215183";
			$gender= $_POST['gender'];
		
				switch ($gender){
					case 'Wanita':
						$gender= 655 + (9.6 * $weight ) + (1.8 * $height) - (4.7 * $age);
						echo "<p>Diperkirakan tingkat metabolisme harian Anda $gender </p>";
						echo "<p>Ini berarti Anda memerlukan sekitar $gender kalori per hari untuk menjaga berat badan Anda saat ini.</p>";

						break;
						case 'Pria':
							$gender=66 + (13.7 *$weight) + (5 * $height) - (6.8 * $age);
							echo "<p>Diperkirakan tingkat metabolisme harian Anda $gender </p>";
							echo "<p>Ini berarti Anda memerlukan sekitar $gender kalori per hari untuk menjaga berat badan Anda saat ini.</p>";			
				}
?>

	</form>
   </center>
  </body>
</html>