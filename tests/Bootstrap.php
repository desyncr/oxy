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
namespace Desyncr\Oxy;

$loader = include __DIR__ . '/../vendor/autoload.php';

/** @var $loader \Composer\Autoload\ClassLoader */
$loader->add('Desyncr\\OxyTest\\', __DIR__);