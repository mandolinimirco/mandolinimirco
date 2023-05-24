<?php

session_start();

if($_GET)
{
    $_SESSION['lingua']=$_GET['scelta'];
}

?>