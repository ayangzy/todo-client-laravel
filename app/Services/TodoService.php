<?php

namespace App\Services;

use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class TodoService
{
    protected $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.todo.base_uri');
    }


    public function fetchTodos()
    {
        $url = $this->baseUri . 'todos';

        $response = Http::withToken($this->fetchJwtToken())->get($url)['data'];

        return $response;
    }

    public function fetchTodo($todo)
    {
        $url = $this->baseUri . "todos/{$todo}";

        $response = Http::withToken($this->fetchJwtToken())->get($url)['data'];

        return $response;
    }


    public function createTodo($data)
    {
        $url = $this->baseUri . 'todos';

        $response = Http::withToken($this->fetchJwtToken())->post($url, $data);

        return json_decode($response->body(), true);
    }


    public function updateTodo($todo, $data)
    {
        $url = $this->baseUri . "todos/{$todo}";

        $response = Http::withToken($this->fetchJwtToken())->patch($url, $data);

        return json_decode($response->body(), true);
    }


    public function deleteTodo($todo)
    {

        $url = $this->baseUri . "todos/{$todo}";

        $response = Http::withToken($this->fetchJwtToken())->delete($url);

        return json_decode($response->body(), true);
    }

    private function fetchJwtToken()
    {
        return Auth::user()->api_token;
    }
}