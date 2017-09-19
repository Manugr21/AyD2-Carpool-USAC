<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Historia;
use frontend\models\AvanceSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AvanceController implements the CRUD actions for Historia model.
 */
class AvanceController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Historia models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AvanceSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Historia model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Historia model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Historia();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_historia]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Historia model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        //file_put_contents("/tmp/prueba2.txt","avance: ".$model->avance."\n");
        if ($model->load(Yii::$app->request->post())) {
            if($model->avance < 101 && $model->avance >= 0){
                if($model->save()){
                    return $this->redirect(['view', 'id' => $model->id_historia]);
                }
            }else{
                echo '<div class="site-error">
                        <h1>Error</h1>
                        <h3>El avance debe de estar dentro de un rango de 0%-100%</h3>
                    </div>';

                //include_once("/var/www/html/scrum-manager/advanced/frontend/views/site/error2.php");
                //include_once("/var/www/html/scrum-manager/advanced/frontend/views");
                //echo "error,";
            }
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    public function verificarPorcentajeAvance($avance)
    {
      return $avance < 101 && $avance >= 0;
    }

    /**
     * Deletes an existing Historia model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Historia model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Historia the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Historia::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
