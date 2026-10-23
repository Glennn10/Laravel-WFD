<?php
require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../models/Author.php';

class AuthorController extends Controller
{
    public function index()
    {
        $model = new Author();

        $this->view('authors/index', [
            'title' => 'Data Author',
            'authors' => $model->getAll(),
        ]);
    }
}
