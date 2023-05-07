<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Users_cars;
use app\models\Users;
use app\models\Cars;
use yii\helpers\ArrayHelper;
?>

<?php $form = ActiveForm::begin(); ?>
 
 
    <?= Html::activeDropDownList($model, 'users_id',
      ArrayHelper::map(Users::find()->all(), 'id', 'name')) ?>    


    <?= Html::activeDropDownList($model, 'cars_id',
      ArrayHelper::map(Cars::find()->all(), 'id', 'name')) ?>

    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']); ?>
 
<?php ActiveForm::end(); ?>
