
let xmlhttp = new XMLHttpRequest();
    console.log("1");
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        console.log("Chegou a resposta OK: " + this.responseText);
        console.log("2");
        document.getElementById("msg").innerHTML = this.responseText;
    } else if (this.readyState < 4) {
        console.log("3: " + this.readyState);
    } else
        console.log("Requisicao falhou: " + this.status);
    }
        console.log("4");
        xmlhttp.open("GET", "");
        xmlhttp.send();
        console.log("enviei form");
        console.log("5");
