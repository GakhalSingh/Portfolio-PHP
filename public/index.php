<?php
require '../Modules/Database.php';
require '../Modules/Main.php';

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
    case 'skills':
        $titleSuffix = ' | Vaardigheden';
        $skills = getSkills();
        include_once "../Templates/skills.php";
        break;
    case 'updates':
        $titleSuffix = ' | Updates';
        $updates = getUpdates();
        include_once "../Templates/updates.php";
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