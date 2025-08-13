<?php

namespace Felipewustarnold\LaravelEvolution\Evolution\Support;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class EvolutionService
{
    protected PendingRequest $api;

    public function __construct(
        ?string $apiKey = null,
        ?string $baseUrl = null,
        ?int $timeout = null
    ) {
        $this->api = Http::acceptJson()
            ->timeout($timeout ?? (int) config('evolution.timeout', 30))
            ->withHeaders([
                'apikey' => $apiKey ?? config('evolution.key'),
            ])
            ->baseUrl($baseUrl ?? (string) config('evolution.url'));
    }

    public function client(): PendingRequest
    {
        return $this->api;
    }
}
