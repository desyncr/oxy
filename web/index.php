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
chdir(dirname(__DIR__));
require __DIR__ . '/../vendor/autoload.php';
\Zend\Mvc\Application::init(require __DIR__ . '/../config/application.config.php')->run();