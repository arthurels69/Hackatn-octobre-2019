<?php
/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/04/19
 * Time: 18:40
 */

namespace App\Controller;


use App\Model\ApiManager;

class HomeController extends AbstractController
{

    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */

    public function index()
    {
        $log='login';
        $lienLog='login/login';
        if (isset($_POST['loginname'])){
            $_SESSION['loginname']= $_POST['loginname'];
            setcookie('loginname', 'modjo', time() + 365 * 24 * 3600);
            $_COOKIE['loginname'] = $_POST['loginname'];

        }
        if(isset($_SESSION['loginname'])){
            $log='logout';
            $lienLog='logout.php';
        }



        $apiManager = new ApiManager();
        $getMonsters = $apiManager->getAllMonsters();
        return $this->twig->render('Home/index.html.twig',['monsters' => $getMonsters, 'log'=>$log, 'lienLog'=>$lienLog]);

    }
}
