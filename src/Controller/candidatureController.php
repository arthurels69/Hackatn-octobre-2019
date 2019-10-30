<?php
namespace App\Controller;


 class CandidatureController extends AbstractController {


     public function index(){
         return $this->twig->render('Api/candidature.html.twig');
     }

 }