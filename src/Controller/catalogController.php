<?php
namespace App\Controller;

use App\Model\AbstractManager;
use App\Model\ApiManager;

class CatalogController extends AbstractController
{
    public function index()
    {
        $apiManager = new CatalogManager();
        $getMovie = $apiManager->getAllMovies();

        $getMonsters = $apiManager->getAllMonsters();

        return $this->twig->render('Api/index.html.twig', ['contents' => $getMovie, 'monsters' => $getMonsters]);
    }
}

