<?php
namespace frontend\tests\unit\models;

use common\fixtures\UserFixture;
use frontend\models\Historia;

class HistoriaTest extends \Codeception\Test\Unit
{
    /**
     * @var \frontend\tests\UnitTester
     */

    public function testCrearHistoria()
    {
        $model = new Historia;
        $model->setAttributes(array(
            'id_historia' => '23',
            'id_proyecto' => '1',
            'nombre' => 'Historia prueba',
            'descripcion' => 'Descripcion',
            'fh_creacion' => '2017-02-02 00:00:00',
            'prioridad' => '23',
            'dificultad' => '100',
            'avance' => '50.4',
        ),false);

        $this->assertTrue($model->save(false));
      }

}
