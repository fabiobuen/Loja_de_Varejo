<?php

namespace APP\Model;

class Provider
{
    private int $cnpj;
    private string $name;
    private ?string $phoneNumber;
    private Address $address;
    private ?string $email;

    public function __construct(
        string $cnpj,
        string $name,
        ?string $phoneNumber,
        Address $address,
        ?string $email

    ){
        $this->cnpj = $cnpj;
        $this->name = $name;
        $this->phoneNumber = $phoneNumber;
        $this->address = $address;
        $this->email = $email;
    }
}
