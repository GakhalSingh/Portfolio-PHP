<?php
require '../Modules/Database.php';
require '../Modules/Projects.php';

$request = $_SERVER['REQUEST_URI'];
$params = explode("/", $request);
$title = "G-S";
$titleSuffix = "";

switch ($params[1]) {

    case 'home':
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
        break;
    case 'projects':
        $titleSuffix = ' | Projecten';
        $projects = getProjects();
        include_once "../Templates/projects.php";
        break;

    default:
    $titleSuffix = ' | Home';
    include_once "../Templates/home.php";

}

function getTitle()
{
    global $title, $titleSuffix;
    return $title . $titleSuffix;
}