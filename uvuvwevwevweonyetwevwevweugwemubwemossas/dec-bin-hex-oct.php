<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Dec + Bin + Hex + Oct Calculator</title>
      <style>
      label {
  width: 100px;
  text-align: right;
  display: inline-block;
}

div + div {
  margin-top: 1em;
}

    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
<center><h3 style="color:white;padding:2px;background:#5997f9;margin-top:0px;border:2px dashed white;">Dec + Bin + Hex + Oct Calculator</h3></center>
  <div class='dec'>
  <label>Decimal</label>
  <input type='text'>
</div>
<div class='bin'>
  <label>Biner</label>
  <input type='text'>
</div>
<div class='hex'>
  <label>Hexa</label>
  <input type='text'>
</div>
<div class='oct'>
  <label>Octal</label>
  <input type='text'>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script>
      (function() {
  var calc;

  $(document).ready(function() {
    $(document).on("keyup", ".dec input", function(e) {
      var bin, hex, oct;
      bin = calc.dec2bin($(this).val());
      $(".bin input").val(bin);
      hex = calc.dec2hex($(this).val());
      $(".hex input").val(hex);
      oct = calc.dec2oct($(this).val());
      return $(".oct input").val(oct);
    });
    return $(document).on("keyup", ".bin input", function(e) {
      var dec, hex, oct;
      dec = calc.bin2dec($(this).val());
      $(".dec input").val(dec);
      hex = calc.bin2hex($(this).val());
      $(".hex input").val(hex);
      oct = calc.bin2oct($(this).val());
      return $(".oct input").val(oct);
    });
  });

  calc = {
    bin2dec: function(bin) {
      var bin_rev, i, len, result;
      bin_rev = bin.toString().split("").reverse().join("");
      len = bin_rev.length;
      result = 0;
      i = 0;
      while (i < len) {
        result += parseInt(bin_rev[i]) * Math.pow(2, i);
        i++;
      }
      return result;
    },
    bin2hex: function(bin) {
      var dec, hex;
      dec = this.bin2dec(bin);
      hex = this.dec2hex(dec);
      return hex;
    },
    bin2oct: function(bin) {
      var dec, oct;
      dec = this.bin2dec(bin);
      oct = this.dec2oct(dec);
      return oct;
    },
    dec2bin: function(dec) {
      var bin;
      bin = "";
      while (dec >= 1) {
        bin += dec % 2;
        dec = Math.floor(dec / 2);
      }
      return bin.toString().split("").reverse().join("");
    },
    dec2hex: function(dec) {
      var hex, remainder;
      // dec.toString(16) would do the trick as well
      // But hey, it's all about calculation <3
      hex = "";
      while (dec > 0) {
        remainder = dec % 16;
        hex += remainder.toString(16).toUpperCase();
        dec = Math.floor(dec / 16);
      }
      return hex.toString().split("").reverse().join("");
    },
    dec2oct: function(dec) {
      var oct, remainder;
      oct = "";
      while (dec > 0) {
        remainder = dec % 8;
        oct += remainder;
        dec = Math.floor(dec / 8);
      }
      return oct.toString().split("").reverse().join("");
    },
    hex2dec: function(hex) {}
  };

}).call(this);

