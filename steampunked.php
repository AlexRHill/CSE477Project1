<?php
?>


<!DOCTYPE html>
<html lang="en">
<link href="gameStyles.css" type="text/css" rel="stylesheet" />
<meta charset="UTF-8">
<title>Steampunked</title>
<body>

<img class="title" src="images/title.png" width="600" height="104" alt="Steampunked Title">
<a class="welcomeBtn" href="howToPlay.php"><button name="howToPlay" value="How To Play">How To Play</button></a>

<div class="gameboard">
    <form action="#">
        <div class="game">
            <div class="row">
                <div class="cell"><img src="images/valve-closed.png"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"><img src="images/gauge-top-0.png"></div>
            </div>
            <div class="row">
                <div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"><img src="images/gauge-0.png"></div>
            </div>
            <div class="row">
                <div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div>
            </div>
            <div class="row">
                <div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"><img src="images/gauge-top-0.png"></div>
            </div>
            <div class="row">
                <div class="cell"></div><div class="cell"><img src="images/ninety-es.png"></div><div class="cell"><img src="images/straight-h.png"></div><div class="cell"><img src="images/straight-h.png"></div><div class="cell"><img src="images/straight-h.png"></div><div class="cell"><img src="images/gauge-0.png"></div>
            </div>
            <div class="row">
                <div class="cell"><img src="images/valve-closed.png"></div><div class="cell"><img src="images/ninety-wn.png"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div>
            </div>
        </div>
    </form>
</div>

<div class="playerMessage">
    <p>Player, it is your turn!</p>
</div>

<div class="gamePieces">
    <form action="">
        <input type="radio" name="piece" value="first" checked> <img src="images/ninety-es.png">
        <input type="radio" name="piece" value="second"> <img src="images/ninety-ne.png">
        <input type="radio" name="piece" value="third"> <img src="images/ninety-sw.png">
        <input type="radio" name="piece" value="fourth"> <img src="images/ninety-wn.png">
        <input type="radio" name="piece" value="fifth"> <img src="images/tee-swn.png">

        <div class="gameButtons">
            <input type="submit" name="rotate" id="rotate" value="Rotate">
            <input type="submit" name="discard" id="discard" value="Discard">
            <input type="submit" name="openValve" id="openValve" value="Open Valve">
            <input type="submit" name="giveUp" id="giveUp" value="Give Up">
        </div>

    </form>

</div>



</body>

</html>
