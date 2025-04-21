<?php

namespace App\Controllers;

class HomeController
{
    public function index(): void
    {
        $data = [
            'title' => 'Welcome to PHP Framework',
            'message' => 'This is a simple PHP framework example.'
        ];
        
        require __DIR__ . '/../Views/home.php';
    }
} 