//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiIiwic291cmNlUm9vdCI6IiIsInNvdXJjZXMiOlsiPGFub255bW91cz4iXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7QUFBQSxNQUFBOztFQUFBLENBQUEsQ0FBRSxRQUFGLENBQVcsQ0FBQyxLQUFaLENBQWtCLFFBQUEsQ0FBQSxDQUFBO0lBQ2hCLENBQUEsQ0FBRSxRQUFGLENBQVcsQ0FBQyxFQUFaLENBQWUsT0FBZixFQUF3QixZQUF4QixFQUFzQyxRQUFBLENBQUMsQ0FBRCxDQUFBO0FBQ3BDLFVBQUEsR0FBQSxFQUFBLEdBQUEsRUFBQTtNQUFBLEdBQUEsR0FBTSxJQUFJLENBQUMsT0FBTCxDQUFhLENBQUEsQ0FBRSxJQUFGLENBQU8sQ0FBQyxHQUFSLENBQUEsQ0FBYjtNQUNOLENBQUEsQ0FBRSxZQUFGLENBQWUsQ0FBQyxHQUFoQixDQUFvQixHQUFwQjtNQUNBLEdBQUEsR0FBTSxJQUFJLENBQUMsT0FBTCxDQUFhLENBQUEsQ0FBRSxJQUFGLENBQU8sQ0FBQyxHQUFSLENBQUEsQ0FBYjtNQUNOLENBQUEsQ0FBRSxZQUFGLENBQWUsQ0FBQyxHQUFoQixDQUFvQixHQUFwQjtNQUNBLEdBQUEsR0FBTSxJQUFJLENBQUMsT0FBTCxDQUFhLENBQUEsQ0FBRSxJQUFGLENBQU8sQ0FBQyxHQUFSLENBQUEsQ0FBYjthQUNOLENBQUEsQ0FBRSxZQUFGLENBQWUsQ0FBQyxHQUFoQixDQUFvQixHQUFwQjtJQU5vQyxDQUF0QztXQU9BLENBQUEsQ0FBRSxRQUFGLENBQVcsQ0FBQyxFQUFaLENBQWUsT0FBZixFQUF3QixZQUF4QixFQUFzQyxRQUFBLENBQUMsQ0FBRCxDQUFBO0FBQ3BDLFVBQUEsR0FBQSxFQUFBLEdBQUEsRUFBQTtNQUFBLEdBQUEsR0FBTSxJQUFJLENBQUMsT0FBTCxDQUFhLENBQUEsQ0FBRSxJQUFGLENBQU8sQ0FBQyxHQUFSLENBQUEsQ0FBYjtNQUNOLENBQUEsQ0FBRSxZQUFGLENBQWUsQ0FBQyxHQUFoQixDQUFvQixHQUFwQjtNQUNBLEdB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akI7TUFIUjthQUlBLEdBQUcsQ0FBQyxRQUFKLENBQUEsQ0FBYyxDQUFDLEtBQWYsQ0FBcUIsRUFBckIsQ0FBd0IsQ0FBQyxPQUF6QixDQUFBLENBQWtDLENBQUMsSUFBbkMsQ0FBd0MsRUFBeEM7SUFOTyxDQXJDVDtJQTZDQSxPQUFBLEVBQVMsUUFBQSxDQUFDLEdBQUQsQ0FBQSxFQUFBO0VBN0NUO0FBakJGIiwic291cmNlc0NvbnRlbnQiOlsiJChkb2N1bWVudCkucmVhZHkgLT5cbiAgJChkb2N1bWVudCkub24gXCJrZXl1cFwiLCBcIi5kZWMgaW5wdXRcIiwgKGUpIC0+XG4gICAgYmluID0gY2FsYy5kZWMyYmluKCQodGhpcykudmFsKCkpXG4gICAgJChcIi5iaW4gaW5wdXRcIikudmFsKGJpbilcbiAgICBoZXggPSBjYWxjLmRlYzJoZXgoJCh0aGlzKS52YWwoKSlcbiAgICAkKFwiLmhleCBpbnB1dFwiKS52YWwoaGV4KVxuICAgIG9jdCA9IGNhbGMuZGVjMm9jdCgkKHRoaXMpLnZhbCgpKVxuICAgICQoXCIub2N0IGlucHV0XCIpLnZhbChvY3QpXG4gICQoZG9jdW1lbnQpLm9uIFwia2V5dXBcIiwgXCIuYmluIGlucHV0XCIsIChlKSAtPlxuICAgIGRlYyA9IGNhbGMuYmluMmRlYygkKHRoaXMpLnZhbCgpKVxuICAgICQoXCIuZGVjIGlucHV0XCIpLnZhbChkZWMpXG4gICAgaGV4ID0gY2FsYy5iaW4yaGV4KCQodGhpcykudmFsKCkpXG4gICAgJChcIi5oZXggaW5wdXRcIikudmFsKGhleClcbiAgICBvY3QgPSBjYWxjLmJpbjJvY3QoJCh0aGlzKS52YWwoKSlcbiAgICAkKFwiLm9jdCBpbnB1dFwiKS52YWwob2N0KVxuXG5jYWxjID1cbiAgYmluMmRlYzogKGJpbikgLT5cbiAgICBiaW5fcmV2ID0gYmluLnRvU3RyaW5nKCkuc3BsaXQoXCJcIikucmV2ZXJzZSgpLmpvaW4oXCJcIilcbiAgICBsZW4gPSBiaW5fcmV2Lmxlbmd0aFxuICAgIHJlc3VsdCA9IDBcbiAgICBpID0gMFxuICAgIHdoaWxlIGkgPCBsZW5cbiAgICAgIHJlc3VsdCArPSBwYXJzZUludChiaW5fcmV2W2ldKSAqIE1hdGgucG93KDIsIGkpXG4gICAgICBpKytcbiAgICByZXN1bHRcbiAgICBcbiAgYmluMmhleDogKGJpbikgLT5cbiAgICBkZWMgPSBAYmluMmRlYyhiaW4pXG4gICAgaGV4ID0gQGRlYzJoZXgoZGVjKVxuICAgIGhleFxuICAgIFxuICBiaW4yb2N0OiAoYmluKSAtPlxuICAgIGRlYyA9IEBiaW4yZGVjKGJpbilcbiAgICBvY3QgPSBAZGVjMm9jdChkZWMpXG4gICAgb2N0XG4gICAgXG4gIGRlYzJiaW46IChkZWMpIC0+XG4gICAgYmluID0gXCJcIlxuICAgIHdoaWxlIGRlYyA+PSAxXG4gICAgICBiaW4gKz0gZGVjICUgMlxuICAgICAgZGVjID0gTWF0aC5mbG9vcihkZWMgLyAyKVxuICAgIGJpbi50b1N0cmluZygpLnNwbGl0KFwiXCIpLnJldmVyc2UoKS5qb2luKFwiXCIpXG4gICAgXG4gIGRlYzJoZXg6IChkZWMpIC0+XG4gICAgIyBkZWMudG9TdHJpbmcoMTYpIHdvdWxkIGRvIHRoZSB0cmljayBhcyB3ZWxsXG4gICAgIyBCdXQgaGV5LCBpdCdzIGFsbCBhYm91dCBjYWxjdWxhdGlvbiA8M1xuICAgIGhleCA9IFwiXCJcbiAgICB3aGlsZSBkZWMgPiAwXG4gICAgICByZW1haW5kZXIgPSBkZWMgJSAxNlxuICAgICAgaGV4ICs9IHJlbWFpbmRlci50b1N0cmluZygxNikudG9VcHBlckNhc2UoKVxuICAgICAgZGVjID0gTWF0aC5mbG9vcihkZWMgLyAxNilcbiAgICBoZXgudG9TdHJpbmcoKS5zcGxpdChcIlwiKS5yZXZlcnNlKCkuam9pbihcIlwiKVxuICAgIFxuICBkZWMyb2N0OiAoZGVjKSAtPlxuICAgIG9jdCA9IFwiXCJcbiAgICB3aGlsZSBkZWMgPiAwXG4gICAgICByZW1haW5kZXIgPSBkZWMgJSA4XG4gICAgICBvY3QgKz0gcmVtYWluZGVyXG4gICAgICBkZWMgPSBNYXRoLmZsb29yKGRlYyAvIDgpXG4gICAgb2N0LnRvU3RyaW5nKCkuc3BsaXQoXCJcIikucmV2ZXJzZSgpLmpvaW4oXCJcIilcbiAgICBcbiAgaGV4MmRlYzogKGhleCkgLT5cbiAgICAiXX0=
//# sourceURL=coffeescript
    </script>
<br><br>



</body>

</html>
