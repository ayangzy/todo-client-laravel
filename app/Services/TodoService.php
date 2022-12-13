<?php

namespace App\Services;

use Exception;
use App\Traits\RequestService;
use Illuminate\Support\Facades\Http;

class TodoService
{
    protected $baseUri;

    protected $secret;

    public function __construct()
    {
        $this->baseUri = config('services.todo.base_uri');
        $this->secret = config('services.todo.secret');
    }


    public function fetchTodos()
    {
        $url = $this->baseUri . 'todos';

        $response = Http::get($url)['data'];

        return $response;
    }

    public function fetchTodo($todo)
    {
        $url = $this->baseUri . "todos/{$todo}";

        $response = Http::get($url)['data'];

        return $response;
    }


    public function createTodo($data)
    {
        $url = $this->baseUri . 'todos';

        $response = Http::post($url, $data);

        return json_decode($response->body(), true);
    }


    public function updateTodo($todo, $data)
    {
        $url = $this->baseUri . "todos/{$todo}";

        $response = Http::patch($url, $data);

        return json_decode($response->body(), true);
    }


    public function deleteTodo($todo)
    {

        $url = $this->baseUri . "todos/{$todo}";

        $response = Http::delete($url);

        return json_decode($response->body(), true);
    }
}