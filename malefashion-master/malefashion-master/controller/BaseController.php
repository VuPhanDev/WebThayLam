<?php

class BaseController {

    public function model($model) {
        include_once "../model/" . $model . ".php";
        return new $model;
    }

    public function view($view, $data = []) {
        include_once "../view/" . $view . ".php";
    }

}