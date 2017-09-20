<?php

namespace frontend\controllers;

use Yii;
use frontend\models\SprintBacklog;
use frontend\models\SprintBacklogSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class BurndownchartController extends \yii\web\Controller
{
    public function actionIndex()
    {
      $searchModel = new SprintBacklogSearch();
      $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

      return $this->render('index', [
          'searchModel' => $searchModel,
          'dataProvider' => $dataProvider,
      ]);
        //return $this->render('index');
    }

    public function actionView($id)
    {

        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    protected function findModel($id)
    {
        if (($model = SprintBacklog::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function RetornoGrafica($id){
      if (($model = SprintBacklog::findOne($id)) !== null) {
          return true;
      } else {
          return false;
      }
    }

}
