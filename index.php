#!/bin/sh 
php /home/sam/PHP-project-creator/index.php "$@"


<?php 
require 'src/createNewProject.php';
use App\createNewProject;

$name = readline('Enter Project Name:');

$create = new createNewProject();

$create->create($name);

?>