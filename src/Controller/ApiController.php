<?php
namespace App\Controller;

use App\Model\AbstractManager;
use App\Model\ApiManager;

class ApiController extends AbstractController
{
    public function index()
    {
        $apiManager = new ApiManager();
        $getMovie = $apiManager->getAllMovies();
        $getMonsters = $apiManager->getAllMonsters();

        return $this->twig->render('Api/index.html.twig', ['contents' => $getMovie, 'monsters' => $getMonsters]);

    }
    public function candidature(){
        return $this->twig->render('Api/Candidature.html.twig');
    }
    public function Validation(){
        return $this->twig->render('Api/Validation.html.twig');
    }
}
