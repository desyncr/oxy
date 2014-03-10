<?php
/**
 * Desyncr\Oxy
 *
 * PHP version 5.4
 *
 * @category General
 * @package  Desyncr\Oxy
 * @author   Dario Cavuotti <dc@syncr.com.ar>
 * @license  https://www.gnu.org/licenses/gpl.html GPL-3.0+
 * @version  GIT:<>
 * @link     https://github.com/desyncr
 */
require_once __DIR__ . '/../vendor/autoload.php';

use Desyncr\Oxy\Router;
use Desyncr\Oxy\Application;

$router = new Router();
$router->get('/', 'Application\Controller\IndexController');

Application::init()
    ->setRouter($router)
    ->run();

