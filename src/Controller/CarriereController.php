<?php


namespace App\Controller;


class CarriereController extends AbstractController
{


    public function candidature()
    {
        return $this->twig->render('Carriere/Candidature.html.twig');
    }

    public function Validation()
    {
        if (isset($_FILES['picture'])) {
            $dossier = '/home/arthur/quetes/hackaton halloween/Hackaton-Halloween/public/assets/img/';
            $extension = strrchr($_FILES['picture']['name'], ".");
            var_dump($_FILES['picture']);
            var_dump($extension);
            $destinationName = 'image' . uniqid() . $extension;
            $fichier = $dossier . basename($destinationName);
            var_dump($fichier);
            if (move_uploaded_file($_FILES['picture']['tmp_name'], $fichier))
                $pathImg = $destinationName;
                 var_dump($pathImg);
        }
        $nom = $_POST['nom'];
        $description=$_POST['description'];
        return $this->twig->render('Carriere/Validation.html.twig', ['nom' => $nom, 'pathImg' => $pathImg, 'description'=>$description]);
    }

}