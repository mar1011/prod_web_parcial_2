<?php
require_once("vendor/autoload.php");

\Clases\Session::start();
\Clases\Session::destroy();

header("Location:index.php");