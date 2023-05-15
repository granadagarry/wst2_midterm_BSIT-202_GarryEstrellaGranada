<?php
require_once('assets/class/class.accounts.php');
require_once('assets/class/class.messages.php');
$accounts = new Accounts;
$messages = new Messages;

if($_GET['ind'] == 'login'){
    echo $accounts->login();
}

if($_GET['ind'] == 'send'){
    echo $messages->send();
}

if($_GET['ind'] == 'refresh'){
    echo $messages->refresh();
}

if($_GET['ind'] == 'register'){
    echo $accounts->register();
}

if($_GET['ind'] == 'refresh'){
    echo $messages->refresh();
}