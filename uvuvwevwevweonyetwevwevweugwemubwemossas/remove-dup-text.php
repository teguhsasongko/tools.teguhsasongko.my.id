    <meta name="author" content="Teguh Tri Sasongko">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Remove Duplicate text">
    <meta name="keywords" content="Mass Remove Duplicate text, Remove Duplicate text. Remove Duplicate">
<center><h3 style="color:white;padding:2px;background:#5997f9;margin-top:0px;border:2px dashed white;">Remove Duplicate text</h3></center>
<center><form name="data" method="post"></center>
<center><textarea name="res7ock" cols='50' rows='12' placeholder="Masukan Text"></textarea></center><br>
<center><input type="submit" name='res' value="Submit"></center>
</form>
<?php
error_reporting(E_ALL ^ ( E_NOTICE | E_WARNING ));
$ya=$_POST['res'];
$co=$_POST['res7ock'];
$pecah=explode("\r\n",$co);
if($ya){
$hasil = array_unique($pecah);
    echo "<center><textarea  cols='50' rows='12'>".implode ($hasil,"\n")."</textarea>";
    }
?>