<?php
namespace frontend\tests\unit\models;

use common\fixtures\UserFixture;
use frontend\models\AsignacionSprint;

class AsignacionSprintTest extends \Codeception\Test\Unit
{
    /**
     * @var \frontend\tests\UnitTester
     */

    public function test_enough_space()
    {
        $model = new AsignacionSprint;
        #enough_space(id_sprint,id_historia)
        $this->assertTrue($model->enough_space(3,2));
      }

}
