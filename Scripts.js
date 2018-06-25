function myFunction() {
  window.print();
}



/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function openNav() {
  document.getElementById("mySidenav").style.width = "18%";
  document.getElementById("main").style.marginLeft = "18%";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}

window.onload = function () {
  var seconds = 0;
  var tens = 0;
  var minutes = 0;
  var appendTens = document.getElementById("tens");
  var appendSeconds = document.getElementById("seconds");
  var appendMinutes = document.getElementById("minutes");
  var buttonStart = document.getElementById("button-start");
  var buttonStop = document.getElementById("button-stop");
  var buttonReset = document.getElementById("button-reset");
  var Interval;


  var appendSeconds2 = document.getElementById("seconds2");
  var appendMinutes2 = document.getElementById("minutes2");
  var buttonStartclock = document.getElementById("button-startclock");
  var buttonStopclock = document.getElementById("button-stopclock");
  var buttonResetclock = document.getElementById("button-resetclock");
  var Interval2;

  var appendRounds = document.getElementById("rounds");
  var appendWork = document.getElementById("work");
  var appendRest = document.getElementById("rest");
  var buttonStartrounds = document.getElementById("button-startrounds");
  var buttonStoprounds = document.getElementById("button-stoprounds");
  var buttonResetrounds = document.getElementById("button-setrounds");
  var startval;
  var restval;
  var Interval3;
  var Interval4;

  appendRounds.value = 0;
  appendWork.value = "0" + 0;
  appendRest.value = "0" + 0;

  appendSeconds2.value = "00";
  appendMinutes2.value = "00";

  buttonStart.onclick = function () {

    clearInterval(Interval);
    Interval = setInterval(startTimer, 10);
  };



  buttonStartclock.onclick = function () {

    clearInterval(Interval2);
    Interval2 = setInterval(startClock, 1000);
  };


  buttonStartrounds.onclick = function () {
    restval = appendRest.value;
    startval = appendWork.value;
    clearInterval(Interval3);
    Interval3 = setInterval(startWork, 1000);
  };




  buttonStop.onclick = function () {
    clearInterval(Interval);
  };

  buttonStopclock.onclick = function () {
    clearInterval(Interval2);
  };

  buttonStoprounds.onclick = function () {
    clearInterval(Interval3);
    clearInterval(Interval4);
  };



  buttonReset.onclick = function () {
    clearInterval(Interval);
    tens = "00";
    seconds = "00";
    minutes = "00";
    appendTens.innerHTML = tens;
    appendSeconds.innerHTML = seconds;
    appendMinutes.innerHTML = minutes;

  };

  buttonResetrounds.onclick = function () {
    clearInterval(Interval3);
    clearInterval(Interval4);
    appendRounds.value = 0;
    appendWork.value = "0" + 0;
    appendRest.value = "0" + 0;

  };









  function startTimer() {
    tens++;

    if (tens < 9) {
      appendTens.innerHTML = "0" + tens;
    }

    if (tens > 9) {
      appendTens.innerHTML = tens;

    }

    if (tens > 99) {
      seconds++;
      appendSeconds.innerHTML = seconds;
      tens = 0;
      appendTens.innerHTML = "0" + 0;
    }

    if (seconds < 9) {
      appendSeconds.innerHTML = "0" + seconds;
    }

    if (seconds > 9) {
      appendSeconds.innerHTML = seconds;
      appendMinutes.innerHTML = "0" + minutes;
    }

    if (seconds > 59) {
      minutes++;
      appendMinutes.innerHTML = "0" + minutes;
      seconds = 0;
      appendSeconds.innerHTML = "0" + 0;

    }


    if (minutes < 9) {
      appendMinutes.innerHTML = "0" + minutes;
    }

    if (minutes > 9) {
      appendMinutes.innerHTML = minutes;
    }

  }


  function startClock() {
    appendSeconds2.value--;
    if (appendSeconds2.value < 0) {
      appendMinutes2.value--;
      appendSeconds2.value = 59;
    }

    if (appendSeconds2.value < 10) {
      appendSeconds2.value = "0" + appendSeconds2.value;
    }

    if (appendMinutes2.value < 0) {
      clearInterval(Interval2);
      appendSeconds2.value = "00";
      appendMinutes2.value = "0";

    }



  }


  function startWork() {
    if (appendWork.value > 0) {
      appendWork.value--;
      if (appendWork.value < 10) {
        appendWork.value = "0" + appendWork.value;
      }

      if (appendWork.value > 10) {
        appendWork.value = appendWork.value;
      }

      if (appendWork.value < 1) {
        clearInterval(Interval3);
        appendWork.value = startval;
        Interval4 = setInterval(startRest, 1000);
      }


    }
  }

  function startRest() {
    appendRest.value--;
    if (appendRest.value < 10) {
      appendRest.value = "0" + appendRest.value;
    }

    if (appendRest.value > 10) {
      appendRest.value = appendRest.value;
    }

    if (appendRest.value < 1) {
      clearInterval(Interval4);
      appendRest.value = restval;
      appendRounds.value--;
      Interval3 = setInterval(startWork, 1000);


    }

    if (appendRounds.value < 1) {
      clearInterval(Interval4);
      clearInterval(Interval3);
      appendWork.value = "00";
      appendRest.value = "00";

    }


  }


















};