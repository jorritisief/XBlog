<?php

namespace Xesau\Blog;
use \Seclude;
use \Seclude\Route;
use \Seclude\SiteSettings;

# Define some paths
define ('BASE_DIR', __DIR__);
define ('Seclude\SEC_BASEDIR', __DIR__ .'/seclude');

function fancyErrorPage ($title, $message) {	exit ('<!DOCTYPE html><html><head><title>'.htmlentities ($title).'</title><style>body{font-family:\'Segoe UI\',helvetica,arial,sans-serif;background:#eee;}main{background:#fff;margin:10px auto;padding: 10px;max-width:800px;}h2{margin:0}</style><body><main><h2>'.htmlentities($title).'</h2>'.$message.'<br/><sub>&copy; Xesau Blog</sub></main></body></html>'); }

# Load seclude framework
(@include_once Seclude\SEC_BASEDIR .'/sec.init.php')
|| fancyErrorPage('Missing file', 'Could not find <kbd>sec.init.php</kbd> in the directory <kbd>seclude</kdb>. This file is essential as it is the framework.');

Seclude\secSetupAutoloader (BASE_DIR .'/application/model', BASE_DIR .'/application/controller');

# Load the configuration file
(@include_once BASE_DIR .'/config.php')
|| fancyErrorPage('Missing file', 'Could not find <kbd>config.php</kbd>. This file is essential as it contains the database login credentials.');

# Check the config
(isset ($db_driver, $db_host, $db_name, $db_user, $db_password))
|| fancyErrorPage ('Configuration error', 'One or more configuration directives are missing');

if ($db_driver == 'localhost') $db_driver = '127.0.0.1';

# Setup the PDO and stuff
try {
	$pdo = new \PDO ($db_driver .':host='. $db_host .';dbname='. $db_name, $db_user, $db_password);
	$pdo->setAttribute (\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
	
	Seclude\Storage\MySQLTable::init ($pdo);
	Seclude\SiteSettings::init ($pdo, 'blog_settings');
} catch (\PDOException $ex) {
	fancyErrorPage ('Database connection error', 'Could not connect to the '.$db_driver.' database. PDOException: '. $ex->getMessage ());
}

# Load the language
if (!is_file (BASE_DIR .'/application/language/'. SiteSettings::get ('language'). '.lang'))
	fancyErrorPage ('Language file not found', 'The language file <kbd>'.SiteSettings::get ('language').'.lang</kbd> could not be found (in <kbd>application/language</kbd>).');

Seclude\Language::loadFromINI (BASE_DIR .'/application/language/'. SiteSettings::get ('language'). '.lang');

# Setup the TPL handler
$handler = new Seclude\TwigTemplateHandler (BASE_DIR .'/skin/'. Seclude\SiteSettings::get ('skin'), array ('auto_reload' => true));

# Setup the router
define ('REQUEST', isset ($_GET ['request']) ? $_GET ['request'] : '');
$router = new Seclude\Router ($handler, 'Home', 'Error', 'Xesau\Blog', array (
	'_url' => array (
		'base' => SiteSettings::get ('base_url'),
		'skin' => SiteSettings::get ('base_url') .'/skin/'. SiteSettings::get ('skin')
	),
	'_categories' => DataSource_Categories::select (array ('category_id', 'name'))->assocAll (),
	'_pages' => DataSource_Pages::select (array ('url', 'name'))->where ('menu_visible', '1')->assocAll (),
	'_settings' => SiteSettings::getBuffer (),
	'_pagename' => '{pagename}',
	'_' => Seclude\Language::getBuffer (),
	'_posts' => Model_Post::getPosts ()
));
$router->route (new Route('p\/(.*)', 'Show', 'post', 1));
$router->route (new Route('u\/(.*)', 'Show', 'user', 1));
$router->route (new Route('s\/(.*)', 'Show', 'page', 1));
$router->route (new Route('c\/(.*)', 'Show', 'category', 1));
$router->route (new Route ('([a-zA-Z0-9\+\-\_]+)\/?', 1));
$router->route (new Route ('([a-zA-Z0-9\+\-\_]+)\/([a-zA-Z0-9\+\-\_]+)\/?', 1, 2));
$router->route (new Route ('([a-zA-Z0-9\+\-\_]+)\/([a-zA-Z0-9\+\-\_]+)\/(.+)\/?', 1, 2, 3));

# Handle
echo $router->handle (REQUEST);
