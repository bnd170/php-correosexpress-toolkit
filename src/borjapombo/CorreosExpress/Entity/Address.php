<?php

namespace borjapombo\CorreosExpress\Entity;

final class Address
{
    private $internationalPostalCode;
    private $country;
    private $nationalPostalCode;
    private $city;
    private $street;

    public function __construct(
        string $street,
        string $city,
        string $nationalPostalCode,
        string $country,
        string $internationalPostalCode
    ) {
        $this->street                  = $street;
        $this->city                    = $city;
        $this->nationalPostalCode      = $nationalPostalCode;
        $this->country                 = $country;
        $this->internationalPostalCode = $internationalPostalCode;
    }

    public function internationalPostalCode(): string
    {
        return $this->internationalPostalCode;
    }

    public function country(): string
    {
        return $this->country;
    }

    public function nationalPostalCode(): string
    {
        return $this->nationalPostalCode;
    }

    public function city(): string
    {
        return $this->city;
    }

    public function street(): string
    {
        return $this->street;
    }
}
