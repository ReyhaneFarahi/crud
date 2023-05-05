<?php

namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\Users_cars;
use app\models\Users_carsSearch;
use yii\data\ActiveDataProvider ;
use yii\web\NotFoundHttpException;
/**
 * manual CRUD
 **/
class Users_carsController extends Controller
{  
    public function actionDataProvider(){
        $query = Users_cars::find();
        $provider = new ActiveDataProvider([
           'query' => $query,
        ]);
        // returns an array of users_cars objects
        $users_cars = $provider->getModels();
        var_dump($users_cars);
     }

    /**
     * Create
     */
    public function actionCreate()
    {
        $model = new Users_cars();
 
        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            return $this->redirect(['list']);
        } else {       
            return $this->render('create', ['model' => $model]);
        }
    }
    /**
     * Read
     */
    public function actionList()
    {    
        $searchModel = new Users_carsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('list', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel
        ]);
    }
    /**
     * Update
     * @param integer $id
     */
    public function actionUpdate($id)
    {
        $model = Users_cars::find()->where(['id' => $id])->one();
        
        // $id not found in database
        if($model === null)
            throw new NotFoundHttpException('The requested page does not exist.');
        // update record
        if($model->load(Yii::$app->request->post()) && $model->save()){
            return $this->redirect(['list']);
        }
        return $this->render('create', ['model' => $model]);
    }   
    /* Delete
    * @param integer $id
    */
    public function actionDelete($id)
    {
        $model =Users_cars::findOne($id);
        
       // $id not found in database
       if($model === null)
           throw new NotFoundHttpException('The requested page does not exist.');
            
       // delete record
       $model->delete();
        
       return $this->redirect(['list']);
    }
    

}
