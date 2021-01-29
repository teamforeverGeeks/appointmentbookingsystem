function validation(){                                              // This is function calling.
	// This function is used to validate Name field.
	var firstname = document.getElementById('fn').value               // This is used to get the value of funcion. 
	if(firstname=="") {                                               // if...else function is used to check the condition.
		alert("add name please");
		 return false;                                                                                           //it will be redirect to the form.
	}
	// This function is used to validate Surname field.
	var surname = document.getElementById('sn').value
	if(surname==""){
		alert("add surname please");
		return false;
	}
		// This function is used to validate Age field.
	// This function is used to validate Telephone field
	var telephone = document.getElementById('telephone').value;
	
	if(telephone.length<9){
		alert("please enter a valid 9 number of telephone");
		return false;
	}
	else if(telephone.length>9){
		alert("please enter a valid 9 number of telephone");
		return false;
	}
	else if(telephone==""){
		alert("enter a telephone number");
		return false;
	}
// This function is used to validate Address field.
	var address = document.getElementById('textarea').value
	if(address==""){
		alert("please Enter the address");
		return false;
	}
	var state = document.getElementById('state').value
    if (state=="") {
    	alert("please select a sate.");
    	return false;
    }
    // This function is used to validate E-mail field.    
    var email = document.getElementById('email').value
    if (email=="") {
    	alert("please enter your email address.");
    	return false;
    }
    // This function is used to validate Feedback field.
    var feedback = document.getElementById('textarea1').value
    if (feedback=="") {
    	alert("please enter your feedback.");
    	return false;
    }
    var upass = document.getElementById('upass').value
   var cpass = document.getElementById('cpass').value
      if (upass!=cpass){
   	alert("please enter same password and conformpass");
        
   	  return false;
   	}
   

return true;
}