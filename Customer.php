<?php

    class Customer 
    {
        private $name;
        public $status = 'basic';
        public $age;
        protected $lastName = 'Michałowski';

        public function __construct(int $age)
        {
            $this->age = $age;
        }

        public static function getClassName(): void
        {
            echo 'Jestem klasą ', get_called_class(), PHP_EOL;
        }

        public function getDiscount(): int 
        {
            return 20; PHP_EOL;
        }
        public function setName(string $name): void 
        {
            $this->name = $name;
        }
        public function getName(): string 
        {
            return $this->name;
        }
        public function askForDiscount(): void 
        {
            echo 'Witam! Mam na imię '. $this->name . ' ' . $this->lastName .'. Ile procent zniżki mogę otrzymać?', PHP_EOL;
        }
    }

?>
