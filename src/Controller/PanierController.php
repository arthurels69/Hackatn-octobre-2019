<?php

namespace App\Controller;

class PanierController extends AbstractController
{
    public function index()
    {
        return $this->twig->render('Panier/index.html.twig');
    }
}