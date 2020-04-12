<?php 

class Persons{
    protected $model = '';

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $persons  = $this->model->getAllPersons();
        require_once 'view/persons/list.php';
    }

    public function detail($id)
    {
        $person  = $this->model->getPersonsById($id);
        require_once  'view/persons/detail.php';
    }

    public function create()
    {
        if ($_POST) {
            $this->model->insert();
            header("Location: http://localhost/PHP_MVC/index.php/persons");
        } else {
            require_once  'view/persons/form.php';
        }
    }

    public function edit($id)
    {
        if ($_POST) {
            $this->model->update($id);
            header("Location: http://localhost/PHP_MVC/index.php/persons");
        } else {
            $person = $this->model->getPersonsById($id);
            require_once 'view/persons/form.php';
        }
    }

    public function delete($id)
    {
        if ($id) {
            $this->model->delete($id);
            header("Location: http://localhost/PHP_MVC/index.php/persons");
        }
    }
}
