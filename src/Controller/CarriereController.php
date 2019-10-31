<?php


namespace App\Controller;


class CarriereController extends AbstractController
{


    public function candidature()
    {
        $loginName=$_SESSION['loginname'];

        return $this->twig->render('Carriere/Candidature.html.twig',['loginname'=>$loginName]);
    }

    public function Validation()
    {
        if (isset($_FILES['picture'])) {
            $dossier = '../public/assets/img/';
            $extension = strrchr($_FILES['picture']['name'], ".");

            $destinationName = 'image' . uniqid() . $extension;
            $fichier = $dossier . basename($destinationName);

            if (move_uploaded_file($_FILES['picture']['tmp_name'], $fichier))
                $pathImg = $destinationName;

        }
        $nom = $_POST['nom'];
        $description=$_POST['description'];


        return $this->twig->render('Carriere/Validation.html.twig', ['nom' => $nom, 'pathImg' => $pathImg, 'description'=>$description]);
    }

}