<?php


namespace App\Controller;

use W1020\Table as ORMTable;

class Table extends AbstractController
{
    protected ORMTable $model;

    public function __construct()
    {
        parent::__construct();
        $config = include __DIR__ . "/../../config.php";
        $this->model = new ORMTable($config);
    }

    public function actionShow()
    {
        $headers['id'] = "№";
        foreach ($this->model->columnComments() as $key => $value) {
            $headers[$key] = $value;
        }
        $headers['del'] = "Delete";
        $headers['edit'] = "EDIT";
        $this
            ->view
            ->setData(["table" => $this->model->get(), "comments" => $headers])
            ->setTemplate("Table/show")
            ->view();
    }

    public function actionDel()
    {
        $this->model->del($_GET['id']);
        $this->redirect("?type=Table&action=show");
    }

    public function actionAdd()
    {
        $this->view->setData($this->model->columnComments())->setTemplate("Table/add")->view();
    }

    public function actionInsert()
    {
        $this->model->ins($_POST);
        $this->redirect("?type=Table&action=show");

    }

    public function actionEdite()
    {
        $row = $this->model->getRow($_GET['id']);
        unset($row['id']);

        $this
            ->view
            ->setData(["comments" => $this->model->columnComments(), "row" => $row, "id" => $_GET['id']])
            ->setTemplate("Table/edit")
            ->view();


    }

    public function actionEdt()
    {
        $this->model->upd($_GET['id'],$_POST);
        $this->redirect("?type=Table&action=show");

    }
}