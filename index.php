<?php

require 'src/Person.php';
require 'src/Business.php';
require 'src/Staff.php';


$kenneth = new Person('Kenenth Anthony Molina');

$staff = new Staff([$kenneth]);

$laracasts = new Business($staff);

$laracasts->hire(new Person('Joana May'));

var_dump($laracasts->getStaffMembers());


?>