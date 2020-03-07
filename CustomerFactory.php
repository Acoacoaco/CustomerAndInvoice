<?php

    declare(strict_types=1);

    require_once 'Customer.php';
    require_once 'ChaoticCustomer.php';
    require_once 'GentleCustomer.php';

    class CustomerFactory
    {
        public const GENTLE_TYPE = "gentle";
        public const CHAOTIC_TYPE = "chaotic";

        public static function chooseCustomer(int $age, string $customerType): Customer
        {
            if ($customerType === self::GENTLE_TYPE) {
                return new GentleCustomer($age);
            } else if ($customerType === self::CHAOTIC_TYPE) {
                return new ChaoticCustomer($age);
            } else {
                return new Customer($age);
            }
        }
    }

?>
