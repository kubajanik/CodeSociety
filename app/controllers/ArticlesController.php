<?php

namespace Controllers;

use Repositories\ArticlesRepository;

class ArticlesController
{
    private $repository;

    public function __construct() 
    {
        $this->repository = new ArticlesRepository();
    }

    public function articlesByCategory($category, $page = 1)
    {
        $articles = $this->repository->getArticles($page, $category);
        $totalPages = $this->repository->getPagesCount($category);
        $categories = $this->repository->getCategories();

        return view('articles', ['articles' => $articles, 'totalPages' => $totalPages, 'categories' => $categories]);
    }

    public function articlesByPage($page = 1)
    {
        $articles = $this->repository->getArticles($page);
        $totalPages = $this->repository->getPagesCount();
        $categories = $this->repository->getCategories();

        return view('articles', ['articles' => $articles, 'totalPages' => $totalPages, 'categories' => $categories]);
    }
}