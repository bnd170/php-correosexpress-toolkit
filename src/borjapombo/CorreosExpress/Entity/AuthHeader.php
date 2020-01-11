<?php

namespace borjapombo\CorreosExpress\Entity;

final class AuthHeader
{
    private $user;
    private $password;

    public function __construct(
        string $user,
        string $password
    ) {
        $this->user     = $user;
        $this->password = $password;
    }

    public function user(): string
    {
        return $this->user;
    }

    public function password(): string
    {
        return $this->password;
    }
}
