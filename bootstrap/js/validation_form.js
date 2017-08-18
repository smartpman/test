function validate_Form() {
	if(document.forms.myForm.u_name.value=="" || document.forms.myForm.u_name.value==null) {
		alert("Please provide your Username!");
		//document.forms.myForm.u_name.focus();
		return false;
	} else if(document.forms.myForm.password.value=="" || document.forms.myForm.password.value==null) {
		alert("Please provide your Password!");
		//document.forms.myForm.password.focus();
		return false;
	}
}


function validateForm() {
	if(document.forms.myForm.staffID.value=="" || document.forms.myForm.staffID.value==null) {
		alert("Please provide your staffID!");
		return false;
	}
	else if(document.forms.myForm.fullname.value=="" || document.forms.myForm.fullname.value==null) {
		alert("Please provide your Fullname!");
		return false;
	}else if(document.forms.myForm.address.value=="" || document.forms.myForm.address.value==null) {
		alert("Please provide your Address!");
		return false;
	}else if(document.forms.myForm.phone.value=="" || document.forms.myForm.phone.value==null ) {
		alert("Please provide your Phone!");
		return false;
	}else if(document.forms.myForm.email.value=="" || document.forms.myForm.email.value==null) {
		alert("Please provide your Email!");
		return false;
	}else if(document.forms.myForm.department.value=="" || document.forms.myForm.department.value==null) {
		alert("Please provide your Department");
		return false;
	}	
}

function validate_form_work(){
	if(document.forms.myForm.taskID.value=="" || document.forms.myForm.taskID.value==null) {
		alert("Please provide your taskID!");
		return false;
	}
	else if(document.forms.myForm.task.value=="" || document.forms.myForm.task.value==null) {
		alert("Please provide a Task!");
		return false;
	}else if(document.forms.myForm.comment.value=="" || document.forms.myForm.comment.value==null) {
		alert("Please Provide your Comment!");
		return false;
	}else if(document.forms.myForm.leader.value=="" || document.forms.myForm.leader.value==null) {
		alert("Please Provide Leader Name!");
		return false;
	}else if(document.forms.myForm.file1.value=="" || document.forms.myForm.file1.value==null ) {
		alert("Please Select a File!");
		return false;
	}else if(document.forms.myForm.file2.value=="" || document.forms.myForm.file2.value==null) {
		alert("Please Select a File");
		return false;
	}else if(document.forms.myForm.file3.value=="" || document.forms.myForm.file3.value==null) {
		alert("Please Select a File");
		return false;
	}	
}