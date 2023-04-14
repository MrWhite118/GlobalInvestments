

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="icon" href="../Images/G.I">
    <script src="../Scripts/JS/jquery-3.5.1.min.js"></script>
    <script src="../Scripts/JS/typed.min.js"></script>
</head>

<body>

<div>
    <!-- <?php
    

?> -->
</div>
    <header>
        <div id="b">
            <span class="fa fa-bars" id="hom" title="Navigations"></span>
            <nav class="links" id="aft">
                <a href="#home" title="Home">
                    <span class="fa fa-home"></span> Home</a>
                <a href="#about" title="About us">
                    <span class="fa fa-th"></span> About</a>
                <a href="#" title="Create an Account" class="psignUp" onclick="signUp()">
                    <span class="fa fa-user-plus"></span> Sign Up</a>
                <a href="#" title="Already have an Account?" onclick="signIn()">
                    <span class="fa fa-sign-in-alt"></span> Log In</a>
                <a href="#contact" title="Contact us">
                    <span class="fa fa-phone"></span> Contacts</a>
            </nav>
        </div>
        <div id="div">
            <img src="../Images/G.I" alt="g.i" width="20px" id="logo">
            <h1 class="cName"> Global
                <span>Invest</span>
            </h1>
            <!-- <span class="fa fa-list" id="home"></span> -->
            <nav class="b">
                <a href="#home" title="Home">
                    <span class="fa fa-home"></span> Home</a>
                <a href="#about" title="About us">
                    <span class="fa fa-th"></span> About</a>
                <a href="#" title="Create an Account" class="psignUp" onclick="signUp()">
                    <span class="fa fa-user-plus"></span> Sign Up</a>
                <a href="#" title="Already have an Account?" onclick="signIn()">
                    <span class="fa fa-sign-in-alt"></span> Log In</a>
                <a href="#contact" title="Contact us">
                    <span class="fa fa-phone"></span> Contacts</a>
            </nav>
        </div>
    </header>
    <div id="accounts">
        <div class="signUp">
            <div class="closeb">
                <span class="fa fa-times" onclick="cPopUp()"></span>
            </div>
            <form id="users" method="POST" action="login.php">
                <span id="message"></span>
                <fieldset>
                    <legend>Create an Account</legend>
                    <label for="fname">First Name:
                        <input type="text" placeholder="Input firstname here..." class="form-control form_data" name="fname" id="fName" required>
                    </label>
                    <label for="mname">Middle Name:
                        <input type="text" placeholder="Input middle here..." class="form-control form_data" name="mname" id="mName">
                    </label>
                    <label for="lname">Last Name:
                        <input type="text" placeholder="Input lastname here..." class="form-control form_data"  name="lname" id="lName" required>
                    </label>
                    <label for="number">Phone Number:
                        <input type="number" placeholder="Input phone No here..." class="form-control form_data" name="pNo" id="pNo" required>
                    </label>
                    <label for="email">Email Address:
                        <input type="email" placeholder="Enter Email here..." class="form-control form_data" name="email" id="email" required>
                    </label>
                    <label for="ref">Referral code:
                        <input type="text" placeholder="Enter referal code here..." class="form-control form_data" name="reff" id="reff">
                    </label>
                    <label for="uname">Username:
                        <input type="text" placeholder="Input prefered username here..." class="form-control form_data" name="uname" id="uName" required>
                    </label>
                    <label for="pass">Password:
                        <input type="password" placeholder="Input password here..." class="form-control form_data pps" name="password" id="pass" required> <span class="fas fa-eye" id="pps"></span>
                    </label>
                    <label for="cpass">Confirm Password:
                        <input type="password" placeholder="Re-write password here..." class="form-control form_data pps" name="cPass" id="cPass"> <span class="fas fa-eye" id="pps1"></span>
                    </label>
                    <label for="submit">
                        <input type="submit" name="signUp" value="Sign Up" class="sign" id="submita">
                    </label>
                    <p>Already have an Account?
                        <a href="#" onclick="signIn()">Sign In</a>
                    </p>
                </fieldset>
            </form>
        </div>
        <div class="signIn">
            <div class="closeb">
                <span class="fa fa-times" onclick="cPopUp()"></span>
            </div>
            <form action="login.php" method="POST">
                <fieldset>
                <?php if (isset($_GET['error'])) { ?>

                <p class="error"><?php echo $_GET['error']; ?></p>

                <?php } ?>
                    <legend>Sign In</legend>
                    <label for="uname">Username:
                        <input type="text" name="uname" placeholder="Input your username here..." required id="username">
                    </label>
                    <label for="pass">Password:
                        <input type="password" name="password" placeholder="Input your password here..." required id="logPass"> <span class="fas fa-eye" id="pps2"></span>
                    </label>
                    <input type="submit" value="Sign In" class="sign" id="login">
                    </label>
                    <p>
                        <a href="#" id="fPW">Forgotten Password?</a>
                    </p>
                    <p>Don't have an Account?
                        <a href="#" onclick="signUp()">Sign Up</a>
                    </p>
                </fieldset>
            </form>
        </div>
    </div>
    <section id="home">
        
        <p>Contribution has just gotten Easier and Faster...</p>
        <h1 class="typ"></h1>
        <p>From a Thousand Naira to One Hundred and Sixty Thousand Naira (N160,000) within 60 Days!</p>
        <br>

        <p>Click on the button below to start your journey</p>
        <a href="#" id="hSignUp" class="hSignUp-white hSignUp-animation psignUp" onclick="signUp()">Sign Up</a>
    </section>
    <section id="about">
        <h1 id="fh1">About Global Invest (G.I)</h1>
        <p>Welcome to
            <b>Global Investment (G.I)...</b>
        </p>
        <p>This is a peer to peer Investment platform that allows you to watch your money grow from a Thousand Naira (N1,000)
            to One Hundred and Sixty Thousand Naira (N160,000.00) within 60 Days, so this simply means it is a Pay 'n' Get
            platform that you can double your money within a speculated amount of time...</p>
        <p>This platform is not offerring to do giveaway o, because there's a saying that "Free things never last" and besides
            what you worked hard for is what you'll find value in, so you're to have it in mind that the aim of this platform
            is to help people help themselves, that's why it's called a
            <b>Peer to Peer</b> Investment platform...</p>
        <p>Let's put it this way so it will be more easier for you to understand what we're trying to accomplish. Now see this
            platform as a place of contribution, like the one that they'll say: "This time a particular individual will be
            the one to collect all that has been gathered now" Then after that "The next time another individual will be
            the one to collect it" and so on, so that's just how it works, but with the help of this platform multiple individuals
            can collect the gatherings at the same time, so that's the goal, we're not here to promise to give you money,
            we just want to assist you in helping yourself. So i hope now you see that it's not too good to be true, it's just common
            sense that isn't common with many people these days, we're all just trying to survive...</p>
        <h2 id="fh2">How does this works?</h2>
        <p>No one says it's gonna be easy but we all know that money won't grow legs overnight and walk up to you in the morning,
            so you gats work towards it yourself, There's no such thing as "small work", we all are just praying for blessings...</p>
        <p>There are originally
            <b>Ten (10) levels</b> in this platform where you'll have to pass through to make this possible...</p>
        <div id="levels">
            <fieldset>
                <legend>
                    <h1>Level 1</h1>
                </legend>
                <p>N1,000 - N5,000</p>
                <p>Duration: 5 mins</p>
            </fieldset>
            <fieldset>
                <legend>
                    <h1>Level 2</h1>
                </legend>
                <p>N3,000 - N6,000</p>
                <p>Duration: 1 Day</p>
            </fieldset>
            <fieldset>
                <legend>
                    <h1>Level 3</h1>
                </legend>
                <p>N5,000 - N10,000</p>
                <p>Duration: 2 Days</p>
            </fieldset>
            <fieldset>
                <legend>
                    <h1>Level 4</h1>
                </legend>
                <p>N8,000 - N16,000</p>
                <p>Duration: 4 Days</p>
            </fieldset>
            <fieldset>
                <legend>
                    <h1>Level 5</h1>
                </legend>
                <p>N10,000 - N20,000</p>
                <p>Duration: 6 Days</p>
            </fieldset>
            <fieldset>
                <legend>
                    <h1>Level 6</h1>
                </legend>
                <p>N15,000 - N30,000</p>
                <p>Duration: 8 Days</p>
            </fieldset>
            <fieldset>
                <legend>
                    <h1>Level 7</h1>
                </legend>
                <p>N20,000 - N40,000</p>
                <p>Duration: 8 Days</p>
            </fieldset>
            <fieldset>
                <legend>
                    <h1>Level 8</h1>
                </legend>
                <p>N35,000 - N70,000</p>
                <p>Duration: 10 Days</p>
            </fieldset>
            <fieldset>
                <legend>
                    <h1>Level 9</h1>
                </legend>
                <p>N40,000 - N80,000</p>
                <p>Duration: 10 Days</p>
            </fieldset>
            <fieldset>
                <legend>
                    <h1>Level 10</h1>
                </legend>
                <p>N75,000 - N160,000</p>
                <p>Duration: 11 Days</p>
            </fieldset>
        </div>
    </section>

    <!-- Contact Section Starts -->
    
  
    <section class="contact" id="contact">
        <div>
            <img src="../Images/G.I" alt="g.i" width="20px" class="logo">
            <h1 class="cName"> Global
                <span>Invest</span>
            </h1>
        </div>

        <div id="contacts">
            <h3>Get in touch with us</h3>
            <div>

                <a href="mailto:globalinvestment118@gmail.com">
                    <i class="far fa-envelope"></i>
                    <span>Email</span>
                </a>

            </div>
            <div>

                <a href="#">
                    <i class="fab fa-whatsapp"></i>
                    <span>WhatsApp</span>
                </a>

            </div>
            <div>

                <a href="https://web.facebook.com/Global.Invest118">
                    <i class="fab fa-facebook"></i>
                    <span>Facebook</span>
                </a>

            </div>
            <div>

                <a href="https://twitter.com/GlobalInvest118">
                    <i class="fab fa-twitter"></i>
                    <span>Twitter</span>
                </a>

            </div>
            <div>

                <a href="https://t.me/GlobalInvestment118">
                    <i class="fab fa-telegram"></i>
                    <span>Telegram</span>
                </a>

            </div>
            <div>

                <a href="#">
                    <i class="fab fa-tiktok"></i>
                    <span>TikTok</span>
                </a>

            </div>
            <div>

                <a href="https://www.instagram.com/global_investment118/">
                    <i class="fab fa-instagram"></i>
                    <span>Instagram</span>
                </a>

            </div>
        </div>
        <div class="ooooo">
            <h3>Other Benefits</h3>
            <div>
                <a href="https://www.globaltechsworld.net/courses-single-post.php?Course_Overview=3?WEB%20Frontend%20and%20BackEnd%20Dev">
                    <i class="fas fa-paint-brush"></i>
                    <span>Web Design</span>
                </a>

            </div>
            <div>
                <a href="https://www.globaltechsworld.net/courses-single-post.php?Course_Overview=11?GRAPHICS%20DESIGN%20AND%20MEDIA">
                    <i class="fas fa-palette"></i>
                    <span>Graphics Design</span>
                </a>
            </div>
            <div>
                <a href="https://www.globaltechsworld.net/courses-single-post.php?Course_Overview=29?UI/UX%20Figma%20Web%20AND%20Mobile%20Design">
                    <i class="fab fa-figma"></i>
                    <span>UI/UX Design</span>
                </a>
            </div>
        </div>
        <div class="fac">
            <h3>FAQ</h3>
            <div>
                <h4 class="open1">
                    Why should me as a normal person join this platform?
                    <i class="fas fa-chevron-down open" id="open1"></i>
                </h4>
                <div class="answer">
                    <h5>Why not?</h5>
                    <br>
                    <p>If you truly are a normal person then why wouldn't you want to earn?. It's been said that you will be
                        able to earn N160,000 or more within 60 days so why on earth won't you wan't to take it up?, uless
                        perharps you're the likes of Dangote and the rest sha, then the money might seem too small for you</p>
                </div>
            </div>
            <div>
                <h4 class="open1">
                    Will my money will be safe here?
                    <i class="fas fa-chevron-down open" id="open2"></i>

                </h4>
                <div class="answer">
                    <h5>Yeah 100%</h5>
                    <br>
                    <p>Although you can never be too sure untill you see for yourself or perhaps others now can you? </p>
                </div>
            </div>
        </div>
    </section>



    <section id="forgottenPass" class="close">

        <div id="fTopPart">
            <aside>
                <p id="bckforgottenPass">
                    <span class="fas fa-chevron-left"></span> Forgotten Password
                </p>
            </aside>
            <h1>Find your Account</h1>
            <div>
                <form action="#">
                    <div id="numPart">
                        <p>Enter your phone number</p>
                        <div>
                            <input type="number" placeholder="Enter phone No:..." required>
                        </div>
                    </div>
                    <div id="emailPart">
                        <p>Enter your Email Address</p>
                        <div>
                            <input type="email" placeholder="Enter Email Address:..." required>
                        </div>
                    </div>
                    <div>
                        <input type="submit" value="Search" id="srchAccount">
                    </div>
                    <div class="slinks" id="byEmail">
                        <a href="#" id="sbyEmail">Search by your Email instead</a>
                    </div>
                    <div class="slinks" id="byNumber">
                        <a href="#" id="sbyPhone">Search by phone number</a>
                    </div>
                </form>
            </div>
        </div>
    </section>




    <script src="../Scripts/JS/index.js"></script>
    <script src="../Scripts/JS/typ.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
    // $(function(){
    //     $("#submita").click(function(e){

           
  


    //             // e.preventDefault();

               
                
    //         }
    //     });
    // });

    $('document').ready(function(){
 var username_state = false;
 var email_state = false;
 $('#uName').on('input', function(){
  var username = $('#uName').val();
  if (username == '') {
  	username_state = false;
  	return;
  }
  $.ajax({
    url: 'process.php',
    type: 'post',
    data: {
    	'username_check' : 1,
    	'username' : username,
    },
    success: function(response){
      if (response == 'taken' ) {
      	username_state = false;
      	$('#uName').parent().addClass("form_error");
      	$('#uName').siblings("span").text('Sorry... Username already taken');
      }else if (response == 'not_taken') {
      	username_state = true;
      	$('#uName').parent().addClass("form_success");
      	$('#uName').siblings("span").text('Username available');
      }
    }
  });
 });		
  $('#email').on('input', function(){
 	var email = $('#email').val();
 	if (email == '') {
 		email_state = false;
 		return;
 	}
 	$.ajax({
      url: 'process.php',
      type: 'post',
      data: {
      	'email_check' : 1,
      	'email' : email,
      },
      success: function(response){
      	if (response == 'taken' ) {
          email_state = false;
          $('#email').parent().addClass("form_error");
          $('#email').siblings("span").text('Sorry... Email already taken');
      	}else if (response == 'not_taken') {
      	  email_state = true;
      	  $('#email').parent().removeClass();
      	  $('#email').parent().addClass("form_success");
      	  $('#email').siblings("span").text('Email available');
      	}
      }
 	});
 });

 $('#submita').on('click', function(){
     
     var valid = this.form.checkValidity();
            if(valid){
                var firstname       = $('#fName').val();
                var middlename      = $('#mName').val();
                var lastname        = $('#lName').val();
                var phonenumber     = $('#pNo').val();
                var email           = $('#email').val();
                var refferal        = $('#reff').val();
                var username        = $('#uName').val();
                var password        = $('#pass').val();
 	if (username_state == false || email_state == false) {
	  $('#error_msg').text('Fix the errors in the form first');
	}else{
      // proceed with form submission
      $.ajax({
                    type: 'POST',
                    url: 'process.php',
                    data: {fname: firstname,mname: middlename,lname: lastname,pNo: phonenumber,email: email,reff: refferal,uname: username,password: password},
                    success: function(data){
                        swal.fire({
                                title: 'Successful',
                                text: data,
                                icon: 'success',
                                confirmButtonText: 'Continue'
                          })
                        //   $("#users").setAttribute('action',"login.php")
                    },
                    error: function(data){
                        swal.fire({
                                title: 'Error!',
                                text: data,
                                icon: 'error',
                                confirmButtonText: 'Retry'
                          }) 
}
                });
 	}
 });
});

    // $(function(){
    //     $('#login').click(function(f){
    //         var valid2 = this.form.checkValidity();

    //         if(valid2){
    //             var username = $('#uName').val();
    //             var password = $('#pass').val();
    //         }

    //         f.preventDefault();

    //         $.ajax({
    //             type: 'POST',
    //             url: 'login1.php',
    //             data: {uname: username,password: password},
    //             success: function(data){
    //                 alert(data);
    //             },
    //             error: function(data){
    //                 alert('error');
                    
    //             }
    //         });
    //     });
    // });

    </script>

</body>

</html>