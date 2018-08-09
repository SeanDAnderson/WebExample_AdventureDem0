<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link href="css/styles.css" rel="stylesheet" type="text/css">
        <meta charset="UTF-8">
        <script src="js/scripts.js"></script>
        <title>AdventureDem0</title>
    </head>
    <body>
        <header>
        <h1>Create New Account</h1>
        </header>
        
        <nav>
            <a href="index.php"> About </a><br>
            <a href="/khadgar-resume.php"> Khadgar's Resume</a><br>
            <a href="/faq.php"> FAQ </a><br>
            <a href="/create-account.php"> Create A New Account</a>
            <br>
            <figure id="lucio">
            <img src="images/CantStopWontStopLarge.png" alt="" width="150px"
                 onclick="exterminate('lucio')"
                 onmouseover="extreme('lucio')" onmouseout="unExtreme('lucio')"/>
            <figcaption> Can't Stop Won't Stop!</figcaption>
            </figure>
                        
        </nav>
        
        <!-- test comment -->
        
        <main>
            To create an account, please fill in the following information.<br>
            <strong>All sections are required!</strong><br>
            <form name="newaccount" action="CreateAccount.php" method="post"
                  onsubmit="return validateNewAccount()">
                <fieldset>
                    <legend>Account Information</legend>
                    First Name<br>
                    <input type="text" id="firstname" name="firstnameFld" 
                           rows="1" columns="30" maxlength="30"><br><br>
                    Last Name<br>
                    <input type="text" id="lastname" name="lastnameFld" 
                              rows="1" columns="30" maxlength="30"><br><br>
                    Username<br>
                    <input type="text" id="username" name="usernameFld" 
                              rows="1" columns="30" maxlength="30"><br><br>
                    Email Address<br>
                    <input type="text" id="email" name="emailFld" 
                              rows="1" columns="30" maxlength="30"><br><br>
                    Favorite Mage<br>
                    <input type='text' id='mage' name='mage'
                           rows='1' columns='30' maxlength="30" onfocusout='fixMage("mage")'><br><br>
                    Password<br>
                    <input type="password" id="password" name="passwordFld" 
                              rows="1" columns="30" maxlength="30"><br><br>
                    Confirm Password<br>
                    <input type="password" id="confpassword" name="confpasswordFld" 
                              rows="1" columns="30" maxlength="30"><br><br>
                    <input type="submit" value="Create Account">
                </fieldset>
            </form>
            
        </main>
        
        <Aside>
            <h3>Other Cool Games</h3>
            <a href='https://worldofwarcraft.com/en-us/'> Blizzard's <br> World of Warcraft </a>
            <br><br>
            <a href='https://minecraft.net/en-us/'> Mojang's<br> Minecraft</a>
            <br><br>
            <a href='http://www.bay12games.com/dwarves/'> Bay 12 Games'<br> Dwarf Fortress</a>
        </Aside>
        
        <footer>
            <hr>
            Copyright Sean Anderson 2017. All rights reserved.<br>
            Also, seriously, why would you copy this? It's kinda' lame.
        </footer>
    </body>
</html>
