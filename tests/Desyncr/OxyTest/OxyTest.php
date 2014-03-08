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
namespace Desyncr\OxyTest;

use Zend\Mvc\Application;

/**
 * Class OxyTest
 *
 * @category General
 * @package  Desyncr\OxyTest
 * @author   Dario Cavuotti <dc@syncr.com.ar>
 * @license  https://www.gnu.org/licenses/gpl.html GPL-3.0+
 * @link     https://github.com/desyncr
 */
class OxyTest extends OxyTestBase
{
    /**
     * testNoInitWithoutConfiguration
     *
     * @return mixed
     */
    public function testNoInitWithoutConfiguration()
    {
        $this->setExpectedException('Exception');
        Application::init();
    }

    /**
     * testInitWithConfiguration
     *
     * @return mixed
     */
    public function testInitWithConfiguration()
    {
        $config = $this->getBasicApplicationConfiguration();

        $app = Application::init($config);
        $this->assertNotNull($app);
    }

    /**
     * testRunApplication
     *
     * @return null
     */
    public function testRunApplicationWithoutRoutes()
    {
        $this->markTestIncomplete();
    }
}