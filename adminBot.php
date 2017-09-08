<?php

// the admin bot setup

include('./httpful.phar');
include('./functions.php');

// this is found at http://dev.groupme.com/bots
$bot_token = "f517f87a36941b5ed5e8f78bbf";

// adds admin commands 
$isAdmin = TRUE;
include('adminFunctions.php');

include('./index.php');

?>
