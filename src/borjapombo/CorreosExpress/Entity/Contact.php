<?php

namespace borjapombo\CorreosExpress\Entity;


class Contact
{
    private $code;
    private $name;
    private $nif;
    private $phone;
    private $email;
    private $address;

    public function __construct(
        string $code,
        string $name,
        string $nif,
        string $phone,
        string $email,
        Address $address
    ) {

        $this->code    = $code;
        $this->name    = $name;
        $this->nif     = $nif;
        $this->phone   = $phone;
        $this->email   = $email;
        $this->address = $address;
    }

    public function code(): string
    {
        return $this->code;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function nif(): string
    {
        return $this->nif;
    }

    public function phone(): string
    {
        return $this->phone;
    }

    public function email(): string
    {
        return $this->email;
    }

    public function address(): Address
    {
        return $this->address;
    }
}
