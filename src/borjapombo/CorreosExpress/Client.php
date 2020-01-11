<?php

namespace borjapombo\CorreosExpress;

use borjapombo\CorreosExpress\Entity\AuthHeader;
use borjapombo\CorreosExpress\Entity\Request;

class Client
{
    private $client;
    private $authHeader;
    private $request;
    private $serviceAccess;

    public function __construct(
        \GuzzleHttp\Client $client,
        AuthHeader $auth,
        Request $request,
        string $serviceAccess
    ) {
        $this->client        = $client;
        $this->authHeader    = $auth;
        $this->request       = $request;
        $this->serviceAccess = $serviceAccess;
    }

    public function request()
    {
        $response = $this->client->request(
            'POST',
            $this->serviceAccess,
            [
                'auth' => [
                    $this->authHeader->user(),
                    $this->authHeader->password(),
                ],
                'json' => $this->request->build(),
            ]
        );

        return $response;
    }
}