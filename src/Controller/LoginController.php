<?php


namespace App\Controller;


class LoginController extends AbstractController
{

    public function login (){
        return $this->twig->render('login/Login.html.twig');
    }
}