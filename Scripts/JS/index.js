var bar = document.getElementById("hom");
var s = document.getElementById("aft");
var upPop = document.querySelectorAll(".psignUp");
var signUpEl = document.querySelector(".signUp");
var signInEl = document.querySelector(".signIn");

var byNumberEl = document.getElementById("byNumber");
var byEmailEl = document.getElementById("byEmail");
var srchAccountEl = document.getElementById("srchAccount");
var bckforgottenPassEl = document.getElementById("bckforgottenPass");
var forgottenPassEl = document.getElementById("forgottenPass");
var numPartEl = document.getElementById("numPart");
var emailPartEl = document.getElementById("emailPart");
var sbyEmailEl = document.getElementById("sbyEmail");
var sbyPhoneEl = document.getElementById("sbyPhone");
var fPWEl = document.getElementById("fPW");

sbyEmailEl.onclick = function () {
    numPartEl.style.display = "none";
    emailPartEl.style.display = "block";
    byEmailEl.style.display = "none";
    byNumberEl.style.display = "block";

};

sbyPhoneEl.onclick = function () {
    numPartEl.style.display = "block";
    emailPartEl.style.display = "none";
    byEmailEl.style.display = "block";
    byNumberEl.style.display = "none";
};

bckforgottenPassEl.onclick = function () {
    forgottenPassEl.setAttribute('class', "close");
}

fPWEl.onclick = function () {
    forgottenPassEl.removeAttribute('class', "close");
    signInEl.style.display = "none";

}


function signUp() {
    signUpEl.style.display = "block";
    signInEl.style.display = "none";
}
function signIn() {
    signInEl.style.display = "block";
    signUpEl.style.display = "none";
}

function cPopUp() {
    signInEl.style.display = "none";
    signUpEl.style.display = "none";
}

bar.onclick = function () {
    s.style.display = "block";
};

s.onclick = function () {
    s.style.display = "none";
};

var bbbbbb = document.getElementById("submit");

bbbbbb.setAttribute('disabled',"");
function save_data() {
    var form_element = document.getElementsByClassName("form_data");
    var form_data = new formData();
    for (let count = 0; count < form_element.length; count++) {
        form_data.append(form_element[count].name, form_element[count].value);
    }
    document.getElementById("submit").disabled = true;
    var ajax_request = new XMLHttpRequest();
    ajax_request.open('POST', '');
    ajax_request.send(form_data);
    ajax_request.onreadystatechange = function () {
        if (ajax_request.readyState == 7 && ajax_request.status == 200) {
            document.getElementById("submit").disabled = false;
            document.getElementById("users").reset();
            document.getElementById("message").innerHTML = ajax_request.responseText;

            setTimeout(function() {
            document.getElementById("message").innerHTML = "";
                
            }, 2000)
        }
    }


}