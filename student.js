// User-Name validation...

let Submit=document.querySelector("#Submit");
let error= document.querySelector("#nameError");
let user = document.querySelector("#Name-btn");

	let userName=()=>{
		if(user.value.trim()===""){
				user.style.border="solid .5px";
				error.style.color="";
				error.innerText="";
				error.style.padding="";
			return false;
		}
		else{
		if(user.value.length<2){
			user.style.borderColor="red";
			user.style.border="solid 2px";
			error.style.color="red";
			error.style.fontSize="13px";
			document.getElementById("nameError").innerHTML="User-Name is Invalid";		
			error.style.padding="3%";
		return false;
		}
		else{
			if(parseInt(user.value.trim())){
				user.style.border="solid 2px";
				user.style.borderColor="red";
				error.style.color="red";
				error.style.fontSize="13px";
				document.getElementById("nameError").innerHTML="This is not a name";		
				error.style.padding="3%";
					return false;
			}
			else{
			user.style.borderColor="#4ebb86";
			error.style.color="green";
			document.getElementById("nameError").innerHTML="User-Name is valid now";
			error.style.fontSize="13px";
			error.style.padding="2%";
			}
		}
	}
			return true;
	}
		 
	Submit.addEventListener("submit", ()=>{
		if(user.value.trim()===""){
			user.style.borderColor="";
			error.style.color="red";
			document.getElementById("nameError").innerHTML="User-Name is required";
			error.style.padding="2%";
			return false;
		 }
	else{
		return true;
	}
	});
	
	
	user.addEventListener("input", userName);
	user.addEventListener("click", ()=>{
		error.innerText="";
	});
	
// phone-number validation...

let phone=document.querySelector("#Phone-btn");
let phoneError=document.querySelector("#phoneError");
	
	phone.addEventListener("input",() =>{	
	if(phone.value===""){
		phone.style.border="solid .5px";
		phone.borderColor="";
		phoneError.innerText="";
		phoneError.style.padding="";
		phoneError.style.fontSize="";
		return false;
	}
	else if(phone.value.length!==10){
		phoneError.innerText="Phone number is invalid";
		phoneError.style.color="red";
		phone.style.border="solid 2px";
		phone.style.borderColor="red";
		phoneError.style.fontSize="13px";
		phoneError.style.padding="3%";
		return false;
	}
	// else if(parseFloat(phone.value)!=true){	
		// phoneError.innerText="This is not a number";
		// phoneError.style.color="red";
		// phone.style.border="solid 2px";
		// phone.style.borderColor="red";
		// phoneError.style.fontSize="13px";
		// phoneError.style.padding="3%";
		// return false;
	// }
	else{
		phone.style.borderColor="green";
		phoneError.innerText="Phone number is valid";
		phoneError.style.color="green"
		phoneError.style.padding="3%";
		phoneError.style.fontSize="13px";
		return true;
	}});

// photo upload validation...

let img = document.querySelector('#file2');
let validExt =["jpeg","png","jpg"];
let fileError= document.querySelector("#fileError");

let imgFun=()=>{

		if(img.value != ""){
		let ext= img.value.lastIndexOf(".")+1;
		let imgExt= img.value.substring(ext);
		let res = validExt.includes(imgExt);
		
			if(res==false){
				fileError.innerHTML="Invalid file type...";
					fileError.style.color="red";
						return false;
			}
			else if(parseFloat(img.files[0].size/(1024*1024))>=3){
				fileError.innerHTML="file size must be less then 3 MB";
					fileError.style.color="red";
						return false;
			}
			else if(img.value===""){
				fileError.innerHTML="please select a file";
					fileError.style.color="red";
						return false;
			}
			else{
				fileError.innerHTML="<i>valid file</i>";
					fileError.style.color="green";
						return true;
			}
		}
		return true;
	}

	img.addEventListener("input", imgFun);
	img.addEventListener("submit", imgFun);
	
// height validation...
let height = document.querySelector("#height");
let heightError=document.querySelector("#heightError");

let heightFun=()=>{
	
	if(height.value.trim()===""){
		heightError.style.color="";
		height.style.borderColor="";
		heightError.innerHTML="";
		height.style.border="solid .5px";
		return false;
	}
	else if((parseFloat(height.value)<120) || parseFloat(height.value)>245){
		height.style.border="solid .5px";
		height.style.borderColor="red";
		heightError.innerHTML="Height is Invalid...";
		heightError.style.color="red";
		heightError.style.fontSize="13px";
		heightError.style.marginLeft="13px";
		return false;
	}
	else{
		height.style.border="solid .5px";
		height.style.borderColor="green";
		heightError.innerHTML="Height is Valid";
		heightError.style.color="green";
		heightError.style.fontSize="13px";
		heightError.style.marginLeft="20px";
	}
		return true;
}
	height.addEventListener("input", heightFun);
	height.addEventListener("submit",heightFun);
	// else if(height.value.length===""){
		// height.style.borderColor="";
		// heightError.style.color="";
		// heightError.innerText="";
	// return false;
	// }
	// else{
			// height.style.borderColor="#4ebb86";
			// heightError.style.color="green";
			// document.getElementById("heightError").innerHTML="height is valid now";
			// heightError.innerText.remove;
	// }
		// return true;
		// submit.addEventListener("submit", ()=>{
				// if(height.value.trim()===""){
				// height.style.borderColor="";
				// heightError.style.color="red";
				// document.getElementById("heightError").innerHTML="height is required";
			// return false;
	// });
// });
	
	// let cast

	/*
	function valid(){
	var phone=document.getElementById('Phone-btn');
	var class1=document.getElementById('Class-btn');
	var File=document.getElementById('file');
	let flag=true;
	// else if(user.value.length<4){
	// document.getElementById("nameError").style.borderColor="red";	
	// document.getElementById("nameError").innerHTML="Username contain 4 letter minimum";
		// return false;
	// }
	// else{
		// document.getElementById("nameError").innerHTML="";
	// flag;
	// }

	if(phone.value==""){

		document.getElementById("phoneError").innerHTML="Phone number section cannot be empty";
		return false;
	}
	else if(phone.value.length!==10){
		document.getElementById("phoneError").innerHTML="Phone number contain 10 numbers at least";
		return false;
	}
	
	else {
		document.getElementById("phoneError").innerHTML="";
		flag;
	}
		
	if(class1.value==""){
		document.getElementById("classError").innerHTML="Class Name section cannot be empty";
		return false;
	}
	else {
		document.getElementById("classError").innerHTML="";
		flag;
	}
}*/