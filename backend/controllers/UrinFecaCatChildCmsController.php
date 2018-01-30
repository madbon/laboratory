<?php

namespace backend\controllers;

use Yii;
use common\models\UrinFecaCatChildCms;
use common\models\UrinFecaCatChildCmsSearch;
use common\models\UrinFecaCatParentCms;
use common\models\UrinFecaCatSubparentCms;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

/**
 * UrinFecaCatChildCmsController implements the CRUD actions for UrinFecaCatChildCms model.
 */
class UrinFecaCatChildCmsController extends Controller
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
     * Lists all UrinFecaCatChildCms models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UrinFecaCatChildCmsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UrinFecaCatChildCms model.
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
     * Creates a new UrinFecaCatChildCms model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new UrinFecaCatChildCms();

        $parent_category = ArrayHelper::map(UrinFecaCatParentCms::find()->all(), 'c', 'parent_category_name');
        $sub_category = ArrayHelper::map(UrinFecaCatSubparentCms::find()->all(), 'c', 'sub_parent_category_name');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->c]);
        }

        return $this->render('create', [
            'model' => $model,
            'parent_category' => $parent_category,
            'sub_category' => $sub_category,

        ]);
    }

    /**
     * Updates an existing UrinFecaCatChildCms model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->c]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing UrinFecaCatChildCms model.
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
     * Finds the UrinFecaCatChildCms model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return UrinFecaCatChildCms the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = UrinFecaCatChildCms::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
