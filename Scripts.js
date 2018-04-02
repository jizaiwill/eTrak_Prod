let mylet;




let minutes = document.getElementById("minutes").value;
let seconds = document.getElementById("seconds").value;

function start() {
let innermin = document.getElementById("minutes");
let innersec = document.getElementById("seconds");
innermin.innerHTML = 30;
innersec.innerHTML = "0" + 0;
minutes = 30;
seconds = 0;

}

//Runs the clock
function clock() {
x = setInterval(drop, 1000);

function drop() {
seconds--;
if (seconds <= 0) {seconds = 59; minutes--;
if (minutes < 0) {stop(); minutes = 0; seconds =0;}}



document.getElementById("minutes").innerHTML = minutes;
if (seconds <10) {document.getElementById("seconds").innerHTML = "0" + seconds;}
else {document.getElementById("seconds").innerHTML = seconds;}


document.getElementById("minutes6").innerHTML = minutes + ":" + ((seconds<10) ? "0" + seconds : seconds);
document.getElementById("minutes5").innerHTML = minutes + ":" + ((seconds<10) ? "0" + seconds : seconds);
document.getElementById("minutes4").innerHTML = minutes + ":" + ((seconds<10) ? "0" + seconds : seconds);
document.getElementById("minutes2").innerHTML = minutes + ":" + ((seconds<10) ? "0" + seconds : seconds);




}



}



function stop () {
clearInterval(x);

}
