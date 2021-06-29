	var currentTab = 0; // Current tab is set to be the first tab (0)
		showTab(currentTab); // Display the current tab

	function showTab(n) {
		  // This function will display the specified tab of the form...
		  var x = document.getElementsByClassName("tab");
		  x[n].style.display = "block";
		  //... and fix the Previous/Next buttons:
		  if (n == 0) {
			document.getElementById("prevBtn").style.display = "none";
		  } else {
			document.getElementById("prevBtn").style.display = "inline";
		  }
		  if (n == (x.length - 1)) {
			document.getElementById("nextBtn").innerHTML = "Submit";
		  } else {
			document.getElementById("nextBtn").innerHTML = "Next";
		  }
		  //... and run a function that will display the correct step indicator:
		  fixStepIndicator(n)
	};

	function nextPrev(n) {
		  // This function will figure out which tab to display
		  var x = document.getElementsByClassName("tab");
		  // Exit the function if any field in the current tab is invalid:
		  if (n == 1 && !validateForm()) return false;
		  // Hide the current tab:
		  x[currentTab].style.display = "none";
		  // Increase or decrease the current tab by 1:
		  currentTab = currentTab + n;
		  // if you have reached the end of the form...
		  if (currentTab >= x.length) {
			// ... the form gets submitted:
			document.getElementById("regForm").submit();
			return false;
		  }
		  // Otherwise, display the correct tab:
		  showTab(currentTab);
	};
		
	function validateForm() {
		  // This function deals with validation of the form fields
		  var x, y, i, valid = true;
		  x = document.getElementsByClassName("tab");
		  y = x[currentTab].getElementsByTagName("input");
		  // A loop that checks every input field in the current tab:
		  for (i = 0; i < y.length; i++) {
			// If a field is empty...
			if (y[i].value == "") {
			  // add an "invalid" class to the field:
			  y[i].className += " invalid";
			  // and set the current valid status to false
			  valid = false;
			}
		  }
		  // If the valid status is true, mark the step as finished and valid:
		  if (valid) {
			document.getElementsByClassName("step")[currentTab].className += " finish";
		  }
		  return valid; // return the valid status
	};
		
	function printError(elemId, hintMsg) {
		document.getElementById(elemId).innerHTML = hintMsg;
	};
		
	function validateForm2() {
			// Retrieving the values of form elements 
			var name = document.contactForm.name.value;
			var email = document.contactForm.email.value;
			var mobile = document.contactForm.mobile.value;
			
			// Defining error variables with a default value
			var nameErr = emailErr = mobileErr = true;
			
			// Validate name
			if(name == "") {
				printError("nameErr", "Будь ласка введіть ваше ім'я");
			} else {
				var regex = /^[A-Za-zА-Яа-яЁё]{3,20}$/;                
				if(regex.test(name) === false) {
					printError("nameErr", "Введіть дійсне ім’я");
				} else {
					printError("nameErr", "");
					nameErr = false;
				}
			}
			
			// Validate email address
			if(email == "") {
				printError("emailErr", "Введіть свою адресу електронної пошти ( email )");
			} else {
				// Regular expression for basic email validation
				var regex = /^\S+@\S+\.\S+$/;
				if(regex.test(email) === false) {
					printError("emailErr", "Будь ласка, введіть дійсну адресу електронної пошти");
				} else{
					printError("emailErr", "");
					emailErr = false;
				}
			}
			
			// Validate mobile number
			if(mobile == "") {
				printError("mobileErr", "Введіть номер свого мобільного телефону");
			} else {
				var regex = /^[1-9]\d{2,11}$/;
				if(regex.test(mobile) === false) {
					printError("mobileErr", "Введіть дійсний номер мобільного телефону від 3-х до 10-и цифр ");
				} else{
					printError("mobileErr", "");
					mobileErr = false;
				}
			}
			
			// Prevent the form from being submitted if there are any errors
			if((nameErr || emailErr || mobileErr) == true) {
			   return false;
			} 
	};
		
	function fixStepIndicator(n) {
		  // This function removes the "active" class of all steps...
		  var i, x = document.getElementsByClassName("step");
		  for (i = 0; i < x.length; i++) {
			x[i].className = x[i].className.replace(" active", "");
		  }
		  //... and adds the "active" class on the current step:
		  x[n].className += " active";
	};
		
	function myFunctionQuantityNumber() {
		var QuantityNumb1;
		var QuantityNumbSave;
		var QuantityNumbSavePar;
		var SaveInputQuantity;
			
		QuantityNumb1 = document.getElementById('QuantityNumber').value;
			
			if (QuantityNumb1 <= 10) {
			  QuantityNumbSave = 10;
			} else if (QuantityNumb1 <= 100) {
			  QuantityNumbSave = 100;
			} else if (QuantityNumb1 <= 1000) {
			  QuantityNumbSave = 1000;
			} else if (QuantityNumb1 <= 10000) {
			  QuantityNumbSave = 10000;
			} else if (QuantityNumb1 <= 100000) {
			  QuantityNumbSave = 100000;
			} else if (QuantityNumb1 <= 1000000) {
			  QuantityNumbSave = 100000;
			} else {
			  QuantityNumbSave = 100000;
			}
			
		QuantityNumbSavePar = document.getElementById('pG').innerHTML = '$' + QuantityNumbSave;
		SaveInputQuantity = document.getElementById('QuantityNumber').value = QuantityNumbSave;
	};