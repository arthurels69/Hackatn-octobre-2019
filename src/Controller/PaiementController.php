<?php

namespace App\Controller;

use App\Model\ApiManager;

class PaiementController extends AbstractController
{
    public function index()
    {
        return $this->twig->render('Paiement/index.html.twig');
    }
}