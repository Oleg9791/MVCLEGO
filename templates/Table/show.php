<?php

use W1020\HTML\Table;

echo (new Table())
    ->setData($this->data['table'])
    ->setHeaders($this->data['comments'])
    ->addColumn(fn($val) => "<a href='?type=Table&action=del&id=$val[id]'>Delete</a>")
    ->addColumn(fn($val) => "<a href='?type=Table&action=edite&id=$val[id]'>Edit</a>")
    ->setClass("table table-success table-striped")
    ->html();
?>
<a href="?type=Table&action=Add" class="btn btn-warning">INSERT</a>