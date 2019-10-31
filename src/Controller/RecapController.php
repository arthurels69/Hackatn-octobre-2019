<?php
namespace App\Controller;

use App\Model\AbstractManager;


class RecapController extends AbstractController
{
    public function monRecap()
    {
        $monRecap = unserialize($_COOKIE['monPanier']);
        return $this->twig->render('Recap/index.html.twig',['monRecap'=>$monRecap]);
    }
}