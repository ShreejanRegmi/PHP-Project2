function deleteT(){//function to delete the type of content 
	var id=this.id;//id is set
	var rowNumber =this.parentNode.parentNode.rowIndex;//the row number which is to be done
	var className= this.className;//the classname of the element
	var parentId=this.parentNode.parentNode.parentNode.parentNode.id;//parent id is set
	
	var deleteRequest= new XMLHttpRequest();//new server request is formed
	
	if(className=="delete-f"){
		if(confirm("Are you sure?"))
			deleteRequest.open('POST','deletefurniture', true);//request is sent
		else
			return;
	}
	else if(className=="delete-c"){
		if(confirm("Are you sure?"))
			deleteRequest.open('POST', 'deletecategory', true);//request is sent
		else
			return;
	}
	else if(className=="delete-u"){
		if(confirm("Are you sure?"))
			deleteRequest.open('POST', 'deleteuser', true);//request is sent
		else
			return;
	}

	var furdata= new FormData();//new data is made to be sent
	furdata.append('id' ,id);//id is appended
	deleteRequest.send(furdata);//the data is sent
	deleteRequest.onreadystatechange=function(){//when ready
		if(deleteRequest.readyState==4){//if the client gets the output
  				document.getElementById(parentId).deleteRow(rowNumber);//remove the row
		}
	}
}

function searchFunction(){//function for search
	var contentBox= document.getElementById('search-content');//the content where data is to be displayed
	if(this.value==""){//if empty
		contentBox.innerHTML="";//set empty content
		contentBox.style.display=none;//hide display
	 	return;
	 }
	var searchRequest = new XMLHttpRequest();//new http request is formed 
	searchRequest.open('POST', '../pages/getFurnitures.php', true);//POST request is created
	var data= new FormData();//data to be sent
	data.append('query',this.value);//the data is appended
	searchRequest.send(data);//the data is sent
	searchRequest.onreadystatechange=function(){//when the client gets the output
		if(searchRequest.readyState==4){//when ready
			contentBox.innerHTML=searchRequest.responseText;//the search content is set
			contentBox.style.display='block';//css is set
		}
	}
}

function checkImageExtension(){//function to check image extension
	var numOfFiles = this.files.length;//number of files
	var extCheck = true;//boolean set
	var submitButton=document.getElementById('furniture-submit');
	submitButton.disabled=false;
	var imageText=document.getElementById('image-text');
	imageText.innerHTML="Image";
	if(numOfFiles>0){//if the button has some value set
		for (var i = 0; i < numOfFiles; i++) {//the number of images uploaded
			var eachFile= this.files.item(i).name;//name is returned
			var ext = eachFile.substring(eachFile.lastIndexOf('.') + 1).toLowerCase();//extension is extracted
			if(ext != "gif" && ext != "jpeg" && ext != "jpg" && ext != "png"){//if none of these
				extCheck=false;//false is returned
				break;
			}
		}
	}
	if(extCheck==false){//if false
		submitButton.disabled=true;//hide the button
		imageText.innerHTML='Image '+'<p style="color: red;">Invalid filetype</p>';//Invalid filetype is shown
	}
}

function checkUpdateImgExt(){//function to check for image update extension
	var extCheck=true;
	var submitButton=document.getElementById('update-submit');
	submitButton.disabled=false;//flag, first it is not disabled
	var filename=this.value;//filename is set
	if(filename!=""){//if any file uploaded
		var ext= filename.substring(filename.lastIndexOf('.')+1).toLowerCase();//extension of file is extracted
		if(ext != "gif" && ext != "jpeg" && ext != "jpg" && ext != "png"){//if none of them
				extCheck=false;//false boolean
		}

		if(extCheck==false){
			submitButton.disabled=true;//the button is disabled
		}
	}
}

function reviewFeedback(){//function to review the enquiries
	var rowNumber =this.parentNode.parentNode.rowIndex;
	var thisRow=document.getElementsByTagName('tr')[rowNumber];
	var change1=thisRow.childNodes[4];
	var change2=thisRow.childNodes[5];
	var change3= thisRow.childNodes[6];
	var reviewRequest= new XMLHttpRequest();//new server request is formed
	reviewRequest.open('POST', '../pages/reviewRequest.php', true);//post request is sent to server
	var data= new FormData();//new data to be sent to the server
	data.append('id', this.id);//append the data to the variable
	reviewRequest.send(data);//send the data 
	reviewRequest.onreadystatechange=function(){//after the server is ready
		if(reviewRequest.readyState==4){///if client gets the response
			change1.innerHTML= 'Completed';//set inner html
			change2.innerHTML= reviewRequest.responseText;//set response text
			change3.style.display='none';//hide the display
	 	}
	 }
}

function loadFunction(){
	var furnitureDelete = document.getElementsByClassName("delete-f");
	for (var i = 0; i < furnitureDelete.length; i++) {
		furnitureDelete[i].addEventListener('click', deleteT);//add event listener to the button
	}
	var categoryDelete =document.getElementsByClassName("delete-c");
	for (var i = 0; i < categoryDelete.length; i++) {
		categoryDelete[i].addEventListener('click', deleteT);//add event listener to the button
	}
	var userDelete =document.getElementsByClassName("delete-u");
	for (var i = 0; i < userDelete.length; i++) {
		userDelete[i].addEventListener('click', deleteT);//add event listener to the button
	}	

	var searchBox= document.getElementById('search');
	if(searchBox)
		searchBox.addEventListener('keyup', searchFunction);//add event listener to each key up event in search bar
	
	var furnitureImageBtn = document.getElementById('furniture-image');
	if(furnitureImageBtn)
		furnitureImageBtn.addEventListener('change', checkImageExtension); //add event listener to upload button change
	 
	 var updateImageBtn= document.getElementById('update-image');
	 if(updateImageBtn)
	 	updateImageBtn.addEventListener('change', checkUpdateImgExt);//add event listener to update image upload button

	 var reviewButton= document.getElementsByClassName('review-f');
	 for (var i = 0; i < reviewButton.length; i++) {
	 	reviewButton[i].addEventListener('click', reviewFeedback);//add event listener to review buttons
	 }
}

document.addEventListener('DOMContentLoaded', loadFunction);//js runs only after page is loaded fully