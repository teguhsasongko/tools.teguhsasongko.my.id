<!DOCTYPE html>
<html lang="en" >

<head>
    <meta name="author" content="Teguh Tri Sasongko">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Wikipedia Search">
    <meta name="keywords" content="Wikipedia Search, Wikipedia">
  <meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300|Roboto:300" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:800|Source+Sans+Pro:700" rel="stylesheet">
<style>
.mainflex
{
  display:flex;
  flex-direction:column;
  align-items:center;
  align-content:center;
/*   background-color:#151515; */
  min-height:100vh;
}
.inputbox
{
  height:35px;
  width:300px;
  font-family:'Roboto',sans-serif;
  font-size:17px;
  border: 1px solid #DDDDDD;
  outline: none;
  margin:10px;
  padding-left:5px;
}
.inputbox:focus
{
  height:35px;
  width:300px;
  font-family:'Roboto',sans-serif;
  
  box-shadow: 0 0 6px rgba(81, 203, 238, 1);
}
.butt
{
  height:35px;
  width:150px;
  font-family:'Open Sans',sans-serif;
  font-size:15px;
  background-color:white;
  color:black;
  border:1px solid black !important;
  border-radius:0px;
/*   box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22),0px 0px 0px 1px white inset;
 */
}
.butt:hover
{
  color:white;
  background-color:black;
  border-radius:0px;
}
header
{
  font-size:40px;
  font-family:'Open Sans'
}
i
{
/*   color:black; */
  font-size:40px;
}
#searchicon
{
  font-size:40px;
}
.butt
{
  font-family:'Lato',sans-serif;
  font-size:14px;
}
.entry
{
  height:auto;
  width:41vw;
  background-color:white;
  margin-top:15px;
  margin-bottom:15px;
  box-shadow:0 1px 5px rgba(0, 0, 0, 0.6);
  border-radius:0.2em;
  padding:10px;  
  font-family:'Roboto';
  font-size:15px;
}
.entry:hover
{
  animation: shadow 400ms ease-in-out 1 forwards;
}
@keyframes shadow
{
  0%
  {
     box-shadow:0 1px 5px rgba(0, 0, 0, 0.6);
  }
  50%
  {
     box-shadow:0 4px 10px rgba(0, 0, 0, 0.6);
  }
  100%
  {
     box-shadow:0 3px 15px rgba(0, 0, 0, 0.6);
  }
}
.title
{
  font-size:30px;
  font-family:'Open Sans',sans-serif !important;
  text-decoration:none !important;
}
</style>
  
</head>

<body>

          <div class="mainflex" id="main">
  <header><i class="fa fa-wikipedia-w" aria-hidden="true"></i>ikise<span><i class="material-icons" id="searchicon">search</i></span>rch</header>
  <input type="search" class="inputbox" id="query" onkeydown = "if (event.keyCode == 13)document.getElementById('search').click()" placeholder="Search text" required/>
  <div class="row" id="buttons">
    <button class="butt" id="search" onclick="getQuery()">Search</button>
    <button class="butt" value="View random Wikipedia article" onclick="window.open('http://id.wikipedia.org/wiki/Special:Random','_blank')">I'm feeling lucky</button>
  </div>
  <div id="page"></div>
  </div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>

  

    <script>
$('#search').on('click',function(){
  if($('#query').val()=== '')
    {
      alert('Please enter a valid keyword');
    }
});

function getQuery() {
  var query = $('#query').val();
  getData(query);
}

function getData(query) {
  var url = 'https://id.wikipedia.org/w/api.php?'
    + 'action=query&list=search&format=json&srprop=snippet'
    + '&srsearch=' + query + '&callback=?';

  $.ajax({
    url: url,
    dataType: 'jsonp',
    success: function(json) {
      listEntries(json);
    },
    error: function(e) {
      console.log(e.message);
    }
  });
}

function listEntries(data) {
  var entries = '';
  for(var i = 0; i < data.query.search.length; i++) {
    entries += createEntry(data.query.search[i]);
  }
  $('#page').html(entries);
}

function createEntry(entry) {
  var wikiBase = 'http://wikipedia.org/wiki/';
  var titleLink = '<a href="'
                  + wikiBase
                  + entry.title
                  + '" target="_blank">'
                  + entry.title
                  + '</a>';
  var html = '<div class="entry"><div><span class="title">'
              + titleLink
              + '</span><br><br><span'
              + entry.snippet
              + '</span></div></div>';
  return html;
}      
    </script>




</body>

</html>