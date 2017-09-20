<?php
namespace frontend\tests\unit\models;

use common\fixtures\UserFixture;
use frontend\controllers\AvanceController;

class AvanceTest extends \Codeception\Test\Unit
{
    /**
     * @var \frontend\tests\UnitTester
     */

    public function test_verificarPorcentajeAvance()
    {
        $model = new AvanceController('','','');

        $this->assertTrue($model->verificarPorcentajeAvance(50));
      }

}
