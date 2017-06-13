<?php

namespace backend\controllers;

use Yii;
use backend\models\Announcement;
use backend\models\AnnouncementSearch;
use backend\models\AnnouncementFile;
use yii\web\Controller;
use yii\web\UploadedFile;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\ForbiddenHttpException;

/**
 * AnnouncementController implements the CRUD actions for Announcement model.
 */
class AnnouncementController extends Controller
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
     * Lists all Announcement models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AnnouncementSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Announcement model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $modelFiles = AnnouncementFile::find()->where(['id_announcement' => $id]);
        return $this->render('view', [
            'model' => $this->findModel($id),
            'modelFiles' => $modelFiles,
        ]);
    }

    /**
     * Creates a new Announcement model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(Yii::$app->user->can('pengurus-2')){
            $model = new Announcement();
            $modelFiles = new AnnouncementFile();

            if ($model->load(Yii::$app->request->post())) {
                $model->save();
                $model->created_date = date('Y-m-d h:m:s');
                $model->updated_date = date('Y-m-d h:m:s');
                $model->id_user = Yii::$app->user->id;
                $model->save(false);
                $files = UploadedFile::getInstances($modelFiles, 'files');
                if($files != null){
                    foreach ($files as $file) {
                        $modelFiles = new AnnouncementFile();
                        $file->saveAs(Yii::getAlias('@app/web/files/announcement/') . $file->baseName . '.' . $file->extension);
                        $modelFiles->nama_file = $file->baseName. '.' .$file->extension;
                        $modelFiles->id_announcement = $model->id;
                        $modelFiles->save(false);
                    }
                }
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                return $this->render('create', [
                    'model' => $model,
                    'modelFiles' => $modelFiles,
                ]);
            }
        } else {
             throw new ForbiddenHttpException;
        }
    }

    /**
     * Updates an existing Announcement model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $modelFiles = new AnnouncementFile();

        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            $model->updated_date = date('Y-m-d h:m:s');
            $model->save(false);
            $files = UploadedFile::getInstances($modelFiles, 'files');
                if($files != null){
                    foreach ($files as $file) {
                        $modelFiles = new AnnouncementFile();
                        $file->saveAs(Yii::getAlias('@app/web/files/announcement/') . $file->baseName . '.' . $file->extension);
                        $modelFiles->nama_file = $file->baseName. '.' .$file->extension;
                        $modelFiles->id_announcement = $model->id;
                        $modelFiles->save(false);
                    }
                }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'modelFiles' => $modelFiles,
            ]);
        }
    }

    /**
     * Deletes an existing Announcement model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        if(Yii::$app->user->can('pengurus-2')){
            $this->findModel($id)->delete();

            return $this->redirect(['index']);
        } else {
            throw new ForbiddenHttpException;
        }
    }

    /**
     * Finds the Announcement model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Announcement the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Announcement::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
