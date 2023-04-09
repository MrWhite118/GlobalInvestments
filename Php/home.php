<?php 
session_start();
require_once('./db_conn.php');
function getUser($id) {
    global $conn;
    $sql = "SELECT * FROM users WHERE `id` = ". $id;
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) === 1) {
        $user = mysqli_fetch_assoc($query);
    } else {
        $user = null;
    }
    return $user;
}
if(isset($_SESSION['id'])) {
    $id = (int) $_SESSION['id'];
 $user = getUser($id);
//  var_dump($user);
// echo($user['first_name']." ".$user['middle_name']);
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../CSS/index1.css">
    <link rel="stylesheet" href="../CSS/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="icon" href="../Images/G.I">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <!-- <link rel="stylesheet" href="../CSS/bootstrap.min.css"> -->
    <script src="../Scripts/JS/jquery-3.5.1.min.js"></script>
    
</head>

<body>
    <header>
        <div id="acc">
            <span class="fas fa-align-right"></span>
        </div>
        <h1 id="userrName"><?php echo $user['user_name']; ?></h1>
    </header>
    <br>

    <!-- Dashboard Section Starts -->
    <section id="dashboard">
        <h2>Dashboard</h2>
        <div>
            <p><b>Investment Level:</b>
                <span id="investL">0</span>
            </p>
        </div>
        <div>
            <p><b>Main Balance:</b>
                <span>N0</span>
            </p>
        </div>
        <div>
            <p><b>Growing Balance:</b>
                <span>N0</span>
            </p>
        </div>
        <div id="referrals">
            <p><b>Referral Earnings:</b>
                <span>N0</span>
            </p>
        </div>
    </section>

    <!-- Message Section Starts -->
    <section id="message">
        <div>
            <p class="fMessage"><b>Messages</b>
                <span class="mCount mTotal">1</span>
                <i class="fas fa-chevron-up" id="closeMessage"></i>
            </p>
            <p class="sMessage"><b>Messages</b>
                <span class="mCount mTotal">1</span>
                <i class="fas fa-chevron-down" id="openMessage"></i>
            </p>
        </div>
        <div id="actualMessage">
            <div>
                <p>Begin your journey to earn
                    <b>N160,000</b> in 60 days! </p>
            </div>
            <p>Invest the sum of N1,000 &amp; recieve N5,000 in 5 minutes!</p>
        </div>
    </section>

    <!-- Orders Section Starts -->
    <section id="orders">
        <div>
            <div>
                <h3>Pending Orders</h3>
            </div>
            <p>You have
                <span class="mCount pTotal">0</span> Pending orders!</p>
        </div>
    </section>

    <!-- Settings Sections Starts -->
    <section id="settings" class="close">
        <aside>
            <p id="backSettinge">
                <span class="fas fa-arrow-left"></span> Me</p>
        </aside>
        <div>

            <p class="fDarkMode" id="onD">Dark Mode
                <span class="fas fa-toggle-on"></span>
            </p>
            <p class="sDarkMode" id="offD">Dark Mode
                <span class="fas fa-toggle-off"></span>
            </p>
        </div>
        <div>
            <p id="ass">Account Settings
                <span class="fas fa-user-cog"></span>
            </p>
        </div>
        <div>
            <p id="cusService">Customer Services
                <span class="fas fa-user-astronaut"></span>
            </p>
        </div>
        <div>
            <p id="bankAcc">Bank Card/Account
                <span class="far fa-credit-card"></span>
            </p>
        </div>
        <div>
            <p id="refFriends">Refer Friends
                <span class="fas fa-bullhorn"></span>
            </p>
        </div>
        <div>
            <p id="openAbout">About
                <span class="fas fa-info-circle"></span>
            </p>
        </div>
        <div>
            <a href="logout.php">
            <p id="logOut" onclick="logout()">Log out
                <span class="fas fa-sign-out-alt"></span>
            </p>
            </a>
        </div>
    </section>

    <section id="accSettings" class="close">
        <aside>
            <p id="backAcc">
                <i class="fas fa-chevron-left"></i> Account Settings</p>
        </aside>
        <div>
            <p id="userInfo">User Info
                <span class="fas fa-chevron-right"></span>
            </p>
        </div>
        <div>
            <p id="chngPass">Change Password
                <span class="fas fa-chevron-right"></span>
            </p>
        </div>
        <div>
            <p id="fogPass">Forgot Password
                <span class="fas fa-chevron-right"></span>
            </p>
        </div>
        <div>
            <p id="remPass">Remember Password
                <span class="fas fa-chevron-right"></span>
            </p>
        </div>
        <div>
            <p id="chngEmail">Change Email
                <span class="fas fa-chevron-right"></span>
            </p>
        </div>
        <div>
            <p id="chngUseName">Change Username
                <span class="fas fa-chevron-right"></span>
            </p>
        </div>
    </section>

    <section id="about" class="close">
        <aside>
            <p id="backAbout">
                <i class="fas fa-chevron-left"></i> About
            </p>
        </aside>
        <br>
        <br>
        <div>
            <div>
                <p>Hello
                    <span>
                        <b class="username"><?php echo $_SESSION['user_name']; ?></b>
                    </span>!!</p>
            </div>
            <div>
                <div>
                    <p>Welcome to Global Investment Platform!! </p>
                </div>
                <div>
                    <p>...</p>
                </div>
                <div>
                    <div>
                        <p>This is a platform that can help you earn up to N160,000 and more within 60days...</p>
                    </div>
                    <div>
                        <p>Earning N160,000 within 60days is neither too good to be true nor is anyone here trying to rip you
                            off your money...</p>
                    </div>
                    <div>
                        <p>This platform was created so that people who shares the same goal of making money can come together
                            to help themselves by investing within a period of time and then withdrawing it after the period
                            elapses...
                        </p>
                    </div>
                    <div>
                        <p>Have it in mind that this is a
                            <b>Peer to Peer</b> investing platform, which simply means that the platform will neither collect
                            any money from you nor give you any money, you guys are going to be the ones to do the giving
                            and receiving in peers...</p>
                    </div>
                    <div>
                        <p>So that's just how it is, all you need to do now is to go through all the level accordingly and you'll
                            see the results in time...</p>
                    </div>
                    <div>
                        <p>Thanks for being here...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="refer" class="close">
        <aside>
            <p id="backRefer">
                <span class="fa fa-chevron-left"></span>Earn Money
            </p>
        </aside>
        <br>
        <div id="referIntro">
            <center>
                <h1>Refer &amp; Earn</h1>
                <p>INVITE 1 NEW USER &amp; GET</p>
                <h1>N100</h1>
            </center>
        </div>
        <div>
            <center>
                <h4>How to Earn</h4>
            </center>
          <center>
          <div class="how">
                <span class="fas fa-share-alt">
                    <br>
                    <br> Share link</span>
                <span class="fas fa-long-arrow-alt-right"></span>
                <span class="fas fa-user-check">
                    <br>
                    <br> Friends acccept invite</span>
                <span class="fas fa-long-arrow-alt-right"></span>
                <span class="far fa-money-bill-alt">
                    <br>
                    <br> Friends Invest</span>

            </div>
          </center>
            <div>
                <center>
                    <p>The more you invite the more you earn</p>
                </center>
            </div>
            <div class="invites">
                <center>
                    <h3>My Invitations</h3>
                </center>
                <p>Invitation Code:
                    <span class="username"></span>
                </p>
                <p>Invitation Link:
                    <a href="#">Invitaton link</a>
                </p>
                <p>Total Invites:
                    <span class="totalInvites">0</span>
                </p>
            </div>
        </div>
    </section>

    <section id="contact" class="close">
        <aside>
            <p id="bckCus">
                <span class="fa fa-chevron-left"></span>Customer Service

            </p>
        </aside>
        <div>
            <h2>Contact &amp; Support</h2>
        </div>
        <div>
            <p>
                <b>Email us @:</b>
                <a href="mailto:globalinvestment118@gmail.com">globalinvestment118@gmail.com</a>
            </p>
            
                <div>
                    <p>
                    <b>WhatsApp us @:</b>
                    <a href="#"> wa:me/GlobalInvestment.com</a>
            </p>
            <div>
                <p>
                    <b>Follow our twitter channel @:</b>
                    <a href="https://twitter.com/GlobalInvest118">twitter.com/GlobalInvest118</a>
                </p>
            </div>
            <div>
                <p>
                    <b>Follow our tiktok page @:</b>
                    <a href="#">globalinvestment118@tiktok.com</a>
                </p>
            </div>
            <div>
                <p>
                    <b>Follow our telegram channel @:</b>
                    <a href="https://t.me/GlobalInvestment118">t.me/GlobalInvestment118</a>
                </p>
            </div>

            </div>
        </div>
    </section>

    <section id="bankAccount" class="close">
        <aside>
            <p id="backAccount">
                <span class="fa fa-chevron-left"></span>Add payment option

            </p>
        </aside>
        <div id="addDiv">
            <button>
                <span class="fas fa-plus"></span> Add payment option
            </button>

        </div>
    </section>


    <section id="investments" class="close">
        <aside>
            <span class="fas fa-times" id="backInvest"></span>
        </aside>
        <div id="conAll">
            <center>
                <h1>Contribution</h1>
            </center>
            <div>
                <p><b>Contributor's Name:</b>
                    <span class="fullName"> <?php echo ($user['last_name']." ".$user['first_name']." ".$user['middle_name']); ?></span>
                </p>
            </div>
            <div>
                <p><b>Investment Level:</b>
                    <span class="currentLevel">0</span>
                </p>
            </div>
            <div>
                <p><b>Amount to Contribute:</b>
                   <span>N<span class="amntTocontribute">1,000</span></span>
                </p>
            </div>
            <div>
                <p><b>Amount to Recieve:</b>
                    <span>N<span class="amntToReceive">5,000</span></span>
                </p>
            </div>
            <div>
                <p><b>Duration:</b>
                    <span class="recDuration">5mins</span>
                </p>
            </div>
            <div id="conBtn">
                <button id="conInvest">Continue to Invest</button>
            </div>
        </div>

    </section>

    <section id="userInfos" class="close">
        <aside>
            <p id="backUse">
                <span class="fas fa-chevron-left"></span> User Info
            </p>
        </aside>
        <div>
            <h3>About Me</h3>
            <div>
                <p><b>Full Name:</b>
                    <span class="fullName"><?php echo ($user['last_name']." ".$user['first_name']." ".$user['middle_name']); ?></span>
                </p>
            </div>
            <div>
                <p><b>Username:</b>
                    <span class="username"><?php echo($user['user_name']) ?></span>
                </p>
            </div>
            <div>
                <p><b>Email Address:</b>
                    <span class="emailAddress"><a href="mailto:<?php echo($user['email_address']) ?>"><?php echo($user['email_address']) ?></a></span>
                </p>
            </div>
            <div>
                <p><b>Phone Number:</b>
                    <span class="phoneNumber"><a href="#"><?php echo($user['phone_number']) ?></a></span>
                </p>
            </div>
            <div>
                <p><b>Investment Level:</b>
                    <span class="currentLevel">0</span>
                </p>
            </div>
            <div>
                <p><b>Total Investment:</b>
                    <span>N<span class="totalInvestment">0</span></span>
                </p>
            </div>
            <div>
                <p><b>Total Referrals:</b>
                    <span class="totalInvites">0</span>
                </p>
            </div>
        </div>
    </section>

    <section id="passChange" class="close">
        <aside>
            <p id="bckPssChng">
                <span class="fas fa-chevron-left"></span> Change Password
            </p>
        </aside>
        <div id="passTop">
            <form action="#">
                <div>
                    <label for="currentPassword">
                        Input Current Password:
                        <input type="password" id="currentPassword" placeholder="Current Password" required>
                    </label>
                </div>
                <div>
                    <label for="newPassword">
                        Input New Password:
                        <input type="password" id="newPassword" placeholder="New Password" required>
                    </label>
                </div>
                <div>
                    <input type="submit" value="Confirm" id="confirmPassChange">
                </div>
            </form>
        </div>
    </section>

    <section id="changeEmailAddress" class="close">
        <div>
            <aside>
                <p id="bckEmailAdd">
                    <span class="fas fa-chevron-left"></span> Change Email
                </p>
            </aside>
            <div id="emailTop">
                <form action="#">
                    <div>
                        <label for="newEmail">
                            Input New Email:
                            <input type="password" id="newEmail" placeholder="New Email..." required>
                        </label>
                    </div>

                    <div>
                        <input type="submit" value="Confirm" id="confirmEmailChange">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section id="changeUserName" class="close">
        <div>
            <aside>
                <p id="bckUserName">
                    <span class="fas fa-chevron-left"></span> Change Username
                </p>
            </aside>
            <div id="userTop">
                <form action="#">
                    <div>
                        <label for="newUsername">
                            Input New Username:
                            <input type="text" id="newUsername" placeholder="New Username" required>
                        </label>
                    </div>

                    <div>
                        <input type="submit" value="Confirm" id="confirmUserChange">
                    </div>
                </form>
            </div>
        </div>
    </section>


    <section id="code" class="close">
        <aside>
            <p id="bckCode">
                <span class="fas fa-chevron-left"></span> Code
            </p>
        </aside>
        <div>
            <p id="phnCode">Input Code sent to your Phone Number/Email Address</p>

            <div id="codes">
                <form action="#">
                    <input type="text" required maxlength="1" id="codes1">
                    <input type="text" required maxlength="1" id="codes2">
                    <input type="text" required maxlength="1" id="codes3">
                    <input type="text" required maxlength="1" id="codes4">
                    <input type="text" required maxlength="1" id="codes5">
                    <input type="text" required maxlength="1" id="codes6">
                </form>
            </div>
            <div>
                <a href="#" id="resendCode">Resend Code</a>
            </div>
        </div>

    </section>



    <!-- Transaction Section Starts -->
    <section id="transactions">
        <h3>Transactions</h3>
        <div id="topStatus">
            <h4>Amount</h4>
            <h4>Type</h4>
            <h4>Status</h4>
        </div>
    </section>

    <!-- Witdrawal Section Starts -->
    <section id="withdrawal" class="close">
        <div>
            <span class="fas fa-times" id="closeWith"></span>

            <form action="#">
                <label for="amount">
                    <p></p>
                    <b>Amount to Withdraw</b>
                    </p>
                    <input type="number" placeholder="Input Amount here..." required>
                    <p id="errors"></p>
                    <input type="submit" value="Withdraw" id="checkOut">

                </label>
            </form>
        </div>
    </section>


    <footer>
        <a href="#" id="invest">
            <span class="fas fa-plus-circle"></span> Invest</a>
        <a href="#" id="withdraw">
            <span class="fa fa-arrow-alt-circle-down"></span> Withdraw</a>
        <a href="#"></a>
    </footer>

    <script src="../Scripts/JS/index1.js"></script>
</body>

</html>
 <?php
}
else {
    header("Location: index.php");
    exit();
}

?>