<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Users_cars;
use yii\helpers\ArrayHelper;
?>

<?php $form = ActiveForm::begin(); ?>
 
    <?= $form->field($model, 'users_id') ?>
    <?= $form->field($model, 'cars_id') ?>

    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']); ?>
 
<?php ActiveForm::end(); ?>
