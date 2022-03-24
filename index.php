#!/bin/sh 
php /home/sam/PHP-project-creator/index.php "$@"


<?php 
require 'src/createNewProject.php';
require 'src/innerFiles/innerProjectFiles.php';
use App\createNewProject;
use App\InnerFiles\InnerProjectFiles;

$name = readline('Enter Project Name:');
$currentDir = exec('pwd');

$create = new createNewProject();

$create->create($name);

$innerFiles = new InnerProjectFiles($name, $currentDir);

$innerFiles->create();

?>