 var modal = document.getElementById("modal_content");
 var btn =document.getElementById("order");
 var closemod=document.getElementsByClassName("close")[0];

btn.onclick = function () {
	modal.style.display="block";
}
closemod.onclick = function () {
	modal.style.display ="none";
}
