<?php

namespace frontend\controllers;

use Yii;
use common\models\Hematology;
use common\models\HematologySearch;
use common\models\Patients;
use common\models\BloodType;
use backend\models\MedicalDoctor;
use backend\models\MedicalTechnologist;
use common\models\BloodChemistry;
use common\models\SerumElectrolytes;
use common\models\Miscellaneous;
use common\models\UrinalysisFecalysis;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

/**
 * HematologyController implements the CRUD actions for Hematology model.
 */
class LaboratoryTestController extends Controller
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
     * Lists all Hematology models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new HematologySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Hematology model.
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
     * Creates a new Hematology model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Hematology();
        $fullname = ArrayHelper::map(Patients::find()->all(), 'patient_c', 'fullName');
        $bloodtype = ArrayHelper::map(BloodType::find()->all(), 'blood_type_c', 'blood_type');
        $medtech = ArrayHelper::map(MedicalTechnologist::find()->all(), 'medical_technologist_c', 'medTech');
        $medoc = ArrayHelper::map(MedicalDoctor::find()->all(), 'medical_doctor_c', 'medDoctor');

        

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->hematology_c]);
        }

        return $this->render('create', [
            'model' => $model,
            'fullname' => $fullname,
            'bloodtype' => $bloodtype,
            'medtech' => $medtech,
            'medoc' => $medoc,
        ]);
    }

     /**
     * Creates a new Hematology model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreateLabTest($patient_c)
    {
        $model = new Hematology();
        $model_blood = new BloodChemistry();
        $model_serum = new SerumElectrolytes();
        $model_misc = new Miscellaneous();
        $model_urin = new UrinalysisFecalysis();

        $fullname = ArrayHelper::map(Patients::find()->all(), 'patient_c', 'fullName');
        $bloodtype = ArrayHelper::map(BloodType::find()->all(), 'blood_type_c', 'blood_type');
        $medtech = ArrayHelper::map(MedicalTechnologist::find()->all(), 'medical_technologist_c', 'medTech');
        $medoc = ArrayHelper::map(MedicalDoctor::find()->all(), 'medical_doctor_c', 'medDoctor');

        $qry = Patients::find()->where(['patient_c'=>$patient_c])->One();
        $fname = !empty($qry) ? $qry->first_name : "";
        $mname = !empty($qry) ? $qry->middle_name : "";
        $lname = !empty($qry) ? $qry->last_name : "";

        $patient_fullname = $lname.", ".$fname." ".$mname;

        $model->patient_c = $patient_c;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->hematology_c]);
        }

        return $this->render('create', [
            'model' => $model,
            'fullname' => $fullname,
            'bloodtype' => $bloodtype,
            'medtech' => $medtech,
            'medoc' => $medoc,
            'patient_fullname' => $patient_fullname,
            'model_blood' => $model_blood,
            'model_serum' => $model_serum,
            'model_misc' => $model_misc,
            'model_urin' => $model_urin,
            // 'fullname' => $fullname,

        ]);
    }

    /**
     * Updates an existing Hematology model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->hematology_c]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Hematology model.
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
     * Finds the Hematology model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Hematology the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Hematology::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
