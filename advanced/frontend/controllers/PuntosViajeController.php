<?php

namespace frontend\controllers;

require "../../../../predis/autoload.php";

use Yii;
use app\models\PUNTOSVIAJE;
use app\models\PUNTOSVIAJESearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PuntosViajeController implements the CRUD actions for PUNTOSVIAJE model.
 */
class PuntosViajeController extends Controller
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
     * Lists all PUNTOSVIAJE models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PUNTOSVIAJESearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PUNTOSVIAJE model.
     * @param integer $ID
     * @param integer $VIAJE_ID
     * @param integer $PUNTO_ABORDAJE_ID
     * @return mixed
     */
    public function actionView($ID, $VIAJE_ID, $PUNTO_ABORDAJE_ID)
    {
        return $this->render('view', [
            'model' => $this->findModel($ID, $VIAJE_ID, $PUNTO_ABORDAJE_ID),
        ]);
    }

    /**
     * Creates a new PUNTOSVIAJE model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PUNTOSVIAJE();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
		//ACA VA LA INSERCION A REDIS
		try {
               		 $redis = new ..\..\..\..\Predis\Client(array(
                        	 "scheme" => "tcp",
                        	 "host" => "18.220.146.150",
                         	 "port" => 6379
                       	 ));

               		 $redis->lpush("Redis_PuntosViaje", $model->ID.','.$model->pUNTOABORDAJE->DESCRIPCION.','.$model->pUNTOABORDAJE->LUGAR.','.$HORA);
	        }
       		catch (Exception $e) {
                	echo "error";
                	die($e->getMessage());
        	}

            return $this->redirect(['view', 'ID' => $model->ID, 'VIAJE_ID' => $model->VIAJE_ID, 'PUNTO_ABORDAJE_ID' => $model->PUNTO_ABORDAJE_ID]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing PUNTOSVIAJE model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $ID
     * @param integer $VIAJE_ID
     * @param integer $PUNTO_ABORDAJE_ID
     * @return mixed
     */
    public function actionUpdate($ID, $VIAJE_ID, $PUNTO_ABORDAJE_ID)
    {
        $model = $this->findModel($ID, $VIAJE_ID, $PUNTO_ABORDAJE_ID);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ID' => $model->ID, 'VIAJE_ID' => $model->VIAJE_ID, 'PUNTO_ABORDAJE_ID' => $model->PUNTO_ABORDAJE_ID]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing PUNTOSVIAJE model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $ID
     * @param integer $VIAJE_ID
     * @param integer $PUNTO_ABORDAJE_ID
     * @return mixed
     */
    public function actionDelete($ID, $VIAJE_ID, $PUNTO_ABORDAJE_ID)
    {
        $this->findModel($ID, $VIAJE_ID, $PUNTO_ABORDAJE_ID)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PUNTOSVIAJE model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $ID
     * @param integer $VIAJE_ID
     * @param integer $PUNTO_ABORDAJE_ID
     * @return PUNTOSVIAJE the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ID, $VIAJE_ID, $PUNTO_ABORDAJE_ID)
    {
        if (($model = PUNTOSVIAJE::findOne(['ID' => $ID, 'VIAJE_ID' => $VIAJE_ID, 'PUNTO_ABORDAJE_ID' => $PUNTO_ABORDAJE_ID])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
