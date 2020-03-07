<?php

    declare(strict_types=1);

    require_once 'Customer.php';
    require_once 'CustomerInterface.php';
    require_once 'Invoice.php';

    class GentleCustomer extends Customer implements CustomerInterface
    {
        public function __construct(int $age)
        {
            parent::__construct($age);
            $this->status = 'premium';
        }
        public function askForDiscount(): void 
        {
            echo 'Szanowny Panie! Nazywam się '. $this->getName() .'. Jaką wartość zniżki mogę uzyskać?', PHP_EOL;
        }
        public static function askForRenew(int $peroid) 
        {
            echo 'Renew GentleCustomer on: '. $peroid. ' weeks.'. PHP_EOL;
        }
        public function askForInvoice(int $invoiceId)
        {
            echo 'Numer faktury dla ' . get_called_class() . ': ' . $invoiceId . '.' . PHP_EOL;
            return new Invoice($invoiceId, $this->getName(), get_called_class());
        }
    }


?>
