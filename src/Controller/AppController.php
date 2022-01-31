<?php

namespace App\Controller;

final class AppController
{

    public function index(): void
    {
       include './src/View/Homepage.php';
    }

    public function error404(): void {
        include "./404.html";
    }
}
