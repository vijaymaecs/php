function formval() {
    var sName = document.forms["enqForm"]["name"];
    var sMail = document.forms["enqForm"]["email"];
    let sPhone = document.forms["enqForm"]["contact"];
    var sCourse = document.forms["enqForm"]["course"];
    var sMode = document.forms["enqForm"]["mode"];

    let number = /[0-9]/;
    let format = /\d{10}/;
    let letters = /[A-Za-z]+/;
    let mailformat = /[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)/;

    if (sName.value == "") {
        document.getElementById("err").innerHTML = "Name Field Cannot be Empty";
        document.getElementById("err").style.display = "block";
        sName.focus();
        return false;
    }

    if (!(sName.value.match(letters))) {
        document.getElementById("err").innerHTML = "Name Field Cannot Contain Numbers";
        document.getElementById("err").style.display = "block";
        sName.focus();
        return false;
    }

    if (sMail.value == "") {
        document.getElementById("err").innerHTML = "eMail Field Cannot be Empty";
        document.getElementById("err").style.display = "block";
        sMail.focus();
        return false;
    }

    if (!(sMail.value.match(mailformat))) {
        document.getElementById("err").innerHTML = "Enter a Valid eMail Address";
        document.getElementById("err").style.display = "block";
        sMail.focus();
        return false;
    }

    if ((sPhone.value == "")) {
        document.getElementById("err").innerHTML = "Contact Number cannot be Empty";
        document.getElementById("err").style.display = "block";
        sPhone.focus();
        return false;
    }

    if (!(sPhone.value.match(number))) {
        document.getElementById("err").innerHTML = "Contact Number cannot be alpha characters";
        document.getElementById("err").style.display = "block";
        sPhone.focus();
        return false;
    }

    if (!(sPhone.value.match(format))) {
        document.getElementById("err").innerHTML = "Contact Number cannot be less then 10 digits";
        document.getElementById("err").style.display = "block";
        sPhone.focus();
        return false;
    } else {
        document.getElementById("err").style.display = "none";
    }

    if (sCourse.value == "Select Your Course") {
        document.getElementById("err").innerHTML = "Select your Course";
        document.getElementById("err").style.display = "block";
        sCourse.focus();
        return false;
    }

    if (sMode.value == "Course Mode") {
        document.getElementById("err").innerHTML = "Select Course Mode";
        document.getElementById("err").style.display = "block";
        sMode.focus();
        return false;
    }

    return true;
}