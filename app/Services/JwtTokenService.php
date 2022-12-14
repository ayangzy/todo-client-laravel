<?php

namespace App\Services;

use Exception;
use App\Traits\ApiResponses;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class JwtTokenService
{

    protected $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.todo.base_uri');
    }

    public function requestJwtToken($user)
    {
        try {

            $url = $this->baseUri . 'generate-jwt-token';

            $response = Http::post($url, [
                'userId' => $user->id,
            ]);
            $accessToken = json_decode($response)->accessToken;

            $user->api_token = $accessToken;
            $user->save();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}