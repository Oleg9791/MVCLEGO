<?php


namespace App\Controller;


use App\View\View;

abstract class AbstractController
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    protected function redirect(string $url): void
    {
        header("Location:$url");
    }
}