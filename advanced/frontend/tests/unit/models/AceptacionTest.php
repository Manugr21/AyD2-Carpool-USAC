<?php
namespace frontend\tests\unit\models;

use common\fixtures\UserFixture;
use app\models\Aceptacion;

class AceptacionTest extends \Codeception\Test\Unit
{
    /**
     * @var \frontend\tests\UnitTester
     */

    public function testCrearAceptacion()
    {
        $model = new Aceptacion;
        $model->setAttributes(array(
            'id_aceptacion' => '1',
            'id_historia' => '1',
            'descripcion' => 'Aceptacion prueba',
            'hecho' => '1',
        ),false);

        $this->assertTrue($model->save(false));
      }

}
