<?php

require('vendor/autoload.php');

$sergio = new Acme\Person('Sergio');
$carlos = new Acme\Person('Carlos');

$staff = new Acme\Staff();

$business = new Acme\Business($staff);

$business->hire($sergio);
$business->hire($carlos);

var_dump($staff);