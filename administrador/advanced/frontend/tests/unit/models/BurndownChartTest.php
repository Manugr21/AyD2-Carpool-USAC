<?php
namespace frontend\tests\unit\models;

//use common\fixtures\UserFixture;
use frontend\controllers\BurndownchartController;

class BurndownChartTest extends \Codeception\Test\Unit
{
    /**
     * @var \frontend\tests\UnitTester
     */

    public function testRetornoGrafica()
    {
        $instancia = new BurndownchartController('','','');
        //$this->assertTrue(true);
        $this->assertTrue($instancia->RetornoGrafica(2));
      }

}
/*

[23:24, 18/9/2017] Ali Daryousef: git add -A
[23:24, 18/9/2017] Ali Daryousef: git commit -m "mensaje"
[23:24, 18/9/2017] Ali Daryousef: git push origin historia-burndownchart
*/
