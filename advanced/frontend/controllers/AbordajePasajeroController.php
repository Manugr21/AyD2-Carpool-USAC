<?php

namespace frontend\controllers;

use Yii;
use app\models\ABORDAJEPASAJERO;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AbordajePasajeroController implements the CRUD actions for ABORDAJEPASAJERO model.
 */
class AbordajePasajeroController extends Controller
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
     * Lists all ABORDAJEPASAJERO models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => ABORDAJEPASAJERO::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ABORDAJEPASAJERO model.
     * @param integer $ID
     * @param integer $USUARIO_ID
     * @param integer $PUNTOS_VIAJE_ID
     * @return mixed
     */
    public function actionView($ID, $USUARIO_ID, $PUNTOS_VIAJE_ID)
    {
        return $this->render('view', [
            'model' => $this->findModel($ID, $USUARIO_ID, $PUNTOS_VIAJE_ID),
        ]);
    }

    /**
     * Creates a new ABORDAJEPASAJERO model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ABORDAJEPASAJERO();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ID' => $model->ID, 'USUARIO_ID' => $model->USUARIO_ID, 'PUNTOS_VIAJE_ID' => $model->PUNTOS_VIAJE_ID]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ABORDAJEPASAJERO model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $ID
     * @param integer $USUARIO_ID
     * @param integer $PUNTOS_VIAJE_ID
     * @return mixed
     */
    public function actionUpdate($ID, $USUARIO_ID, $PUNTOS_VIAJE_ID)
    {
        $model = $this->findModel($ID, $USUARIO_ID, $PUNTOS_VIAJE_ID);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ID' => $model->ID, 'USUARIO_ID' => $model->USUARIO_ID, 'PUNTOS_VIAJE_ID' => $model->PUNTOS_VIAJE_ID]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ABORDAJEPASAJERO model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $ID
     * @param integer $USUARIO_ID
     * @param integer $PUNTOS_VIAJE_ID
     * @return mixed
     */
    public function actionDelete($ID, $USUARIO_ID, $PUNTOS_VIAJE_ID)
    {
        $this->findModel($ID, $USUARIO_ID, $PUNTOS_VIAJE_ID)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ABORDAJEPASAJERO model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $ID
     * @param integer $USUARIO_ID
     * @param integer $PUNTOS_VIAJE_ID
     * @return ABORDAJEPASAJERO the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ID, $USUARIO_ID, $PUNTOS_VIAJE_ID)
    {
        if (($model = ABORDAJEPASAJERO::findOne(['ID' => $ID, 'USUARIO_ID' => $USUARIO_ID, 'PUNTOS_VIAJE_ID' => $PUNTOS_VIAJE_ID])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
