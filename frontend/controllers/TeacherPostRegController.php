<?php

namespace frontend\controllers;

use Yii;
use frontend\models\TeacherPostReg;
use frontend\models\TeacherPostRegSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * TeacherPostRegController implements the CRUD actions for TeacherPostReg model.
 */
class TeacherPostRegController extends Controller
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
     * Lists all TeacherPostReg models.
     * @return mixed
     */
    public function actionIndex()
    {
        $model = new TeacherPostReg();
        $searchModel = new TeacherPostRegSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'model' => $model,
        ]);
    }

    /**
     * Displays a single TeacherPostReg model.
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
     * Creates a new TeacherPostReg model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TeacherPostReg();

        if ($model->load(Yii::$app->request->post()) ) {
            $model->file = UploadedFile::getInstance($model,'file');
            $model->file->saveAs('uploaded_cv/'.$model->email.'_cv'.$model->file->extension);

            $model->cv = 'uploaded_cv/'.$model->email.'_cv'.$model->file->extension;

            $model->save(false);
            $to = $model->email;
            $from = 'rob4962@gmail.com';
            $subject = "Just Registered";
            $body = "This is a test";
            $attachment = '';
            $this->sendEmail($to,$from,$subject,$body,$attachment,$model);

            return $this->redirect(['view', 'id' => $model->teacher_post_reg_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing TeacherPostReg model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->teacher_post_reg_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing TeacherPostReg model.
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
     * Finds the TeacherPostReg model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TeacherPostReg the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TeacherPostReg::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * @param $to
     * @param $from
     * @param $subject
     * @param $body
     * @param $attachment
     */
    private static function sendEmail($to, $from, $subject, $body, $attachment,$model){
        $value = Yii::$app->mailer->compose()
            ->setFrom($from)
            ->setTo($to)
            ->setSubject($subject)
            ->send()
        ;


        return true;
    }
}
