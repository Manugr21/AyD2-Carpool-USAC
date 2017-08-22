class SprintBacklogTest extends CDbTestCase
{

  public function testApprove()
  {
      $model = SprintBacklog::model()->findAll();
      $this->assertNotNull($model,
            'SprintBacklog obtenidos de la base de datos');
  }

}
