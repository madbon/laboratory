<?php

namespace backend\controllers;

use Yii;
use common\models\UrinFecaCatSubparentCms;
use common\models\UrinFecaCatSubparentCmsSearch;
use common\models\UrinFecaCatParentCms;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

/**
 * UrinFecaCatSubparentCmsController implements the CRUD actions for UrinFecaCatSubparentCms model.
 */
class UrinFecaCatSubparentCmsController extends Controller
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
     * Lists all UrinFecaCatSubparentCms models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UrinFecaCatSubparentCmsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UrinFecaCatSubparentCms model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new UrinFecaCatSubparentCms model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new UrinFecaCatSubparentCms();

        $parent_category = ArrayHelper::map(UrinFecaCatParentCms::find()->all(), 'c', 'parent_category_name');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->c]);
        }

        return $this->render('create', [
            'model' => $model,
            'parent_category' => $parent_category,
        ]);
    }

    /**
     * Updates an existing UrinFecaCatSubparentCms model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $parent_category = ArrayHelper::map(UrinFecaCatParentCms::find()->all(), 'c', 'parent_category_name');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->c]);
        }

        return $this->render('update', [
            'model' => $model,
            'parent_category' => $parent_category,
        ]);
    }

    /**
     * Deletes an existing UrinFecaCatSubparentCms model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the UrinFecaCatSubparentCms model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return UrinFecaCatSubparentCms the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = UrinFecaCatSubparentCms::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
