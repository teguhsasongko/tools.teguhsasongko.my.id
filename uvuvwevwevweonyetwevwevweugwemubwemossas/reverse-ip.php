<?php
error_reporting(0);
if(isset($_POST['ipordom'])){
$ipordom = str_replace("http://", "",$_POST['ipordom']);
$ip = gethostbyname($ipordom);
$data = file_get_contents('http://api.hackertarget.com/reverseiplookup/?q='.$ipordom);
$echo = '<pre style="text-align:left;width:600px">
-------------------------------------------------------------------------
Checking Result For : '.$ipordom
.'
IP Address : '.$ip.'
Reverse IP Lookup on https://tools.teguhsasongko.my.id/
-------------------------------------------------------------------------
'.$data.'
</pre>';
}
?>
    <meta name="author" content="Teguh Tri Sasongko">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Reverse IP">
    <meta name="keywords" content="Reverse IP">
<center><h3 style="color:white;padding:2px;background:#5997f9;margin-top:0px;border:2px dashed white;">Reverse IP</h3></center>
<form method="post" action="" enctype="multipart/form-data">
&nbsp Masukan Domain/IP :<center><input size="100" type="text" name="ipordom" placeholder="example.com"> <input type="submit" name="submit" value="SUBMIT">
</form>
<?php echo $echo;?>
</center>