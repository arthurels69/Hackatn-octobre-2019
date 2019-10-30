<?php
namespace App\Controller;

use App\Model\AbstractManager;


class GetmonsterController extends AbstractController
{
    public function monsterCookie()
    {
        $cookieId = $_POST['id'];
        setcookie('monsterId', $cookieId);
        header('location:/Movie/index');
    }
}
