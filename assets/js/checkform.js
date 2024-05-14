
function checkFormRegister() {
    
    var name = document.forms["myForm"]["name"].value;
    var email = document.forms["myForm"]["email"].value;
    var pass1 = document.forms["myForm"]["password1"].value;
    var pass2 = document.forms["myForm"]["password2"].value;
    var error = false;
    if (name == "") {
        document.getElementById("error1").innerHTML = "Bạn chưa nhập tên tài khoản"; 
        
        error = true;
    } else {
        document.getElementById("error1").innerHTML = ""; 
    }

    if (email == "") {
        document.getElementById("error2").innerHTML = "Bạn chưa nhập email"; 
        error = true;
    } else if (!/^[a-zA-Z0-9]+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/.test(email)) {
        document.getElementById("error2").innerHTML = "Email không hợp lệ"; 
        error = true;
    } else {
        document.getElementById("error2").innerHTML = ""; 
    }

    if (pass1 == "") {
        document.getElementById("error3").innerHTML = "Bạn chưa nhập password"; 
        error = true;
    } else if (pass1.length < 8) {
        document.getElementById("error3").innerHTML = "Password từ 8 kí tự trở lên"; 
        error = true;
    } else {
        document.getElementById("error3").innerHTML = ""; 
    }

    if (pass2 == "") {
        document.getElementById("error4").innerHTML = "Bạn chưa nhập lại password"; 
        error = true;
    } else if (pass1 != pass2) {
        document.getElementById("error4").innerHTML = "Password không trùng khớp"; 
        error = true;
    } else {
        document.getElementById("error4").innerHTML = ""; 
    }

    return !error;
}


function checkFormLogin() {
    var email = document.forms["formLogin"]["email"].value;
    var pass1 = document.forms["formLogin"]["password1"].value;
    var error = false;
    if (email == "") {
        document.getElementById("error5").innerHTML = "Bạn chưa nhập email";
        error = true;
    } else if (!/^[a-zA-Z0-9]+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/.test(email)) {
        document.getElementById("error5").innerHTML = "Email không hợp lệ";
        error = true;
    } else {
        document.getElementById("error5").innerHTML = "";
    }

    if (pass1 == "") {
        document.getElementById("error6").innerHTML = "Bạn chưa nhập password";
        error = true;
    } else if (pass1.length < 8) {
        document.getElementById("error6").innerHTML = "Password từ 8 kí tự trở lên";
        error = true;
    } else {
        document.getElementById("error6").innerHTML = "";
    }
    return !error;
}