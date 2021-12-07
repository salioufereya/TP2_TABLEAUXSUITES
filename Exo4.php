<?php
function verificationPWD($password)
{
    if( preg_match( '~[A-Z]~', $password) &&
    preg_match( '~[a-z]~', $password) &&
    preg_match( '~\d~', $password) &&
    (strlen( $password) >=8)){
    return true;

}

}
echo verificationPWD("diallooo123A");