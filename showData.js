var xmlHttp;
function createXMLHttpRequest()
{
   if (window.ActiveXObject) // Internet Explorer
   {
    xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
   }
   else // Firefox, Opera 8.0+, Safari
   {
    xmlHttp=new XMLHttpRequest();
   }
} //end function createXMLHttpRequest()

function stateChange()
{
   if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
   {
   //…………Add code here……..

   var register = JSON.parse(this.responseText);
   alert(this.responseText);
   document.getElementById('fname').value = register.firstname;
   document.getElementById('lname').value = register.lastname;
   document.getElementById('age').value = register.age;
   document.getElementById('gender').value = register.gender;
   document.getElementById('pic').innerHTML = '<img src="'+ register.photo + '">';
   }

} // end function statechange()
function searchName(str)
{
   createXMLHttpRequest();
   xmlHttp.onreadystatechange = stateChange;
   var url = "data.php?name=" + str;
   xmlHttp.open("GET",url,true);
   xmlHttp.send(null);
} //end function showHint(str)