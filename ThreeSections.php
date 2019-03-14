<?php
//Section 1 Adding Integers
echo "<u>Section One</u><br>";
$x = 80;
$y = 17;
echo $x + $y;


//Section 2 Concatenating
echo "<br><br><u>Section Two</u>";
echo "<br>Hi class!<br>";
echo "Guess what!?<br>";
$txt = "CIT336";
echo "I love " . $txt . "!<br><br>";

//Section 3 Even or Odd Time
echo "<u>Section Three</u><br>";
date_default_timezone_set('America/New_York');
echo "Today's Date is:<br>";
echo date ('l jS \of F Y g:i:s A');

    function check($t){
        if($t % 2 == 0){ 
            echo "<br>The hour of the time is <b>Even!</b>";  
        } 
        else{ 
            echo "<br>The hour of the time is <b>Odd!</b>"; 
            } 
    }           
$t = date('g');
check($t)
?>