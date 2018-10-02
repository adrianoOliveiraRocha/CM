
function getText() {
	var el = document.getElementById('editor'); //div
	// alert('Enviado com sucesso!');
	el.childNodes[2].childNodes[1].setAttribute("type", "hidden");
	// document.getElementById('response').innerHTML = el.innerHTML;
	send(el.childNodes[0].innerHTML);
}

function send(data){
	const xhr = new XMLHttpRequest();
	xhr.onload = function() {
		const serverResponse = document.getElementById('response');
		serverResponse.innerHTML = this.responseText;
	}

	xhr.open('POST', "insert.php");
	xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhr.send("data="+data);
}

function cancel(){
  location.href = "../views/admin/index.php";
}

function del(){
	location.href = "delete.php";
}
