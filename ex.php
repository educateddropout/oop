<?php

use Acme\Person;
use Acme\Business;
use Acme\Staff;


$kenneth = new Person('Kenenth Anthony Molina');

$staff = new Staff([$kenneth]);

$laracasts = new Business($staff);

$laracasts->hire(new Person('Joana May'));

var_dump($laracasts->getStaffMembers());


?>