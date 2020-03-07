<?php

    require_once 'Customer.php';
    require_once 'ChaoticCustomer.php';
    require_once 'GentleCustomer.php';
    require_once 'CustomerFactory.php';
    require_once 'Invoice.php';

    Customer::getClassName();
    ChaoticCustomer::getClassName();
    GentleCustomer::getClassName();

    $gentle1 = CustomerFactory::chooseCustomer(10, 'gentle');
    $customer1 = CustomerFactory::chooseCustomer(20, '');
    $chaotic1 = CustomerFactory::chooseCustomer(30, 'chaotic');

    $gentle1->setName('Marian');
    $customer1->setName('Krzysztof');
    $chaotic1->setName('Władysław');

    echo $gentle1->getClassName();
    $gentle1->askForDiscount();
    echo $customer1->getClassName();
    $customer1->askForDiscount();
    echo $chaotic1->getClassName();
    $chaotic1->askForDiscount();

    $gentle1->askForRenew(4);
    $chaotic1->askForRenew(7);

    var_dump($gentle1->askForInvoice(12345), $chaotic1->askForInvoice(9999));

    
?>
