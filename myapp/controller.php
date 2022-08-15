<?php

class Controller
{
    private $service;

    public function __construct($service) {
        $this->service = $service;
    }

    public function list() {
        return $this->service->find_all();
    }

    public function create($data) {
        $name = $data['name'];
        $age = $data['age'];

        $result = $this->service->insert([$name, $age]);
        if ($result) {
            header('Location: ../index.php');
        } else {
            echo 'error';
        }
    }

    public function edit($id) {
        return $this->service->find_one($id);
    }

    public function update($data) {
        // print_r($data); die();
        $id = $data['id'];
        $name = $data['name'];
        $age = $data['age'];

        $result = $this->service->update($id, [$name, $age]);
        if ($result) {
            header('Location: ../index.php');
        } else {
            echo 'error';
        }
    }

    public function delete($id) {
        $result = $this->service->delete($id);
        if ($result) {
            header('Location: ../index.php');
        } else {
            echo 'error';
        }
    }
}
