<?php
/**
 * App
 *
 * PHP version 5.4
 *
 * @category General
 * @package  App
 * @author   Dario Cavuotti <dc@syncr.com.ar>
 * @license  https://www.gnu.org/licenses/gpl.html GPL-3.0+
 * @version  GIT:<>
 * @link     https://github.com/desyncr
 */
namespace App;
use Zend\Mvc\MvcEvent;

/**
 * Class Module
 *
 * @category General
 * @package  App
 * @author   Dario Cavuotti <dc@syncr.com.ar>
 * @license  https://www.gnu.org/licenses/gpl.html GPL-3.0+
 * @link     https://github.com/desyncr
 */
class Module
{
    /**
     * onBootstrap
     *
     * @param MvcEvent $e
     *
     * @return mixed
     */
    public function onBootstrap(MvcEvent $e)
    {
    }

    /**
     * getConfig
     *
     * @return mixed
     */
    public function getConfig()
    {
        return array(
            'router' => array(
                'routes' => array(
                    'index' => array(
                        'type'    => 'Zend\Mvc\Router\Http\Literal',
                        'options' => array(
                            'route'    => '/',
                            'defaults' => array(
                                'controller' => 'Application\Controller\Index',
                                'action'     => 'index',
                            ),
                        ),
                    ),
                )
            ),
            'controllers' => array(
                'invokables' => array(
                    'Application\Controller\Index' => 'Application\Controller\IndexController'
                )
            ),
            'view_manager' => array(
                'template_map' => array(
                    'error' => __DIR__ . '/view/error.phtml',
                    'layout/layout' => __DIR__ . '/view/layout/layout.phtml',
                    'application/index/index' => __DIR__ . '/view/application/index/index.phtml',
                ),
                'template_path_stack' => array(
                    'application' => __DIR__ . '/view',
                ),
            )
       );
    }

    /**
     * getAutoloaderConfig
     *
     * @return mixed
     */
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    'Application' => __DIR__ . '/src/Application',
                ),
            ),
        );
    }
}
