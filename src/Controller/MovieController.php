<?php
namespace App\Controller;


use App\Model\ApiManager;

class MovieController extends AbstractController
{
    public function index()
    {
        $apiManager = new ApiManager();
        $getMovie = $apiManager->getAllMovies();
        return $this->twig->render('Movie/index.html.twig', ['contents' => $getMovie]);
    }
}

