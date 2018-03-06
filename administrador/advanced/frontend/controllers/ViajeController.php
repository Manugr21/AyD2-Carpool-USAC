<?php

namespace frontend\controllers;

use Yii;
use app\models\VIAJE;
use app\models\VIAJESearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ViajeController implements the CRUD actions for VIAJE model.
 */
class ViajeController extends Controller
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
     * Lists all VIAJE models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new VIAJESearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single VIAJE model.
     * @param integer $ID
     * @param integer $ESTADO_VIAJE_ID
     * @param integer $USUARIO_ID
     * @return mixed
     */
    public function actionView($ID, $ESTADO_VIAJE_ID, $USUARIO_ID)
    {
        return $this->render('view', [
            'model' => $this->findModel($ID, $ESTADO_VIAJE_ID, $USUARIO_ID),
        ]);
    }

    /**
     * Creates a new VIAJE model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new VIAJE();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ID' => $model->ID, 'ESTADO_VIAJE_ID' => $model->ESTADO_VIAJE_ID, 'USUARIO_ID' => $model->USUARIO_ID]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing VIAJE model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $ID
     * @param integer $ESTADO_VIAJE_ID
     * @param integer $USUARIO_ID
     * @return mixed
     */
    public function actionUpdate($ID, $ESTADO_VIAJE_ID, $USUARIO_ID)
    {
        $model = $this->findModel($ID, $ESTADO_VIAJE_ID, $USUARIO_ID);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ID' => $model->ID, 'ESTADO_VIAJE_ID' => $model->ESTADO_VIAJE_ID, 'USUARIO_ID' => $model->USUARIO_ID]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing VIAJE model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $ID
     * @param integer $ESTADO_VIAJE_ID
     * @param integer $USUARIO_ID
     * @return mixed
     */
    public function actionDelete($ID, $ESTADO_VIAJE_ID, $USUARIO_ID)
    {
        $this->findModel($ID, $ESTADO_VIAJE_ID, $USUARIO_ID)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the VIAJE model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $ID
     * @param integer $ESTADO_VIAJE_ID
     * @param integer $USUARIO_ID
     * @return VIAJE the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ID, $ESTADO_VIAJE_ID, $USUARIO_ID)
    {
        if (($model = VIAJE::findOne(['ID' => $ID, 'ESTADO_VIAJE_ID' => $ESTADO_VIAJE_ID, 'USUARIO_ID' => $USUARIO_ID])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
