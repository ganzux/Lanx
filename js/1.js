function a(a){
	document.getElementById('luz').value=a;
	document.form[0].submit;
}
var iFrequency = 10000;
var myInterval = 0;
function startLoop() {
	if(myInterval > 0) clearInterval(myInterval);
	myInterval = setInterval( 'doSomething()', iFrequency );
}
function doSomething() {
	window.location = document.URL;
}
startLoop();