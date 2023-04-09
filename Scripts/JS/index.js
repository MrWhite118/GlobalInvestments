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
var answerEl1 = document.getElementById("answer1");
var answerEl2 = document.getElementById("answer2");
var faq = document.querySelectorAll(".open1");
var ppsEl = document.getElementById("pps");
var ppsEl1 = document.getElementById("pps1");
var ppsEl2 = document.getElementById("pps2");
var passEl = document.getElementById("pass");
var cPassEl = document.getElementById("cPass");
var logPassEl = document.getElementById("logPass");

// console.log(faq);

passEl.oninput = function () {

    if (passEl.value !== "") {
        ppsEl.style.display = "inline";
        ppsEl.onclick = function () {
            if (passEl.type == "password") {
                passEl.type = "text";
                ppsEl.setAttribute('class', "fas fa-eye-slash");

            } else {
                passEl.type = "password";
                ppsEl.setAttribute('class', "fas fa-eye");


            }

        };
    } else {
        ppsEl.style.display = "none";
    }

};


cPassEl.oninput = function () {

    if (cPassEl.value !== "") {
        ppsEl1.style.display = "inline";
        ppsEl1.onclick = function () {
            if (cPassEl.type == "password") {
                cPassEl.type = "text";
                ppsEl1.setAttribute('class', "fas fa-eye-slash");

            } else {
                cPassEl.type = "password";
                ppsEl1.setAttribute('class', "fas fa-eye");

            }

        };
    } else {
        ppsEl1.style.display = "none";
    }

};

logPassEl.oninput = function () {
    if (logPassEl.value !== "") {
        ppsEl2.style.display = "inline";
        ppsEl2.onclick = function () {
            if (logPassEl.type == "password") {
                logPassEl.type = "text";
                ppsEl2.setAttribute('class', "fas fa-eye-slash");

            } else {
                logPassEl.type = "password";
                ppsEl2.setAttribute('class', "fas fa-eye");


            }

        };


    } else {
        ppsEl2.style.display = "none";

    }
};






faq.forEach((header, i) => {
    header.addEventListener("click", () => {
        header.nextElementSibling.classList.toggle("active");

    });

});

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
};



fPWEl.onclick = function () {
    forgottenPassEl.removeAttribute('class', "close");
    signInEl.style.display = "none";

};


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
// document.getElementById("submita").disabled = true;
function save_data() {
    var form_element = document.getElementsByClassName("form_data");
    var form_data = new FormData();
    for (let count = 0; count < form_element.length; count++) {
        form_data.append(form_element[count].name, form_element[count].value);
    }

    document.getElementById("submita").disabled = true;

    var ajax_request;



    if (window.XMLHttpRequest) {
        ajax_request = new XMLHttpRequest();

    } else if (window.ActiveXObject) {
        ajax_request = new ActiveXObject("Microsoft.XMLHTTP");
    }

    // ajax_request.open('POST', 'something.php', true);
    // ajax_request.send(form_data);


    ajax_request.onreadystatechange = function () {
        if (ajax_request.readyState === 4 && ajax_request.status == 200) {
            console.log("yes");
            console.log(ajax_request.status);


            document.getElementById("submita").disabled = false;
            document.getElementById("users").reset();
            document.getElementById("message").innerHTML = ajax_request.responseText;

            setTimeout(function () {
                document.getElementById("message").innerHTML = "";

            }, 10000);
        }
    }


}