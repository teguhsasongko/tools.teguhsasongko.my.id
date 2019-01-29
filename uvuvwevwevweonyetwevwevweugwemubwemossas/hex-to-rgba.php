    <meta name="author" content="Teguh Tri Sasongko">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="HEX to RGBA Converter">
    <meta name="keywords" content="Convert HEX to RGBA Converter, Convert HEX to RGBA, HEX to RGBA Converter, HEX to RGBA, HEX, RGBA, Convert">
<center><h3 style="color:white;padding:2px;background:#5997f9;margin-top:0px;border:2px dashed white;">HEX to RGBA Converter</h3></center>

Enter your HEX value below (without the #)<br>

<rgba-converter />

<script type="riot/tag">
  <rgba-converter>
    <div class="entry">
      <form onsubmit={ convert }>
        <span class="prepend">#</span>
        <input type="text" name="color" placeholder={ opts.color } value={ opts.color } /><br>
        <button type="submit">Convert!</button>
      </form>
    </div>
    
    <div show={ valid }>
      <div class='spit' style="border-top: solid 5px #{ hexColor }">
        <span class="result">{ rgbaColor }</span>
      </div>
      <br><br>
    </div>
    
    <div show={ confirmCopy }>
      <div class='confirm'><strong>Copied!</strong> (currently not working, implementing soon..)</div>
    </div>
    
    
    <div show={ error }>
      <div class='error'><strong>Ooops!</strong> The value you entered is not a valid HEX. Try again.</div>
    </div>
    
    convert() {
      this.confirmCopy = false
      var hexVal = this.color.value
      console.log(hexVal)
    
      if ( /^([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$/i.test(hexVal) ) {
        this.valid = true
        this.error = false
        if ( hexVal.length == 3 ) {
          hexVal = hexVal[0] + hexVal[0] + hexVal[1] + hexVal[1] + hexVal[2] + hexVal[2];
        }

        // extracting the hex values for RGB
        var red = hexVal.substr(0,2)
        var green = hexVal.substr(2,2)
        var blue = hexVal.substr(4,2)

        // converting in decimal values
        var red10 = parseInt(red,16)
        var green10 = parseInt(green,16)
        var blue10 = parseInt(blue,16)

        // stitching it together
        var rgb = red10+','+green10+','+blue10

        // the final rgba CSS ouptut
        rgba = 'rgba(' + rgb + ',1)'

        this.hexColor = hexVal
        this.rgbaColor = rgba
        console.log(rgba)
      } else {
        this.valid = false
        this.error = true
      }
    }
    
  </rgba-converter>
</script>

<script src="https://cdn.jsdelivr.net/g/riot@2.0.14(riot.min.js+compiler.min.js)"></script>

<script>
  riot.mount('rgba-converter', {
    color: '0099aa'
  })
</script>

<style>
.entry {
  display: inline-block;
  text-align: center;

  .prepend {
    color: #888888;
    font-size: 24px;
    padding-right: 6px;
  }
  
  input {
    padding: 12px 18px;
    border: none;
    border-radius: 3px;
  }

  button {
    margin-left: 6px;
    background: #0099aa;
    border: none;
    padding: 10px 18px;
    font-size: 18px;
    color: white;
    cursor: pointer;
    border-radius: 3px;
    outline: none;

    transition: background 0.3s;

  }
}

.error {
  background: tomato;
  margin: 36px auto 0;
  width: 50%;
  padding: 16px 18px;
  color: white;
}

.spit {
  background: #dddddd;
  width: 50%;
  padding: 16px 18px;
  margin: 36px auto 0;
  color: #545454;
 }   
   
  button.copy {
    margin-left: 12px;
    background: #0099aa;
    border: none;
    padding: 4px 8px;
    font-size: 13px;
    color: white;
    cursor: pointer;
    border-radius: 3px;
    outline: none;

    transition: background 0.3s;
  }
}

.confirm {
  width: 50%;
  background: #0099aa;
  padding: 12px 18px;
  color: white;
  margin: 12px auto;
}
</style>