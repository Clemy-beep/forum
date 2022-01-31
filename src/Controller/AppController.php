<?php

namespace App\Controller;

final class AppController
{

    public function index(): void
    {
       include './src/View/Homepage.php';
    }
}
