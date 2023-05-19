<?php

namespace App\Services;

use Google\Cloud\Translate\V2\TranslateClient;

class TranslateService
{
    protected $client;

    public function __construct()
    {
        $this->client = new TranslateClient([
            'key' => config('services.google_translate.api_key'),
        ]);
    }

    public function translate($text, $targetLanguage)
    {
        $result = $this->client->translate($text, [
            'target' => $targetLanguage,
        ]);

        return $result['text'];
    }
}
