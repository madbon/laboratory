<?php

namespace backend\controllers;

use Yii;
use common\models\UrinFecaCatValueCms;
use common\models\UrinFecaCatParentCms;
use common\models\UrinFecaCatSubparentCms;
use common\models\UrinFecaCatChildCms;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * HrisicontactinformationController implements the CRUD actions for HrisIContactInformation model.
 */
class GetCmsController extends Controller
{
    
    /**
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionGetSubCategory($parent_id)
    {

        $qry = UrinFecaCatSubparentCms::find()->where(['urin_feca_cat_parent_cms_c'=>$parent_id])->all();
        $arr = [];
        $arr[] = ['id'=>'','text'=>''];
        foreach ($qry as  $Item) {
            $arr[] = [
                        'id' => $Item->c,
                        'text' => $Item->c." - ".$Item->sub_parent_category_name,
                     ];
        }
        \Yii::$app->response->format = 'json';
        return $arr;

    }

   

}

