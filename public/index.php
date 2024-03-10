<?php 
require_once "../vendor/autoload.php";

use App\DTO\UserRegistration;
use App\Validation\Validator;




$userRegistration = new UserRegistration('','not-an-email');

$validator = new Validator();

$validator->validate($userRegistration);







