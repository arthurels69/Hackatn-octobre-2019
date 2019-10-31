<?php
namespace App\Controller;

use App\Model\AbstractManager;


class GetpanierController extends AbstractController
{
    public function monPanier()
    {
        $cookiePanier =[];
        $cookiePanier[] = $_POST['VictimName'];
        $cookiePanier[] = $_POST['VictimAddress'];
        $cookiePanier[] = $_POST['VictimType'];
        $cookiePanier[] = $_POST['VictimPrestation'];
        $cookiePanier[] = $_POST['Execution_Date'];
        $monPanier = serialize($cookiePanier);
        setcookie('monPanier',$monPanier,time() + 3600, "/");
        header('location:/Paiement/index');
    }
}