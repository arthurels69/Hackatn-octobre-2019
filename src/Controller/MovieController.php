<?php
namespace App\Controller;


use App\Model\ApiManager;

class MovieController extends AbstractController
{
    public function index()
    {
        $apiManager = new ApiManager();
        if (isset($_POST['country'])) {
            $getMovie = $apiManager->getAllMoviesByCountry($_POST['country']);
            return $this->twig->render('Movie/index.html.twig', ['contents' => $getMovie]);
        } else {
            $getMovie = $apiManager->getAllMovies();
            return $this->twig->render('Movie/index.html.twig', ['contents' => $getMovie]);
        }
    }
}