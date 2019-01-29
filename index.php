<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0>
    <meta name="author" content="Teguh Tri Sasongko">
    <meta name="description" content="Teguh Tri Sasongko">
    <meta name="keywords" content="Teguh Tri Sasongko, Teguh Sasongko, Teguhsasongko, Official Website Teguh Tri Sasongko, Official Website Teguh Sasongko, Official Website Teguhsasongko, Official Website">
    <meta property="og:image" content="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmEobQZq9r_Gs31lpNVY3VXMAXzA3xnFRfqyvoUNx5ovTPspgT"/>
    <title>Teguh Tri Sasongko | Priv8 Tools</title>
    <link rel="shortcut icon" href="http://github.com/fluidicon.png">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

<style>
@import url("https://fonts.googleapis.com/css?family=Pacifico|Roboto");
body {
  margin: 5px;
  padding: 5px;
  font-family: 'Roboto', sans-serif;
  background: #428bca;
  text-decoration: none;
}a {
    text-decoration: none;
    color: black;
}th {
    background: #4685ea;
    color:#000;
}td {
    border-bottom: 1px solid #4685ea;
    padding: 3px;
}h1.logo {
  color: #fff;
  font-family: 'Pacifico', cursive;
  font-size: 3em;
}h3.logo {
  color: #fff;
  font-family: 'Pacifico', cursive;
  font-size: 3em;
}#container {
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: top;
  align-items: center;
}#form-box {
  background: #fff;
  position: flex;
  width: 800px;
  box-shadow: 0 16px 24px rgba(0, 0, 0, 0.1), 0 6px 10px 5px rgba(0, 0, 0, 0.1), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
  transition: transform 0.1s ease-in-out;
}#form-box.close {
  overflow: hidden;
  transition: 0.8s ease-in-out;
  box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0);
}#tgh { 
  border: 2px solid white;
  color: white  ;
  margin: 10px;
  padding: 4px;

}#hal{
    margin-left:20px auto 0 auto;
    margin-right:20px auto 0 auto;
    width: 100%;
}#center {
    text-align: center;
}select { 
  background: #000;
    border: 2px solid blue;
    margin: 4px;
    padding: 4px;
    color: black;
  font-family: 'Roboto', sans-serif;
}textarea { 
  background: #a8c9ff;
    border: 2px solid #0000ff;
    margin: 4px;
    padding: 4px;
    color: #4685ea;
    height: 150px;
    width: 500px;
  font-family: 'Roboto', sans-serif;
 }input[type=text], input[type=file]{ 
  background: #a8c9ff;
    border: 2px solid #0000ff;
    margin: 4px;
    padding: 4px;
    color: black;
    width: 500px;
  font-family: 'Roboto', sans-serif;
}input[type=submit] { 
    border: 2px solid #4685ea;
    background: #4685ea;
    margin: 4px;
    padding: 4px;
    color: #fff;
  font-family: 'Roboto', sans-serif;
    width: 500px;
}footer {
  clear: both;
  text-align: center;
  position: fixed;
  left: 0px;
  right: 0px;
  bottom: 0px;
  color: #ffffff;
  background: #609cff;
  font-weight: bold;
}
</style>

  
</head>

<body>
  <div id="container">
  <h1 class="logo">TeguhSasongko - Tools Online</h1>
<center><a id="tgh" href="index.php">Home</a> <a id="tgh" href="index.php?tools">Tools</a> <a id="tgh" href="index.php?about">About</a> <a id="tgh" href="?contact">Contacts</a></center> <br> 

  <div id="form-box">
