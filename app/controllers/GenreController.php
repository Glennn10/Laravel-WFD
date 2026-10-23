<?php
require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../models/Genre.php';

class GenreController extends Controller
{
    public function index()
    {
        $model = new Genre();

        $this->view('genres/index', [
            'title' => 'Data Genre',
            'genres' => $model->getAll(),
        ]);
    }
}
