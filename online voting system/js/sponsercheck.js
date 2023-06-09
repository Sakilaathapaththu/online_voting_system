
function enableButton(){
	if(document.getElementById("checkBox").checked){
		document.getElementById("submitbtn").disabled=false;
	}else{
		document.getElementById("submitbtn").disabled=true;
	}
}