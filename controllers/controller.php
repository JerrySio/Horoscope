<?php
switch($action)
{
    case 'reponse':
    {
        //var_dump($_REQUEST ['catpro']);
        $catpro=$_REQUEST ['catpro'];
     include 'views/reponse.php';
        break;
    }
    default:
    {include 'views/choix.php';}
}