<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
// error_reporting(0);
if(isset($_GET['tools'])){ 
  echo tools(); 
}elseif(isset($_GET['base64'])){ 
  include 'uvuvwevwevweonyetwevwevweugwemubwemossas/base64.php';
}elseif(isset($_GET['css2js'])){ 
  include 'uvuvwevwevweonyetwevwevweugwemubwemossas/css2js.php';
}elseif(isset($_GET['color-remixer'])){ 
  include 'uvuvwevwevweonyetwevwevweugwemubwemossas/color-remixer.php';
}elseif(isset($_GET['dec-bin-hex-oct-calculator'])){ 
  include 'uvuvwevwevweonyetwevwevweugwemubwemossas/dec-bin-hex-oct.php';
}elseif(isset($_GET['email-ekstraktor'])){ 
  include 'uvuvwevwevweonyetwevwevweugwemubwemossas/email-ekstraktor.php';
}elseif(isset($_GET['excel2html'])){ 
  include 'uvuvwevwevweonyetwevwevweugwemubwemossas/excel2html.php';
}elseif(isset($_GET['geo-location'])){ 
  include 'uvuvwevwevweonyetwevwevweugwemubwemossas/geo-location.php';
}elseif(isset($_GET['hex-to-rgba'])){ 
  include 'uvuvwevwevweonyetwevwevweugwemubwemossas/hex-to-rgba.php';
}elseif(isset($_GET['ig-downloader'])){ 
  include 'uvuvwevwevweonyetwevwevweugwemubwemossas/ig-downloader.php';
}elseif(isset($_GET['ip-lookup'])){ 
  include 'uvuvwevwevweonyetwevwevweugwemubwemossas/ip-lookup.php';
}elseif(isset($_GET['json-php-array-convert'])){ 
  include 'uvuvwevwevweonyetwevwevweugwemubwemossas/json-php-array-convert.html';
}elseif(isset($_GET['kalori'])){ 
  include 'uvuvwevwevweonyetwevwevweugwemubwemossas/kalori.php';
}elseif(isset($_GET['kk-nik-gen'])){ 
  include 'uvuvwevwevweonyetwevwevweugwemubwemossas/kk-nik-gen.php';
}elseif(isset($_GET['port-scanner'])){ 
  include 'uvuvwevwevweonyetwevwevweugwemubwemossas/port-scanner.php';
}elseif(isset($_GET['remove-dup-text'])){ 
  include 'uvuvwevwevweonyetwevwevweugwemubwemossas/remove-dup-text.php';
}elseif(isset($_GET['reverse-ip'])){ 
  include 'uvuvwevwevweonyetwevwevweugwemubwemossas/reverse-ip.php';
}elseif(isset($_GET['system-info'])){ 
  include 'uvuvwevwevweonyetwevwevweugwemubwemossas/system-info.php';
}elseif(isset($_GET['teknik-convert'])){ 
  include 'uvuvwevwevweonyetwevwevweugwemubwemossas/teknik-convert.php';
}elseif(isset($_GET['wiki-search'])){ 
  include 'uvuvwevwevweonyetwevwevweugwemubwemossas/wiki-search.php';
}elseif(isset($_GET['wordcount'])){ 
  include 'uvuvwevwevweonyetwevwevweugwemubwemossas/word-counter.php';
}

// about

