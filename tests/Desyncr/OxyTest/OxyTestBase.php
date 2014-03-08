<?php
/**
 * Desyncr\OxyTest
 *
 * PHP version 5.4
 *
 * @category General
 * @package  Desyncr\OxyTest
 * @author   Dario Cavuotti <dc@syncr.com.ar>
 * @license  https://www.gnu.org/licenses/gpl.html GPL-3.0+
 * @version  GIT:<>
 * @link     https://github.com/desyncr
 */
namespace Desyncr\OxyTest;

/**
 * Class OxyTestBase
 *
 * @category General
 * @package  Desyncr\OxyTest
 * @author   Dario Cavuotti <dc@syncr.com.ar>
 * @license  https://www.gnu.org/licenses/gpl.html GPL-3.0+
 * @link     https://github.com/desyncr
 */
class OxyTestBase extends \PHPUnit_Framework_TestCase
{
    public function getBasicApplicationConfiguration()
    {
        return array(
            'modules' => array(
            ),
            'module_listener_options' => array(
                'config_glob_paths' => array(
                    __DIR__ . '/testing.config.php',
                ),
                'module_paths' => array(),
            ),
            'console' => array(
                'router' => array(
                    'routes' => array(
                        'index' => array(
                            'options' => array(
                                'route' => 'index',
                                'defaults' => array(
                                    '__NAMESPACE__' => 'Desyncr\Oxy',
                                    'controller' => 'Index',
                                    'action' => 'index'
                                )
                            )
                        )
                    )
                )
            )
        );
    }
}