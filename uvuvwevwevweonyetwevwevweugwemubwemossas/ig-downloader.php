<style>
embed{
max-width: 100%;
width: 400px;
padding-top: 20px;
}
body {
text-align: center;
}
</style>

<?php
ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);
function file_get_contents_curl($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}
if (!isset($_GET["url"])){
    ?>
<center><h3 style="color:white;padding:2px;background:#5997f9;margin-top:0px;border:2px dashed white;">IG Downloader</h3></center>
<form>
<input placeholder="https://www.instagram.com/p/link/?taken-by=you" name="url" /><br>
<input type="submit">
</form>
<?php
die();
}
$html = file_get_contents_curl($_GET["url"]);
//parsing begins here:
$doc = new DOMDocument();
@$doc->loadHTML($html);
$metas = $doc->getElementsByTagName('meta');
for ($i = 0; $i < $metas->length; $i++)
{
    $meta = $metas->item($i);
       $src = $meta->getAttribute('content');
if (strpos($src, 'cdninstagram') !== false) {
$src=str_replace("http:", "https:", $src);
echo "<embed src=\"$src\"><br><a href='$src'>Submit</a><br>";
}
}
?>