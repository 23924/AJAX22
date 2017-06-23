function ajax(weight, length) {
    let debug = false;
    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest()
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    let controlScript = "bmi.php";
    let httpString = controlScript + "?weight=" + weight + "&length=" + length;
    let httpResponse = "";
    if(debug) console.log(httpString);
    xmlhttp.open("GET", httpString, true);
    xmlhttp.send();
    xmlhttp.onreadystatechange = function() {
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if(debug) console.log("http response = " + xmlhttp.responseText);
            httpResponse = xmlhttp.responseText;
            document.getElementById('result').innerHTML = httpResponse;
        }
    }
}