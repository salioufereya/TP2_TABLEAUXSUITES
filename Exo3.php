<?php
function verificationPWD($password)
{
    if (strlen($password )>=8)
         return true;

}

echo verificationPWD("dialloooooo");