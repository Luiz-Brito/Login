function showTime() {
    var date = new Date();
    var h = date.getHours();
    var m = date.getMinutes();
    var s = date.getSeconds();
    var resul = "AM";

    if(h == 0) {
        h = 12;
    }

    if(h > 12)  {
        h -= 12;
        resul = "PM";
    }

    h = (h<10) ? "0" + h : h;
    m = (m<10) ? "0" + m : m;
    s = (s<10) ? "0" + s : s;

    var time = `${h}:${m}:${s} ${resul}`;
    document.getElementById("clockDisplay").innerHTML = time;

    setTimeout(showTime, 1000);
}

showTime();

function mostrar() {
  let senha = document.getElementById("senha");

  if(senha.style.display == 'none') {
    senha.style.display = 'block';
  }else {
    senha.style.display = 'none';
  }
}
