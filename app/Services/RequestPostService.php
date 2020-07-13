<?php

namespace App\Services;

use App\Jobs\ProcessPost;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;


class RequestPostService
{
    protected $api;
    public function __construct()
    {
        $this->api = config('api.api_url');
    }

    public function send($data = array())
    {
        try {
            $response = Http::retry(3, 1000)->post($this->api, $data);

            return $response->successful();

        } catch (RequestException $e) {
            ProcessPost::dispatch($data);
        }
    }
}
