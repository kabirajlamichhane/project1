function allvalidation()
{
	// alert("hello");
	var firstname=document.getElementById('fname').value;
	if(firstname == "")
	{
		alert ('firstname is required');
		return false;
	}

	var lastname=document.getElementById('lname').value;
	if(lastname == "")
	{
		alert('lastname is required');
		return false;
	}

	var phone = document.getElementById("phone");
    var RE = /^\d{10}$/;
    if(!RE.test(phone.value))
    {
        alert("You have entered an invalid phone number");
        phone.focus();
        return false;
    }
    // return true;

	var email=document.getElementById('mail');
    var emailre = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
   	if (!emailre.test(email.value))
   
    {
   		alert('Please provide a valid email address');
     	 email.focus();
    	return false;
	}

	return true;
	
}
