<?php

namespace backend\controllers;

use Yii;
use backend\models\Tutorial;
use backend\models\TutorialSearch;
use backend\models\TutorialFile;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * TutorialController implements the CRUD actions for Tutorial model.
 */
class TutorialController extends Controller
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
     * Lists all Tutorial models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TutorialSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tutorial model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $modelFiles = TutorialFile::find()->where(['id_tutorial' => $id])->all();
        return $this->render('view', [
            'model' => $this->findModel($id),
            'modelFiles' => $modelFiles,
        ]);
    }

    /**
     * Creates a new Tutorial model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Tutorial();
        $modelFiles = new TutorialFile();

        if ($model->load(Yii::$app->request->post())) {
            $model->created_date = date('Y-m-d h:m:s');
            $model->updated_date = $model->created_date;
            $model->id_user = Yii::$app->user->id;
            $model->save(false);
            $files = UploadedFile::getInstances($modelFiles, 'files');
            if($files != null){
                foreach ($files as $file) {
                    $modelFiles = new TutorialFile();
                    $file->saveAs(Yii::getAlias('@app/web/files/tutorial/') . $file->baseName . '.' . $file->extension);    
                    $modelFiles->nama_file = $file->baseName . '.' . $file->extension;
                    $modelFiles->size = $file->size;
                    $modelFiles->id_tutorial = $model->id;
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
    }

    /**
     * Updates an existing Tutorial model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Tutorial model.
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
     * Finds the Tutorial model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Tutorial the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Tutorial::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
