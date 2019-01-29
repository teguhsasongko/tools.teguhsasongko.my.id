    <meta name="author" content="Teguh Tri Sasongko">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Port Scanner">
    <meta name="keywords" content="Server Port Scanner, Website Port Scanner, Web Port Scanner, Port Scanner, Scanner, Port, Check Port Server">
<body>
    <center><h3 style="color:white;padding:2px;background:#5997f9;margin-top:0px;border:2px dashed white;">Port Scanner</h3></center>
<form action="" method="post" >
&nbsp Url : <input type="text" class="input" name="port" placeholder="www.site.com">
<br><center><button type="submit" >Scan</button></center>
</form>

<?php

	error_reporting(0);
$x = $_POST['port'];
if(!empty($_POST['port'])) {    
    //daftar port yang di scan
    $ports = array(20, 21, 22, 23, 25, 53, 80, 443, 110, 1433, 3306);
    
    $results = array();
    foreach($ports as $port) {
        if($pf = @fsockopen($_POST['port'], $port, $err, $err_string, 1)) {
            $results[$port] = true;
            fclose($pf);
        } else {
            $results[$port] = false;
        }
    }
echo "<center>Site : " . $x . "</center><br><br>";
    foreach($results as $port=>$val)    {
        $prot = getservbyport($port,"tcp");
                echo "&nbsp Port $port ( $prot ) - ";
        if($val) {
            echo "<font color=green>OK</font><br>";
        }
        else {
			echo "<font color=red>Inaccessible</font><br>";
        }
    }
}
?>
</div>