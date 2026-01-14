<?php
class Customer {
    public $firstName;
    public $lastName;
    public $email;
    public $accounts;
    public function __construct($firstName, $lastName, $email, $accounts = []) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->accounts = $accounts;
    }
    public function getFullName() {
        return $this->firstName . ' ' . $this->lastName;
    }
    public function addAccount($account) {
        $this->accounts[] = $account;
    }
}
?>
