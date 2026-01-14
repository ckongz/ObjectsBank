<?php
class Account {
    public $number;
    public $type;
    public $balance;
    public function __construct($number, $type, $balance) {
        $this->number = $number;
        $this->type = $type;
        $this->balance = $balance;
    }
    public function deposit($amount) {
        $this->balance += $amount;
        return $this->balance;
    }
    public function withdraw($amount) {
        $this->balance -= $amount;
        return $this->balance;
    }
    public function getBalance() {
        return number_format($this->balance, 2);
    }
}
?>
