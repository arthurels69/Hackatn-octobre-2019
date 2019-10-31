<?php


namespace App\Controller;


class LoginController extends AbstractController
{
    public function login (){
        $log='Login';
        return $this->twig->render('login/Login.html.twig', ['log'=>$log]);
    }
}