<?php
class Controller
{
    protected function view($name, $data = [])
    {
        extract($data);
        require __DIR__ . '/../views/layout/header.php';
        require __DIR__ . '/../views/' . $name . '.php';
        require __DIR__ . '/../views/layout/footer.php';
    }
}
