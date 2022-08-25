<?php

use Cci\User;
use utilisateur\Mail;

use function Cci\tester;
use const Cci\Prenom;

require_once __DIR__."/lib/user.class.php";
require_once __DIR__."/lib/mail.class.php";

$user=new User();
$mail = new Mail();

tester();

echo Prenom;