/**
 * Nav Bar scripts
 */

function openLogInForm() {
    document.getElementById("signUpForm").style.display = "none";
    document.getElementById("logInForm").style.display = "block";
}

function closeLogInForm() {
    document.getElementById("logInForm").style.display = "none";
}

function openSignUpForm() {
    document.getElementById("logInForm").style.display = "none";
    document.getElementById("signUpForm").style.display = "block";
}

function closeSignUpForm() {
    document.getElementById("signUpForm").style.display = "none";
}

function logOutAlert() {
    alert("Logging Out..!!!")
    return true;
}

function logInValidation() {
    let name = document.getElementById("logInForms").elements[0].value;
    let pwd = document.getElementById("logInForms").elements[1].value;
    if (name == '' || lName == '') {
        alert("enter all values");
        return false;
    }

    if (!userNameValidation(name)) {
        alert("User Name contains only Alpha Numeric values and length should be atleast 5..!!");
        return false;
    }
    return true;
}

function signUpFormValidation() {
    let name = document.getElementById("signUpForms").elements[1].value;
    let lName = document.getElementById("signUpForms").elements[2].value;
    let email = document.getElementById("signUpForms").elements[3].value;
    let user = document.getElementById("signUpForms").elements[4].value;
    let password = document.getElementById("signUpForms").elements[5].value;
    let repeatPassword = document.getElementById("signUpForms").elements[6].value;
    if (name == '' || lName == '' || email == '' || user == '' || password == '' || repeatPassword == '') {
        alert("enter all values");
        return false;
    }

    if (!validateSignUpFormFields(name, lName, email, user, password, repeatPassword)) {
        document.getElementById("signUpForms").reset();
        return false;
    }
    return true;
}
function validateSignUpFormFields(name, lName, email, user, password, repeatPassword) {

    if (!firstNameValidation(name)) {
        alert("You have entered an invalid Name!");
        return false;
    }
    if (!lastNameValidation(lName)) {
        alert("You have entered an invalid Last Name!");
        return false;
    }
    if (!emailValidation(email)) {
        alert("You have entered an invalid email address!");
        return false;
    }

    if (!userNameValidation(user)) {
        alert("Invalid user name format. Only alphanumeric values are allowed and length should be atleast 5.!");
        return false;
    }

    if (password !== repeatPassword) {
        alert("Passwords do not match");
        return false;
    }

    return true;

}

function firstNameValidation(name) {
    var namePattern = /^[a-zA-Z]+$/;
    if (!namePattern.test(name)) {
        return (false);
    }
    return true;
}

function lastNameValidation(lName) {
    var namePattern = /^[a-zA-Z]+\s?[a-zA-Z]*$/;
    if (!namePattern.test(lName)) {
        return (false);
    }
    return true;
}

function emailValidation(email) {
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (!emailPattern.test(email)) {
        return (false);
    }
    return true;
}

function phoneNumberValidation(number) {
    var phoneNumberFormat = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    if (!phoneNumberFormat.test(number)) {
        return false;
    }
    return true;
}

function userNameValidation(uname) {
    var usernamePatter = /^[a-zA-Z0-9]*$/;
    if (!usernamePatter.test(uname) || uname.length < 5) {
        return false;
    }
    return true;
}

// method to call blogs on load of blogs.php
function callBlogs() {
    location.replace("https://rajathk.uta.cloud/MuthappaKallichanda_portfolio/blogs/");
}


/**
 *  Edit details validation starts from here
 **/

function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}

//contact info
function validateContactInfo() {
    var address_line1 = document.getElementById("contactMeForm").elements[1].value;
    var address_line2 = document.getElementById("contactMeForm").elements[2].value;
    var city = document.getElementById("contactMeForm").elements[3].value;
    var state = document.getElementById("contactMeForm").elements[4].value;
    var country = document.getElementById("contactMeForm").elements[5].value;
    var nationality = document.getElementById("contactMeForm").elements[6].value;
    var zip = document.getElementById("contactMeForm").elements[7].value;
    var dob = document.getElementById("contactMeForm").elements[8].value;
    var personal_number = document.getElementById("contactMeForm").elements[9].value;
    var whatsapp_number = document.getElementById("contactMeForm").elements[10].value;
    var skype = document.getElementById("contactMeForm").elements[11].value;
    var email_id = document.getElementById("contactMeForm").elements[12].value;
    var website = document.getElementById("contactMeForm").elements[13].value;

    if (!lastNameValidation(city)) {
        alert("Invalid City Name..!!");
        return (false);
    }

    if (!lastNameValidation(state)) {
        alert("Invalid State Name..!!");
        return (false);
    }

    if (!lastNameValidation(country)) {
        alert("Invalid Country Name..!!");
        return (false);
    }

    if (! /^[1-9][0-9]{4}$/.test(zip)) {
        alert("Invalid Zip..!!");
        return (false);
    }

    if (!phoneNumberValidation(personal_number)) {
        alert("Invalid Personal Number..!!");
        return (false);
    }

    if (!phoneNumberValidation(whatsapp_number)) {
        alert("Invalid Personal Number..!!");
        return (false);
    }

    if (!emailValidation(email_id)) {
        alert("Invalid Email id..!!");
        return (false);
    }

    if (! /^www.[a-zA-Z0-p]+.com$/.test(website)) {
        alert("Invalid Website..!!");
        return (false);
    }

    return true;
}

// contact me form 
function contactMeValidateInput() {
    var name = document.getElementById("contactMe").elements[1].value;
    var email = document.getElementById("contactMe").elements[2].value;
    var phone = document.getElementById("contactMe").elements[3].value;
    var msg = document.getElementById("contactMe").elements[4].value;

    if (name == '' || email == '' || phone == '' || msg == '') {
        alert("Enter all the values");
        return false;
    }
    if (!lastNameValidation(name)) {
        alert('Invalid Name entered');
        return false;
    }
    if (!emailValidation(email)) {
        alert('Invalid Email entered');
        return false;
    }
    if (!phoneNumberValidation(phone)) {
        alert('Invalid Phone number entered');
        return false;
    }
    alert("Email would be sent to Rajath with the below details..!");
    return true;
}