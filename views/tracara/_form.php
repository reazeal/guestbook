<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Acara; 
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Tracara */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tracara-form">

    <?php $form = ActiveForm::begin(); ?>

   	<?=
$form->field($model, 'acara')->dropDownList(
        ArrayHelper::map(Acara::find()->all(),'nama','nama'),
        ['prompt'=>'Pilih Acara']
)
?>
	<?= $form->field($model, 'tanggal')->widget(DatePicker::classname(), [
    'options' => ['placeholder' => 'Masukkan tanggal ...'],
    'pluginOptions' => [
        'autoclose'=>true,
		'format' => 'yyyy-mm-dd',
    ]
]); ?>

    <?= $form->field($model, 'keluarga')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempat')->textInput(['maxlength' => true]) ?>

   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
