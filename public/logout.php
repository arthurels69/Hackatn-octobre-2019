<?php

session_destroy();
setcookie('monsterId', "", time() -50000, "/");
setcookie('movieId', "", time() -50000, "/");

header('location:/');
