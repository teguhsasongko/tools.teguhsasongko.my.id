    <meta name="author" content="Teguh Tri Sasongko">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="System Info">
    <meta name="keywords" content="Check System Info, System Info Sistem Info, Cek Info Sistem">
<style>
.category {
  margin-bottom: 0.4em;
}

.result {
  margin-bottom: 1.5em;
}

.result:nth-child(15) {
  margin-bottom: 0;
}

span {
  text-transform: uppercase;
  font-weight: 900;
}
</style>
<center><h3 style="color:white;padding:2px;background:#5997f9;margin-top:0px;border:2px dashed white;">System Info</h3>
<svg width="36" height="36" viewBox="0 0 24 24">
  <path d="M12,19A1,1 0 0,1 11,18A1,1 0 0,1 12,17A1,1 0 0,1 13,18A1,1 0 0,1 12,19M4,5H20V16H4M20,18A2,2 0 0,0 22,16V5C22,3.89 21.1,3 20,3H4C2.89,3 2,3.89 2,5V16A2,2 0 0,0 4,18H0A2,2 0 0,0 2,20H22A2,2 0 0,0 24,18H20Z"></path>
</svg>
<hr>
<div id="systemInfo"></div>
<hr>
<script>

function change() {
  var elem = document.getElementById("copyBtn");
  if (elem.value=="Copy to Clipboard") elem.value = "Copy to Clipboard";
  else elem.value = "Copy Successful";
}

var nVer = navigator.appVersion;
var nAgt = navigator.userAgent;
var browserName = navigator.appName;
var fullVersion = "" + parseFloat(navigator.appVersion);
var majorVersion = parseInt(navigator.appVersion, 10);
var nameOffset, verOffset, ix;

// In Opera 15+, the true version is after "OPR/"
if ((verOffset = nAgt.indexOf("OPR/")) != -1) {
  browserName = "Opera";
  fullVersion = nAgt.substring(verOffset + 4);
} else if ((verOffset = nAgt.indexOf("Opera")) != -1) {
  // In older Opera, the true version is after "Opera" or after "Version"
  browserName = "Opera";
  fullVersion = nAgt.substring(verOffset + 6);
  if ((verOffset = nAgt.indexOf("Version")) != -1)
    fullVersion = nAgt.substring(verOffset + 8);
} else if ((verOffset = nAgt.indexOf("MSIE")) != -1) {
  // In MSIE, the true version is after "MSIE" in userAgent
  browserName = "Microsoft Internet Explorer";
  fullVersion = nAgt.substring(verOffset + 5);
} else if ((verOffset = nAgt.indexOf("Chrome")) != -1) {
  // In Chrome, the true version is after "Chrome"
  browserName = "Chrome";
  fullVersion = nAgt.substring(verOffset + 7);
} else if ((verOffset = nAgt.indexOf("Safari")) != -1) {
  // In Safari, the true version is after "Safari" or after "Version"
  browserName = "Safari";
  fullVersion = nAgt.substring(verOffset + 7);
  if ((verOffset = nAgt.indexOf("Version")) != -1)
    fullVersion = nAgt.substring(verOffset + 8);
} else if ((verOffset = nAgt.indexOf("Firefox")) != -1) {
  // In Firefox, the true version is after "Firefox"
  browserName = "Firefox";
  fullVersion = nAgt.substring(verOffset + 8);
} else if (
  (nameOffset = nAgt.lastIndexOf(" ") + 1) < (verOffset = nAgt.lastIndexOf("/"))
) {
  // In most other browsers, "name/version" is at the end of userAgent
  browserName = nAgt.substring(nameOffset, verOffset);
  fullVersion = nAgt.substring(verOffset + 1);
  if (browserName.toLowerCase() == browserName.toUpperCase()) {
    browserName = navigator.appName;
  }
}
// trim the fullVersion string at semicolon/space if present
if ((ix = fullVersion.indexOf(";")) != -1)
  fullVersion = fullVersion.substring(0, ix);
if ((ix = fullVersion.indexOf(" ")) != -1)
  fullVersion = fullVersion.substring(0, ix);

majorVersion = parseInt("" + fullVersion, 10);
if (isNaN(majorVersion)) {
  fullVersion = "" + parseFloat(navigator.appVersion);
  majorVersion = parseInt(navigator.appVersion, 10);
}


var screenWidth = window.screen.availWidth;
var screenHeight = window.screen.availHeight;
var ratioWidth = window.screen.width * window.devicePixelRatio;
var ratioHeight = window.screen.height * window.devicePixelRatio;

document.getElementById("systemInfo").innerHTML =
  "" +
  "<p class='category'><span>Browser name</span></p><p class='result'>" +
  browserName + "</p>" +
  "<p class='category'><span>Browser Language</span></p><p class='result'>" +
  navigator.language + "</p>" +
  "<p class='category'><span>Version</span></p><p class='result'>" +
  fullVersion + "</p>" +
  "<p class='category'><span>Platform</span></p><p class='result'>" +
  navigator.platform + "</p>" +
  "<p class='category'><span>User Agent</span></p><p class='result'>" +
  navigator.userAgent + "</p>" +
  "<p class='category'><span>Screen Size (Available WidthxHeight)</span></p><p class='result'>" +
  screenWidth +  ' x ' + screenHeight + "</p>" +
  "<p class='category'><span>Screen Ratio (For Resolution)</span></p><p class='result'>" +
  ratioWidth +  ' x ' + ratioHeight + "</p>" +
  "<p class='category'><span>Cookies Enabled</span></p><p class='result'>" +
  navigator.cookieEnabled + "</p>";

  </script>