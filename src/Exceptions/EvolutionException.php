<?php

namespace Felipewustarnold\LaravelEvolution\Evolution\Support\Exceptions;

use Exception;
use Illuminate\Http\Client\Response;

class EvolutionException extends Exception
{
    public static function fromResponse(
        Response $response,
        ?string $fallback = null
    ): self {
        $message = $fallback ?? 'Evolution API error';
        $body = $response->json() ?? $response->body();

        if (is_array($body) && isset($body['message'])) {
            $message = $body['message'];
        }

        return new self(sprintf(
            '%s (HTTP %s): %s',
            $message,
            $response->status(),
            is_string($body) ? $body : json_encode($body)
        ));
    }
}