    <meta name="author" content="Teguh Tri Sasongko">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="IP Lookup">
    <meta name="keywords" content="IP Lookup">

<center><h3 style="color:white;padding:2px;background:#5997f9;margin-top:0px;border:2px dashed white;">IP Lookup</h3></center>
<div class="blog_contents ez">
<form method="post">
&nbsp &nbsp	Masukan alamat IP : <br>
<center>
<input type="text" name="ip" placeholder="IP ADDRES" required="" /><br><br>
<input class="btn btn-default" type="submit" value='Check'>
</div>
</form></center>
											<?php
												if(isset($_POST['ip'])){

													$data = file_get_contents('https://pro.ip-api.com/json/' .$_POST['ip']. '?key=uTows6m1KPn1kb6');
													$obj = json_decode($data, true);
														echo '<p><h3><center>Check IP  : '; echo $_POST['ip']. '</center></h3><br>';
														echo '<div class="meta_data"></div>';
														echo '&nbsp As &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : '; print_r($obj['as']); echo '</font><br>';
														echo '&nbsp City &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : '; print_r($obj['city']); echo '<br>';
														echo '&nbsp Country &nbsp &nbsp &nbsp &nbsp &nbsp : '; print_r($obj['country']); echo '<br>';
														echo '&nbsp Country Code : '; print_r($obj['countryCode']); echo '<br>';
														echo '&nbsp ISP &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : '; print_r($obj['isp']); echo '<br>';
														echo '&nbsp Latitude &nbsp &nbsp &nbsp &nbsp&nbsp  : '; print_r($obj['lat']); echo '<br>';
														echo '&nbsp Longitude &nbsp &nbsp &nbsp : '; print_r($obj['lon']); echo '<br>';
														echo '&nbsp Org &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : '; print_r($obj['org']); echo '<br>';
														echo '&nbsp IP &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp : '; print_r($obj['query']); echo '<br>';
														echo '&nbsp Region &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : '; print_r($obj['region']); echo '<br>';
														echo '&nbsp Region Name : '; print_r($obj['regionName']); echo '<br>';
														echo '&nbsp Status &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp : '; print_r($obj['status']); echo '<br>';
														echo '&nbsp Timezone&nbsp &nbsp &nbsp &nbsp : '; print_r($obj['timezone']); echo '<br>';
														echo '&nbsp ZipCode &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp  : '; print_r($obj['zip']); echo '<br></p>';
												}
											?>
                                        </div>
                                    </div>
                                </div>
                            </div>