function ValidateLoginForm(inputText) {
    var pass = false;
    pass = ValidateLoginFormEmail(inputText.email);
    if(pass){
        pass = ValidateLoginFormPassword(inputText.passwd.value);
        console.log(pass);
    }
    if(pass){
        return true;
    }
    return false;
}

function ValidateLoginFormEmail(inputText) {
    var div =  document.getElementById("emailError");
    var confortingDiv =  document.getElementById("emailHelp");
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(inputText.value == ""){
        document.LoginForm.email.focus();
        div.innerHTML = "email is empty";
        div.classList.remove("hide");
        confortingDiv.classList.add("hide");
        return false;
    }
    else if (inputText.value.match(mailformat)) {
        document.LoginForm.email.focus();
        div.classList.add("hide");
        confortingDiv.classList.remove("hide");
        return true;
    } else {
        document.LoginForm.email.focus();
        div.innerHTML = "email is not in correct format";
        div.classList.remove("hide");
        confortingDiv.classList.add("hide");
        return false;
    }
}




function ValidateLoginFormPassword(inputPass) {
    var div =  document.getElementById("passwordError");
    var password = "";
    password = inputPass;
    if(inputPass.length==0){
        document.LoginForm.passwd.focus();
        div.innerHTML = "Password is Required";
        div.classList.remove("hide");
        return false;
     } else if( password.length<5 || 15<password.length ){
        document.LoginForm.passwd.focus();
        div.innerHTML = "Password must be less than 15 charcachter and more than 5";
        div.classList.remove("hide");
        return false;
    }
    div.classList.add("hide");
    return true;
}