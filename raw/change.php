<center>
            <form name="dummy">
        	<input type="text" name="sele" id="search" onkeyup="loadXMLDoc()" autocomplete="off" placeholder="Enter Search Query......"/>     
            </form>
        </center>
      </div>
        <div class="content_section">
            <div id="results">
            <i>No Results To Display......!</i> 
            </div>
        </div> 




<script type="text/javascript">
function loadXMLDoc()
{
var xmlhttp;
var keys=document.dummy.sele.value;
if(keys==""){
  document.getElementById("results").innerHTML="<i>No Results to Display......</i>";  
}
else{
var urls="index_search_db.pdp?ok="+keys;
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.open("GET",urls,true);
xmlhttp.send();
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4)
{
var some=xmlhttp.responseText;
document.getElementById("results").innerHTML=some;
}
}
}
}
</script>