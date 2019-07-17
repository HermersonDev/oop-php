<?php

require 'classes/Person.php';

use Classes\Person;

$hermerson = new Person();
$hermerson->name = "Hermerson";
$hermerson->lastname = "Araújo";
$hermerson->age = 22;
$hermerson->falar();

echo '<hr> Hermerson Real - ' . $hermerson->name;
$clone = clone $hermerson;
echo '<hr> Hermerson Clone - ' . $clone->name;


/*
require './classes/BikeSpeed.php';

$caloi_10 = new BikeSpeed();
$caloi_10->setModel('Caloi 10');
$caloi_10->setWheel('Aro 700 27/28');
echo '<hr> Modelo - '. $caloi_10->getModel();
echo '<hr> Número da Roda - '. $caloi_10->getWheel();

------------------------------------------------------------

require './classes/Nubank.php';

echo "<hr> Limit dos bancos normais é de R$ " . Bank::getLimit();
echo "<hr> Limit do nubank é de R$ " . Nubank::getLimitNubank();

$digital_bank = new Nubank('123-1', 2000);
echo '<hr>' . $digital_bank->getBalance();
echo '<hr>' . $digital_bank->cashOut(100);
echo '<hr>' . $digital_bank->cashOut(501);
echo '<hr>' . $digital_bank->cashOutNubank(501);
echo '<hr>' . $digital_bank->deposit(200);

------------------------------------------------------------

require './classes/Car.php';
require './classes/Motorcycle.php';

$car = new Car('Ferrari');
$moto = new Motorcycle('Yamaha');

$car->setColor('preto');
$car->setYear(2018);

$moto->setColor('vermelho');
$moto->setYear(2016);

echo "-- Veículo -- <br>";
echo 'Cor do Carro - '. $car->getColor() . '<br>';
echo 'Cor da Moto - '. $moto->getColor() . '<br>';

echo 'Ano do Carro - '. $car->getYear() . '<br>';
echo 'Ano da Moto - '. $moto->getYear() . '<br>';

$car->setWheels(4);
$moto->setWheels(2);

echo 'Rodas do Carro - '. $car->getWheels() . '<br>';
echo 'Rodas da Moto - '. $moto->getWheels() . '<br>';

echo '------- Ação do Carro ----------<br>';
echo $car->seatBelt() . '<br>';
echo $car->callActionMove() . '<br>';
echo $car->callActionStop() . '<br>';
echo '------ Ação da Moto -------<br>';
echo $moto->callActionMove() . '<br>';
echo $moto->wheelie() . '<br>';
echo $moto->callActionStop() . '<br>';
*/


