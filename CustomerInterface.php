<?php

    interface CustomerInterface
    {
        public static function askForRenew(int $peroid);
        public function askForInvoice(int $invoiceId);
    }

?>
