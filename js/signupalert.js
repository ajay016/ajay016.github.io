function validate() {
	var username = document.getElementByID('first');
	var email = document.getElementByID('email');

	if (username.value =="" || email.value == "")
	{
		alert("No blanks");
		return false;
	}
	else {
		true;
	}
}