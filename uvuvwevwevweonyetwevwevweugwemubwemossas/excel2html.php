    <meta name="author" content="Teguh Tri Sasongko">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Excell to HTML">
    <meta name="keywords" content="Convert Excell to HTML, Convert Excell, Convert Excell2HTML, Excell2HTML, Excell, HTML, Convert">
<head>
      <style>
#convert {
  padding: .3em 1em;
  border-radius: .3em;
}

    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
<center>
  <h3 style="color:white;padding:2px;background:#5997f9;margin-top:0px;border:2px dashed white;">Base64 Encode/Decode</h3>
<p>Paste dari Excel ke kotak di bawah dan tekan convert:</p>

<textarea name="inney" id="inney"></textarea><br>
<button id='convert'>Convert</button>

<p>Salin kode di bawah ini (cukup tekan cmd / ctrl c):</p>

<textarea id="output" disabled></textarea><br><br>
  

    <script>$('#convert').click(function(){
  x = $('#inney').val();
  x = x.split('\t').join('</td><td>');
  x = x.split('\n').join('</td>\n\t</tr>\n\t<tr>\n\t\t<td>');
  x = '<table>\n\t<tr>\n\t\t<td>' + x + '</td>\n\t</tr>\n</table>\n';
  $('#output').text(x).focus().select();
  $('#render').html(x);
});</script>




</body>

</html>
