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
return array(
    'modules' => array(
        'app'
    ),
    'module_listener_options' => array(
        'config_glob_paths' => array(
            __DIR__ . '/global.config.php',
        ),
        'module_paths' => array(
            __DIR__ . '/../'
        ),
    )
);