<div id="Info"></div>


<script src="fingerprint2.js"></script>


<script>

var fp = new Fingerprint2();

fp.get(function(result, components) {
  console.log(result) // a hash, representing your device fingerprint
  console.log(components) // an array of FP components
  
  	var resultString = "<strong>指纹</strong>: "+result;
  
	var details = "<strong>参数</strong><br />";
	for (var index in components) {
		var obj = components[index];
		var value = obj.value;
		var line = "<strong>"+obj.key+ "</strong>" + " = " + value.toString().substr(0, 100);
		console.log(line);
		details += line + "<br />";
	}

  
	document.getElementById("Info").innerHTML = resultString+"<br><br>"+details;

  
});
	
</script>



