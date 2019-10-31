<?php

namespace App\Controller;

use App\Model\ApiManager;

class PanierController extends AbstractController
{
    public function index()
    {
        $apiManager = new ApiManager();
        if (isset($_POST['maj-cart']) && ($_POST['maj-cart'] != "")) {
            header('location:/' . $_POST['maj-cart'] . '/index');
        }if (isset($_COOKIE['monsterId']) && (isset($_COOKIE['movieId']))){
            $getMonster = $apiManager->getMonsterId($_COOKIE['monsterId']);
            $getMovie = $apiManager->getAllMoviesById($_COOKIE['movieId']);
            return $this->twig->render('Panier/index.html.twig', ['getMovie' => $getMovie, 'getMonster' => $getMonster]);
    }
            else {
                $panierVide = ['Mon panier est vide'];
            return $this->twig->render('Panier/index.html.twig', ['panierVide' => $panierVide]);
        }
    }
}