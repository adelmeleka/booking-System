function ValidateForm(inputText) {
    var pass = false;
    console.log(inputText.firstname.value);
    pass = ValidateFirstName(inputText.firstname.value);
    if(pass){
        pass = ValidateLastName(inputText.lastname.value);
    }
    if(pass){
        pass =ValidateEmail(inputText.email);
    }
    if(pass){
        pass = ValidatePassword(inputText.passwd.value);
    }
    if(pass){
        pass = ValidatePasswordFinal(inputText.passwd.value , inputText.cpasswd.value);
    }
    if(pass){
        return true;
    }
    return false;
}

function ValidateFirstName(inputText) {
    var div =  document.getElementById("firstNameError");
    if(inputText !== ""){
    div.classList.add("hide");
       return true;
   }else{
    document.RegistrationForm.firstname.focus();
 
    div.innerHTML = "First Name is empty";
    div.classList.remove("hide");
    return false;
   }
}

function ValidateLastName(inputText) {
    var div =  document.getElementById("lastNameError");
    if(inputText !== ""){
    div.classList.add("hide");
       return true;
   }else{
    document.RegistrationForm.lastname.focus();
    div.innerHTML = "Last Name is empty";
    div.classList.remove("hide");
    return false;
   }
}

function ValidateEmail(inputText) {
    var div =  document.getElementById("emailError");
    var confortingDiv =  document.getElementById("emailHelp");
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(inputText.value == ""){
        document.RegistrationForm.email.focus();
        div.innerHTML = "email is empty";
        div.classList.remove("hide");
        confortingDiv.classList.add("hide");
        return false;
    }
    else if (inputText.value.match(mailformat)) {
        document.RegistrationForm.email.focus();
        div.classList.add("hide");
        confortingDiv.classList.remove("hide");
        return true;
    } else {
        document.RegistrationForm.email.focus();
        div.innerHTML = "email is not in correct format";
        div.classList.remove("hide");
        confortingDiv.classList.add("hide");
        return false;
    }
}

function ValidatePassword(inputPass) {
    var div =  document.getElementById("passwordError");
    var password = "";
    password = inputPass;
    if(inputPass.length==0){
        document.RegistrationForm.passwd.focus();
        div.innerHTML = "Password is Required";
        div.classList.remove("hide");
        return false;
     } else if( password.length<5 || 15<password.length ){
        document.RegistrationForm.passwd.focus();
        div.innerHTML = "Password must be less than 15 charcachter and more than 5";
        div.classList.remove("hide");
        return false;
    }
    div.classList.add("hide");
    return true;
}

function ValidatePasswordFinal(inputPass , inputConfirmPass){
    var div =  document.getElementById("confirmError");
    var password = "";
    password = inputPass;
    var passwordConfirm = "";
    passwordConfirm = inputConfirmPass;
    if(passwordConfirm.length === 0){
        document.RegistrationForm.cpasswd.focus();
        div.innerHTML = "Password confirmation is Required";
        div.classList.remove("hide");
        return false;
     } else if( password !==  passwordConfirm ){
        document.RegistrationForm.cpasswd.focus();
        div.innerHTML = "pasword and confirmation is not matched";
        div.classList.remove("hide");
        return false;
    }
    div.classList.add("hide");
    return true;
}


