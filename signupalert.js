function validate() {
	var firstName = document.forms["form1"]["first"].value;
	var lastName = document.forms["form1"]["last"].value;
	var email = document.forms["form1"]["email"].value;
	var address = document.forms["form1"]["address"].value;
	var phone = document.forms["form1"]["phone"].value;
	var username = document.forms["form1"]["uid"].value;
	var pass = document.forms["form1"]["pwd"].value;

	if (firstName == "")
	{
		alert("Please Enter your First Name");
		return false;
	}
	else if (lastName == "") {
		alert("Please Enter your Last Name");
		return false;
	}
	else if (email == "") {
		alert("Please Enter your Email");
		return false;
	}
	else if (address == "") {
		alert("Please Enter your Address");
		return false;
	}
	else if (phone == "") {
		alert("Please Enter your Phone Number");
		return false;
	}
	else if (username == "") {
		alert("Please Enter a Username");
		return false;
	}
	else if (pass == "") {
		alert("Please Enter a Password");
		return false;
	}
	else {
		return true; 
	}
}