<?php

namespace DesignPattern\Http;

class ReactPHPHttpAdapter implements HttpAdapter
{
    public function post(string $url, array $data = []): void
    {
        // Instacio React PHP
        // Preparo os dados
        // Faço a requisição

        echo "ReactPHP";
    }
}