elseif(isset($_GET['about'])){ 
  echo "<center>~ We Are ~ <br>
    RES7OCK CREW ~ More Skill. Less Judgement<br>    LDera - nemat0da - ./Html404 - HYTHAN7 - Unnamed48 - B0L4NG - 1337vairusa - MBuL-48 - UstadCage_48 - ./MR.GLADz404 - MR_X16 - M0NST3R-P1NK - ./S3CRETSYST3M
</center>";

}elseif(isset($_GET['contact'])){ 
$nama = htmlspecialchars($_POST['nama']);
$email = htmlspecialchars($_POST['email']);
$judul = htmlspecialchars($_POST['judul']);
$pesan = htmlspecialchars($_POST['pesan']);
if($_POST['submit']) {
  if(!filter_var($email, FILTER_VALIDATE_EMAIL) === true) {
    $s = "emailmu ga valid boss.";
  } else {
    if(@mysqli_query($conn, "INSERT INTO gus_tools_request (nama, email, judul, pesan) VALUES ('".$nama."', '".$email."', '".$judul."', '".$pesan."')")) {
      $s = "Thanks for contact me ^_^ ^^<br>";
      $pesan_email = "Dari: $nama ($email)\nJudul: $judul\n\n$pesan\n";
      mail("teguhsasongko99@gmail.com","Kontak dari Web Tools [ $judul ]", $pesan_email);
    } else {
      $s = "<font color=red>Gagal Mengirim.</font><br>";
    }
  }
}
?>
<center><h3 style="color:white;padding:2px;background:#5997f9;margin-top:0px;border:2px dashed white;">Contact Me</h3>
<div class="box-request">
<div class="head-request">
</div>
<form method="post">
<input type="text" name="nama" placeholder="Nama" autocomplete="off" required><br>
<input type="text" name="email" placeholder="email_mu@email.com" autocomplete="off" required><br>
<input type="text" name="judul" placeholder="Judul" autocomplete="off" required><br>
<textarea name="pesan" placeholder="Pesan"></textarea><br>
<input type="submit" name="submit" value="Kirim">
</form>
<?php echo $s; ?>
</div>
  <?php
} else {
  echo "<center><h1 id='h1'>  
</h1>
    <script>
    var sentence = 'Hello, Welcome to my Webtools :)'

var h1 = document.getElementById('h1')

var i = 0
var writting = setInterval(function () {
   
   if (i === sentence.length) {
      // i = 0;
      // h1.innerHTML = '';
      clearInterval(writting);
   } else {
      h1.innerHTML += sentence[i];
      i++;
   }
   
}, 100);

console.log(sentence.length)
</script>
<h3>Sedang dalam proses pembuatan...... Kami Selalu terima saran dan kritikan anda.<br>
<p>Jika Kalian ingin me-request tools, silakan ke <a href='?contact'>Sini</a>
</center>
  ";
}function tools(){
  echo "
  <table id='hal'>
  <tr><th>#</th><th>Name</th><th>Status</th></tr>
  <tr><td id='center'>#</td><td><a href='index.php?base64'>Base64 Encode/Decode</td><td id='center'><font color='green'>Aktif</font></td></tr>
  <tr><td id='center'>#</td><td><a href='index.php?css2js'>Convert CSS to Inline JS Style</td><td id='center'><font color='green'>Aktif</font></td></tr>
  <tr><td id='center'>#</td><td><a href='index.php?color-remixer'>Color Remixer</td><td id='center'><font color='green'>Aktif</font></td></tr>
  <tr><td id='center'>#</td><td><a href='index.php?dec-bin-hex-oct-calculator'>Dec + Bin + Hex + Oct Calculator
</td><td id='center'><font color='green'>Aktif</font></td></tr><tr><td id='center'>#</td><td><a href='index.php?email-ekstraktor'>Email List Ekstraktor by Domain Name</td><td id='center'><font color='green'>Aktif</font></td></tr>
  <tr><td id='center'>#</td><td><a href='index.php?excel2html'>Excel ke Tabel HTML</td><td id='center'><font color='green'>Aktif</font></td></tr>
  <tr><td id='center'>#</td><td><a href='index.php?tools=geo-location'>Geo Location</td><td id='center'><font color='green'>Aktif</font></td></tr>
  <tr><td id='center'>#</td><td><a href='index.php?hex-to-rgba'>Converter HEX to RGBA</td><td id='center'><font color='green'>Aktif</font></td></tr>
  <tr><td id='center'>#</td><td><a href='index.php?ig-downloader'>Instagram Downloader</td><td id='center'><font color='red'>Non-Aktif</font></td></tr>
  <tr><td id='center'>#</td><td><a href='index.php?ip-lookup'>IP Lookup</td><td id='center'><font color='green'>Aktif</font></td></tr>
  <tr><td id='center'>#</td><td><a href='index.php?json-php-array-convert'>JSON/PHP Array Converter</td><td id='center'><font color='green'>Aktif</font></td></tr>
  <tr><td id='center'>#</td><td><a href='index.php?kalori'>Kalkulator Kalori Harian</td><td id='center'><font color='green'>Aktif</font></td></tr>
  <tr><td id='center'>#</td><td><a href='index.php?kk-nik-gen'>KK dan NIK GENERATOR</td><td id='center'><font color='green'>Aktif</font></td></tr>
  <tr><td id='center'>#</td><td><a href='index.php?port-scanner'>Port Scanner</td><td id='center'><font color='green'>Aktif</font></td></tr>
  <tr><td id='center'>#</td><td><a href='index.php?remove-dup-text'>Remove Duplicate text</td><td id='center'><font color='green'>Aktif</font></td></tr>
  <tr><td id='center'>#</td><td><a href='index.php?reverse-ip'>Reverse IP</td><td id='center'><font color='green'>Aktif</font></td></tr>
  <tr><td id='center'>#</td><td><a href='index.php?system-info'>System Info</td><td id='center'><font color='green'>Aktif</font></td></tr>
  <tr><td id='center'>#</td><td><a href='index.php?teknik-convert'>Engineering Unit Converter</td><td id='center'><font color='green'>Aktif</font></td></tr>
  <tr><td id='center'>#</td><td><a href='index.php?wiki-search'>WikiPedia Search</td><td id='center'><font color='green'>Aktif</font></td></tr>
  <tr><td id='center'>#</td><td><a href='index.php?wordcount'>Word Counter</td><td id='center'><font color='green'>Aktif</font></td></tr>
  </table>
  ";
}
?>
    </div>
  </div>
<br><br><br><br><br><br>  
</div>
  
  

</body>
<footer><a href="https://tools.teguhsasongko.my.id/"><font color="#af0800">teguhsasongko.my.id</font></a> &copy 2018 - Teguh Tri Sasongko</footer>
</html>
