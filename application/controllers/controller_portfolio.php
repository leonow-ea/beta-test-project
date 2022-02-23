<?php

namespace app\controllers;

use app\models\Model_Portfolio;

class Controller_Portfolio extends \app\core\Controller
{

    function __construct()
    {
        $this->model = new Model_Portfolio();
        $this->view = new \app\core\View();
    }

    function action_index()
    {
        $data = $this->model->get_data();
        $this->view->generate('portfolio_index.php', 'template_view.php', $data);
    }

    function action_view()
    {
        $id = $_GET['id'];

        $data = $this->model->get_data();

        $model = $data[$id] ?? null;
        if (!$model)
            die();


        $this->view->generate('portfolio_view.php', 'template_view.php', ['model' => $model]);
    }
}