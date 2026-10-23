<?php
require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../models/Genre.php';
require_once __DIR__ . '/../models/Author.php';

class HomeController extends Controller
{
    public function index()
    {
        $genres = (new Genre())->getAll();
        $authors = (new Author())->getAll();

        $this->view('home', [
            'title' => 'Beranda',
            'totalGenres' => count($genres),
            'totalAuthors' => count($authors),
        ]);
    }
}
