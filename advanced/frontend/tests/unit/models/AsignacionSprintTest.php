class AsignacionSprintTest extends CDbTestCase
{

  public function testApprove()
  {
      $model = AsignacionSprint::model()->findAll();
      $this->assertNotNull($model,
            'AsignacionSprint obtenidos de la base de datos');
  }

}
