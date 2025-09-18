<?php 

require_once './lista.php';
require_once './filtro.php';
require_once './verFigura.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}
$params = explode('/', $action);

switch($params[0]){
    case 'home':
        getList();
        break;
    case 'area':
        verPorArea($params[1]);
        break; 
    case 'id':
        verFiguraPorID($params[1]);
        break;
    default:
        echo('error!!');
}