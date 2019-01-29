<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Word Counter</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel='stylesheet' href='https://codepen.io/ChynoDeluxe/pen/eJPeEL'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>

      <style type="text/css">
      	/*PEN STYLES*/
.box textarea {
  border-color: #ccc;
}

.box span, .box p,
.box ol {
  color: #999999;
  font-size: 14px;
}

body {
  background: dodgerblue;
  margin: 2rem auto;
}

.box {
  border-radius: 3px;
  background: #fff;
  font-size: 16px;
  padding: 20px;
  margin: 15px auto;
  box-shadow: 0 5px 3px -2px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  max-width: 560px;
}
.box label {
  font-family: "Montserrat";
  border-bottom: 1px solid #ccc;
  display: block;
  padding-bottom: 10px;
}
.box p > span {
  font-weight: bold;
}
.box p,
.box ol {
  line-height: 1.2em;
  margin: 5px 0;
}
.box textarea {
  border-radius: 3px;
  width: 100%;
  box-sizing: border-box;
  font: inherit;
  margin: 10px auto 5px;
}
      </style>

  
</head>

<body>
<center><h3 style="color:white;padding:2px;background:#5997f9;margin-top:0px;border:2px dashed white;">Word Counter</h3></center>
  <!--PEN CODE-->
<div class="box">
	
	<textarea name="textCount" id="textCount" cols="30" rows="8"></textarea>
	<p style="text-align: center;">Kamu memiliki <span id="wordCount">0 kata</span> dan <span id="charCount">0 karakter</span></p>
	<p>
		<strong>Bagaimana cara menggunakannya:</strong>
		<p>
			Masukkan atau Tempel teks Anda ke dalam kotak teks ke jumlah karakter dan kata-kata.
		</p>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js'></script>

  

    <script type="text/javascript">
    	(function($) {
	var wordCounter = {
		init: function() {
			this.DOM();
			this.events();
		},
		DOM: function() {
			this.textbox = $("#textCount");
			this.wordCount = $("#wordCount");
			this.charCount = $("#charCount");
		},
		events: function() {
			this.textbox.on("input", this.count.bind(this));
		},
		count: function() {
			var words = this.textbox.val().split(" "),
				chars = this.textbox.val();

			//DELETE EMPTY STRINGS
			for (var i = 0; i < words.length; i++) {
				while (words[i] === "") {
					words.splice(i, 1);
				}
			}
			//COUNT WORDS
			if (words.length === 1) {
				this.wordCount.text(words.length + " kata");
			} else {
				this.wordCount.text(words.length + " kata-kata");
			}
			//COUNT CHARACTERS
			if (chars.length < 0) {
				words = [];
			} else if (chars.length === 1) {
				this.charCount.text(chars.length + " karakter");
			} else {
				this.charCount.text(chars.length + " karakter");
			}
		}
	}
	wordCounter.init();
}(jQuery));
    </script>




</body>

</html>
