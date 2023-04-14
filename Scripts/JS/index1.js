// Get Elements Statements Starts
var openEl = document.getElementById("openMessage");
var closeEl = document.getElementById("closeMessage");
var fMessageEl = document.querySelector(".fMessage");
var sMessageEl = document.querySelector(".sMessage");
var messageEl = document.getElementById("message");
var actualMessageEl = document.querySelector("#actualMessage");
var fDarkModeEl = document.querySelector(".fDarkMode");
var sDarkModeEl = document.querySelector(".sDarkMode");
var onDEl = document.getElementById("onD");
var offDEl = document.getElementById("offD");
var bodyEl = document.getElementsByTagName("body")[0];
var divEl = document.getElementsByTagName("div");
var backSettingeEl = document.getElementById("backSettinge");
var settingsEl = document.getElementById("settings");
var accsettingsEl = document.getElementById("accSettings");
var backAccEl = document.getElementById("backAcc");
var accEl = document.getElementById("acc");
var assEl = document.getElementById("ass");
var closeWithEl = document.getElementById("closeWith");
var withdrawalEl = document.getElementById("withdrawal");
var withdrawEl = document.getElementById("withdraw");
var backAboutEl = document.getElementById("backAbout");
var aboutEl = document.getElementById("about");
var openAboutEl = document.getElementById("openAbout");
var userNameEl = document.getElementById("userrName");
var inputuserrNameEl = document.getElementsByClassName("username");
var referEl = document.getElementById("refer");
var backReferEl = document.getElementById("backRefer");
var refFriendsEl = document.getElementById("refFriends");
var bckCusEl = document.getElementById("bckCus");
var contactEl = document.getElementById("contact");
var cusServiceEl = document.getElementById("cusService");
var bankAccEl = document.getElementById("bankAcc");
var bankAccountEl = document.getElementById("bankAccount");
var backAccountEl = document.getElementById("backAccount");
var investmentsEl = document.getElementById("investments");
var conInvestEl = document.getElementById("conInvest");
var backInvestEl = document.getElementById("backInvest");
var fullNameEl = document.querySelectorAll(".fullName");
var currentLevelEl = document.getElementsByClassName("currentLevel");
var amntTocontributeEl = document.querySelectorAll(".amntTocontribute");
var amntToReceiveEl = document.querySelectorAll(".amntToReceive");
var recDurationEl = document.querySelectorAll(".recDuration");
var investEl = document.getElementById("invest");
var userInfosEl = document.getElementById("userInfos");
var userInfoEl = document.getElementById("userInfo");
var backUseEl = document.getElementById("backUse");
var changeUserNameEl = document.getElementById("changeUserName");
var changeEmailAddressEl = document.getElementById("changeEmailAddress");
var passChangeEl = document.getElementById("passChange");
var chngUseNameEl = document.getElementById("chngUseName");
var chngEmailEl = document.getElementById("chngEmail");
var chngPassEl = document.getElementById("chngPass");
var bckPssChngEl = document.getElementById("bckPssChng");
var bckEmailAddEl = document.getElementById("bckEmailAdd");
var bckUserNameEl = document.getElementById("bckUserName");
var changeUserNameEl = document.getElementById("changeUserName");
var changeEmailAddressEl = document.getElementById("changeEmailAddress");
var passChangeEl = document.getElementById("passChange");
var codeEl = document.getElementById("code");
var bckCodeEl = document.getElementById("bckCode");
var fogPassEl = document.getElementById("fogPass");
var investLEl = document.getElementById("investL");
var remPassEl = document.getElementById("remPass");
var bankEl = document.getElementById("bank");
var bckDetEl = document.getElementById("bckDet");
var addPo = document.getElementById("addPO");

$("#bank").hide(50);
addPo.onclick = function () {
   $("#bank").show(1500);
    
};

bckDetEl.onclick = function () {
   $("#bank").hide(1500);
};





var b = 0;
var c = 0;
var int = 0;
var ints = 0;
var userInt = 0;



while (userInt < inputuserrNameEl.length) {
const bb = userNameEl.innerHTML;
    inputuserrNameEl[userInt].innerHTML = bb;
    userInt++;

}





// onClick Functions Starts




bckCodeEl.onclick = function () {
    codeEl.setAttribute('class',"close")
    
};

fogPassEl.onclick = function () {
    codeEl.removeAttribute('class',"close")
    
};

bckPssChngEl.onclick = function () {
    passChangeEl.setAttribute('class',"close")
};


chngPassEl.onclick = function () {
    passChangeEl.removeAttribute('class',"close")
    
};


bckEmailAddEl.onclick = function () {
    changeEmailAddressEl.setAttribute('class',"close")
};

chngEmailEl.onclick = function () {
    changeEmailAddressEl.removeAttribute('class',"close")
    
};

bckUserNameEl.onclick = function () {
    changeUserNameEl.setAttribute('class',"close")
};


chngUseNameEl.onclick = function () {
    changeUserNameEl.removeAttribute('class',"close")
    
};

backUseEl.onclick = function () {
    userInfosEl.setAttribute('class', "close");
    
};

userInfoEl.onclick = function () {
    userInfosEl.removeAttribute('class', "close");
    
};

backInvestEl.onclick = function () {
    investmentsEl.setAttribute('class', "close");
    
};

investEl.onclick = function () {
    investmentsEl.removeAttribute('class', "close");
    
};



bankAccEl.onclick = function () {
    bankAccountEl.removeAttribute('class', "close");
    
};

backAccountEl.onclick = function () {
    bankAccountEl.setAttribute('class', "close");
    
};

bckCusEl.onclick = function () {
    contactEl.setAttribute('class', "close");
    
};

cusServiceEl.onclick = function () {
    contactEl.removeAttribute('class', "close");
    
};


backReferEl.onclick = function () {
    referEl.setAttribute('class', "close");
    
};

refFriendsEl.onclick = function () {
    referEl.removeAttribute('class', "close");
    
};


openAboutEl.onclick = function () {
    aboutEl.classList.remove("close");

};

backAboutEl.onclick = function () {
    aboutEl.classList.add("close");
};

assEl.onclick = function () {
    accsettingsEl.removeAttribute('class', "close");

};

backAccEl.onclick = function () {
    accsettingsEl.setAttribute('class', "close");

};


 closeWith.onclick = function () {
    withdrawalEl.setAttribute('class', "close");

};

withdrawEl.onclick = function () {
    withdrawalEl.removeAttribute('class', "close");

};


accEl.onclick = function () {
    settingsEl.removeAttribute('class', "close");
};


backSettingeEl.onclick = function () {
    settingsEl.setAttribute('class', "close");
};

offDEl.onclick = function () {
    sDarkModeEl.style.display = "none";
    fDarkModeEl.style.display = "block";
    bodyEl.setAttribute('class', "dark");

    while (int < divEl.length) {
        divEl[int].classList.add("dark");
        int++;
    }
    ints = 0;

};

onDEl.onclick = function () {
    sDarkModeEl.style.display = "block";
    fDarkModeEl.style.display = "none";
    bodyEl.removeAttribute('class', "dark");

    while (ints < divEl.length) {
        divEl[ints].classList.remove("dark");
        ints++;
    }function save_data() {
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
    int = 0;
};



openEl.onclick = function () {
    sMessageEl.style.display = "none";
    fMessageEl.style.display = "block";
    messageEl.removeAttribute('class', "close");

};

 closeEl.onclick = function () {
    sMessageEl.style.display = "block";
    fMessageEl.style.display = "none";
    messageEl.setAttribute('class', "close");
};

function logout() {
    ajax_request.open('logout.php');
    
}


