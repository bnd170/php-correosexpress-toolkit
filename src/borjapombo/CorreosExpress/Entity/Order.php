<?php

namespace borjapombo\CorreosExpress\Entity;


final class Order
{

    private $clientCode;
    private $date;
    private $comments;
    private $numberOfPackages;
    private $weight;
    private $productCode;
    private $shippingPaidStatus;
    private $refund;
    private $code;
    private $fromTime;
    private $toTime;

    public function __construct(
        string $clientCode,
        \DateTime $date,
        string $fromTime,
        string $toTime,
        string $comments,
        string $numberOfPackages,
        string $weight,
        string $productCode,
        string $shippingPayed,
        string $refund,
        string $code
    ) {
        $this->clientCode         = $clientCode;
        $this->date               = $date;
        $this->comments           = $comments;
        $this->numberOfPackages   = $numberOfPackages;
        $this->weight             = $weight;
        $this->productCode        = $productCode;
        $this->shippingPaidStatus = $shippingPayed;
        $this->refund             = $refund;
        $this->code               = $code;
        $this->fromTime           = $fromTime;
        $this->toTime             = $toTime;
    }

    public function clientCode(): string
    {
        return $this->clientCode;
    }

    public function date(): \DateTime
    {
        return $this->date;
    }

    public function comments(): string
    {
        return $this->comments;
    }

    public function numberOfPackages(): int
    {
        return $this->numberOfPackages;
    }

    public function weight(): string
    {
        return $this->weight;
    }

    public function productCode(): string
    {
        return $this->productCode;
    }

    public function refund(): string
    {
        return $this->refund;
    }

    public function shippingPaidStatus(): string
    {
        return $this->shippingPaidStatus;
    }

    public function code(): string
    {
        return $this->code;
    }

    public function fromTime(): string
    {
        $this->fromTime;
    }

    public function toTime(): string
    {
        $this->toTime;
    }
}
