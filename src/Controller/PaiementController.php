<?php

namespace App\Controller;

use App\Model\ApiManager;

class PaiementController extends AbstractController
{
    public function index()
    {
        $log='Login';
        return $this->twig->render('Paiement/index.html.twig', ['log'=>$log]);
    }
}