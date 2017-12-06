<?php

require('vendor/autoload.php');

use Acme\Person;
use Acme\Business;
use Acme\Staff;

$sergio = new Person('Sergio');
$carlos = new Person('Carlos');

$staff = new Staff();

$business = new Business($staff);

$business->hire($sergio);
$business->hire($carlos);

var_dump($staff);