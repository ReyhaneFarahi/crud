<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Users_cars;
use app\models\Users;
use app\models\Cars;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use yii\base\View;

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<?php $form = ActiveForm::begin(); ?>
 
  <?php
    echo $form->field($model, 'users_id')->widget(Select2::classname(), [
    'data' => $userDropDown,
    'options' => ['placeholder' => 'select the userName ...'],
    'pluginOptions' => [
    'allowClear' => true,
    ],
    ]);
    ?>
  <?php
    echo $form->field($model, 'cars_id')->widget(Select2::classname(), [
    'data' => $carDropDown,
    'options' => [
      'placeholder' => 'select the carName ...',
      'options' => [
        3 => ['disabled' => true]
      ]
    ],
    'pluginOptions' => [
      // 'ajax'=>[
      //   'url'=> '',
      //   'dataType'=>'json',
      //   'delay'=>250,
      //   'cache'=>true,
      // ],
    'allowClear' => true,
    ],
  ]);

    ?>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $.ajax({url: "load", success: function(result){
      $("#div1").html(result);
    }});
  });
});
</script>
    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']); ?>
<?php ActiveForm::end(); ?>
<div id="div1"><h2>Let jQuery AJAX Change This Text</h2></div>

<button>Get External Content</button>
