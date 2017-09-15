<?php
namespace frontend\tests;


class ExampleTest extends \Codeception\Test\Unit
{
    /**
     * @var \frontend\tests\UnitTester
     */
    protected $tester;

    protected function _before()
    {
        $histo = Historia::historia();

        $histo->username = null;
        $this->assertTrue($histo->getNotas());
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {

    }
}
