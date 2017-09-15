class HistoriaTest extends CDbTestCase
{

  public function testApprove()
  {
      $model = Historia::model()->findAll();
      $this->assertNotNull($model,
            'Historias obtenidas de la base de datos');
  }

}
