<?php
    include "../../lib.php";
    session_start();
    $_SESSION = array();        //borrar arreglo 
    session_destroy();          //Destruir la sesiós
    header("Location: ../");