<?php

/*
 * Dhaval Prajapati
 * Projectname: Malls of Dubai
 * Responsibility: Redirecting to module
 * 
 */
error_reporting(0);

require_once 'Config/constants.php';
require_once 'Config/config.php';
require_once 'Config/path.php';
require_once 'Libs/database.php';
require_once 'Libs/bootstrap.php';
require_once 'Libs/simple_html_dom.php';

$bootstrap = new Bootstrap($_GET);
