<?php

namespace frontend\controllers;

use Yii;
use frontend\models\SchoolPostReg;
use frontend\models\SchoolPostRegSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * SchoolPostRegController implements the CRUD actions for SchoolPostReg model.
 */
class SchoolPostRegController extends Controller
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
     * Lists all SchoolPostReg models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SchoolPostRegSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SchoolPostReg model.
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
     * Creates a new SchoolPostReg model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SchoolPostReg();

        if ($model->load(Yii::$app->request->post())) {
            $model->document = UploadedFile::getInstance($model, 'document');
            if(isset($model->document->name)&&$model->document->name!=""){
                $uploadedDoc = $model->document->name;
                $model->document->saveAs('files/'.$model->contact_email.'_spec_'.$uploadedDoc );
            }else{
                $uplDoc = Yii::$app->request->post('SchoolPostReg');
                $uploadedDoc = $uplDoc['document_original'];
            }

            $model->document = 'files/'.$model->contact_email.'_spec_'.$uploadedDoc ;
            $model->save();

            return $this->redirect(['view', 'id' => $model->school_post_reg_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing SchoolPostReg model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->school_post_reg_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing SchoolPostReg model.
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
     * Finds the SchoolPostReg model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return SchoolPostReg the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SchoolPostReg::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
