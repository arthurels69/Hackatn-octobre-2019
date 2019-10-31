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

        $apiManager = new ApiManager();
        $getMonsters = $apiManager->getAllMonsters();
        $log='Login';
        $lienLog='login/login';
        if (isset($_POST['loginname'])){
            $_SESSION['loginname']= $_POST['loginname'];
            setcookie('loginname', 'modjo', time() + 365 * 24 * 3600);
            $_COOKIE['loginname'] = $_POST['loginname'];

        }
        if(isset($_COOKIE['login'])){
            $log='Logout';
            $lienLog='logout.php';
        }else{
            $log='Login';
            $lienLog='login/login';
        }
        return $this->twig->render('Home/index.html.twig',['monsters' => $getMonsters, 'log'=>$log, 'lienLog'=>$lienLog]);
    }
}
