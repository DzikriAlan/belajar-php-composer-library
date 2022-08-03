<?php

require_once __DIR__ . "/vendor/autoload.php";

use BelajarPhpComposer\Customer;

$customer = new Customer("Eko");
echo $customer->sayHello("Kurniawan") . PHP_EOL;
