let unameBtn= document.querySelector("#uname-btn");

let uName=()=>{
	if(unameBtn===true){
		unameBtn.style.borderColor="green";
	}
	else{
		unameBtn.style.borderColor="red";
	}
}
unameBtn.addEventListener("keydown", uName);