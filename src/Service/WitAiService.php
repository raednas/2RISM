<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class WitAiService
{
    private $httpClient;
    private $accessToken;

    public function __construct(HttpClientInterface $httpClient, string $accessToken)
    {
        $this->httpClient = $httpClient;
        $this->accessToken = $accessToken;
    }

    public function sendMessage(string $message): array
    {
        $response = $this->httpClient->request('GET', 'https://api.wit.ai/message?v=20240301&q=' . urlencode($message), [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->accessToken,
            ],
        ]);

        return $response->toArray();
    }
}