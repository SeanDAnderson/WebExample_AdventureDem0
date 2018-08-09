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
        <h1>Frequently Asked Questions</h1>
        Well, somewhat frequently. <br>
        Okay, occasionally.<br>
        Maybe once.<br>
        &nbsp
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
        
        <main>
            <form>
                <fieldset>
                    <legend>Please Select a Frequently Asked Question:</legend>
                    <select name="question" onchange="answerQuestion(this.value)">
                        <option>Select a FAQ</option>
                        <option value="real_game">Is this a real game?</option>
                        <option value="where_to_buy">Where can I purchase AdventureDem0?</option>
                        <option value="sequel">Is AdventureDem0 a sequel to something?</option>
                        <option value="can_even">Can you even right now?</option>
                        <option value="joke">No, seriously, is this a joke?</option>
                        <option value="release_date">When does AdventureDem0 release?</option>
                    </select>
                </fieldset>
            </form>
            <br><br>
            <section id="answer">
            </section>
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
