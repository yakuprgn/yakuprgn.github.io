function loadDoc() {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("ajax").innerHTML =
            this.responseText;
        }
      };
      xhttp.open("GET", "msg1.txt", true);
      xhttp.send();
}