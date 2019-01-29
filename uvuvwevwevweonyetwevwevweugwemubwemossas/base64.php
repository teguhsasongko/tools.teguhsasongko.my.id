    <meta name="author" content="Teguh Tri Sasongko">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Base64 Encode and Decode">
    <meta name="keywords" content="Base64 Encode and Decode, Base64 Encode, Base64 Decode, Encode and Decode, Encode, Decode, Base64">

<center>
<h3 style="color:white;padding:2px;background:#5997f9;margin-top:0px;border:2px dashed white;">Base64 Encode/Decode</h3>
<form name="data" method="post">
<textarea  name="res7ock" cols='50' rows='12'placeholder="Masukan Text"></textarea><br>
<input type="submit" name="en" value="encode">
<input type="submit" name="de" value="decode" ><br><br>


<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$md= $_POST['res7ock'];
if (isset($_POST['en'])){
	echo"<textarea>";
	echo  base64_encode($md);
	echo"</textarea>";
}
else{
	echo"<textarea>";
	echo  base64_decode($md);
	echo"</textarea>";
}
?>
</form>
</center>