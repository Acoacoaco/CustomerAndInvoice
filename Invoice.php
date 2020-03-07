<?php

    class Invoice 
    {
        public $date;
        public $invoiceId;
        public $taxpayerName;
        public $taxpayerAdress;
        public $taxpayerId;
        public $productServiceName;
        public $price;

        public function __construct(int $invoiceId, string $taxpayerName, string $taxpayerId)
        {
            $this->date = date('d-m-Y \r.');
            $this->invoiceId = $invoiceId;
            $this->taxpayerName = $taxpayerName;
            $this->taxpayerId = $taxpayerId;
        }
    }

?>
