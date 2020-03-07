<?php

    declare(strict_types=1);

    require_once 'Customer.php';
    require_once 'CustomerInterface.php';
    require_once 'Invoice.php';

    class ChaoticCustomer extends Customer implements CustomerInterface
    {
        public function getDiscount(): int {
            return 5;
        }
        public function askForDiscount(): void {
            echo 'Bry! Ja być '. $this->getName() .'. Ile zniżki mam?', PHP_EOL;
        }
        public static function askForRenew(int $peroid)
        {
            echo 'Renew ChaoticCustomer on: '. $peroid. ' weeks.'. PHP_EOL;
        }
        public function askForInvoice(int $invoiceId)
        {
            echo 'Numer faktury dla ' . get_called_class() . ': ' . $invoiceId . '.' . PHP_EOL;
            return new Invoice($invoiceId, $this->getName(), get_called_class());
        }
    }


?>
