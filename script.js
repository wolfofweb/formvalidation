addEventListener('submit', event => {
    validate()
    //If validation fails the form will not be submitted by preventing default
    if (validate() == false) {
        event.preventDefault();
    }
})
//Function for validations
function validate() {
    let fname = document.getElementById('fname')
    let lname = document.getElementById('lname')
    let mobile = document.getElementById('mobile');
    let nameAlert = document.querySelector(".lname");
    let numberAlert = document.querySelector(".mobile");
    //First name should not match last name
    if (fname.value.toLowerCase() == lname.value.toLowerCase()) {
        nameAlert.style.display = "block";
        nameAlert.innerText = "First Name and Last Name should not be same";
        return false;
    }
    //First name and last name must have more than 3 characters
    else if (fname.value.length <= 3 || lname.value.length <= 3) {
        nameAlert.style.display = "block";
        nameAlert.innerText = "First Name and last name should have minimum of 3 characters"
        return false;
    }
    //Mobile number must have ten characters
    else if (mobile.value.length != 10) {
        numberAlert.style.display = "block";
        numberAlert.innerText = "Ten Digits of mobile number is required";
        return false;
    }
    //only numerical values should be entered in mobile number field
    else if (isNaN(mobile.value)) {
        numberAlert.style.display = "block";
        numberAlert.innerText = "Enter a valid mobile number\nThe format must be 9999999999"
        return false;
    }
    //If all the above validations passes then, the function returns true
    else {
        return true;
    }
}
//function for reset button
function resetValues() {
    document.getElementById("fname").value = "";
    document.getElementById("lname").value = "";
    document.getElementById("dob").value = "";
    document.getElementById("email").value = "";
    document.getElementById("mobile").value = "";
    document.getElementById("education").value = "";
    document.getElementById("passedOut").value = "";
    document.getElementById("classPreference").value = "";
    document.getElementById("course").value = "";
}