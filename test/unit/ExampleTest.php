<?php

class ExampleTest extends PHPUnit_Framework_TestCase
{

    /**
     * Enabled to allow debug() private method write to stdout
     */
    $debug = true;


    /**
     * Mandatory config for Symfony1 to bootstrap
     */
    public function run(PHPUnit_Framework_TestResult $result = NULL)
    {
        $this->setPreserveGlobalState(false);
        return parent::run($result);
    }

    /**
     * Symfony and Doctrine bootstraping for 'backend' app
     * Needed for PHPUnit testing
     */
    protected function setUp()
    {
        require_once 'bootstrap/phpunit_bootstrap.php';
    }

    /**
     * Debug util
     * Prints to stdout var dump
     */
    private function debug($var = '') 
    {
        if ($this->debug) {
            $callers = debug_backtrace();
            $parentFunction = $callers[1]['function'];
            echo "\n***DEBUG: $parentFunction () $var \n";
        }
    }

    /**
     * Some example PHPUnit test
     */
    public function testExample1()
    {
        $count = Doctrine::getTable('Example')->count();
        $this->assertEquals(11, $count);
        $this->debug($numCf);
    }

}
