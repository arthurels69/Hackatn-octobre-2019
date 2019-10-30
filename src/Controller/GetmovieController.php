<?php
namespace App\Controller;

use App\Model\AbstractManager;


class GetmovieController extends AbstractController
{
    public function movieCookie()
    {
        $movieId = $_POST['id'];
        setcookie('movieId', $movieId);
        header('location:/Monster/index');
    }
}
