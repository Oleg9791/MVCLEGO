<?php


namespace App\View;


class View
{
    protected array $data;
    protected string $template;

    /**
     * @param mixed $data
     */
    public function setData(array $data): static
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @param mixed $template
     */
    public function setTemplate(string $template): static
    {
        $this->template = $template;
        return $this;

    }

    public function view()
    {
        include __DIR__ . "/../../templates/main.php";
    }

    public function body()
    {
        include __DIR__ . "/../../templates/$this->template.php";

    }
}