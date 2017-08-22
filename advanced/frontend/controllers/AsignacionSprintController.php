<?php

namespace frontend\controllers;

use Yii;
use frontend\models\AsignacionSprint;
use frontend\models\AsignacionSprintSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AsignacionSprintController implements the CRUD actions for AsignacionSprint model.
 */
class AsignacionSprintController extends Controller
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
     * Lists all AsignacionSprint models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AsignacionSprintSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AsignacionSprint model.
     * @param integer $id_sprint
     * @param integer $id_historia
     * @return mixed
     */
    public function actionView($id_sprint, $id_historia)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_sprint, $id_historia),
        ]);
    }

    /**
     * Creates a new AsignacionSprint model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AsignacionSprint();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_sprint' => $model->id_sprint, 'id_historia' => $model->id_historia]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing AsignacionSprint model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id_sprint
     * @param integer $id_historia
     * @return mixed
     */
    public function actionUpdate($id_sprint, $id_historia)
    {
        $model = $this->findModel($id_sprint, $id_historia);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_sprint' => $model->id_sprint, 'id_historia' => $model->id_historia]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing AsignacionSprint model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id_sprint
     * @param integer $id_historia
     * @return mixed
     */
    public function actionDelete($id_sprint, $id_historia)
    {
        $this->findModel($id_sprint, $id_historia)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AsignacionSprint model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id_sprint
     * @param integer $id_historia
     * @return AsignacionSprint the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_sprint, $id_historia)
    {
        if (($model = AsignacionSprint::findOne(['id_sprint' => $id_sprint, 'id_historia' => $id_historia])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
