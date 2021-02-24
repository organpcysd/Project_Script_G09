var xmlHttp;
function createXMLHttpRequest() {
 if (window.ActiveXObject) // Internet Explorer
 xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
 else // Firefox, Opera 8.0+, Safari
 xmlHttp=new XMLHttpRequest();
} //end function createXMLHttpRequest()

function stateChange() {
 if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete") {
    var txt = xmlHttp.responseText;
    
    var status = new Array();
    status = txt.split(",");

    // alert(txt);

    var add = "";
    for(var i=0; i < status.length; i++) {
        add += '<option value="' + status[i] + '" />';
    }

    document.getElementById("name").innerHTML = add;
 }
} // end function statechange()

function searchName(str) {
 createXMLHttpRequest();
 xmlHttp.onreadystatechange = stateChange;
 var url = "adminmanage.php";
 url = url + "?name=" + str;
 xmlHttp.open("GET",url,true);
 xmlHttp.send(null);
} //end function showHint(str)