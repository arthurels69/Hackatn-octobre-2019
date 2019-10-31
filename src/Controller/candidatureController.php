<?php
namespace App\Controller;


 class candidatureController extends AbstractController {


     public function index(){
         return $this->twig->render('Api/candidature.html.twig');
     }

 }