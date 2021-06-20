<?php


namespace App\Controller;


class Main
{
    public function actionIndex()
    {
        include __DIR__ . "/../../templates/main/hello.php";
    }
}