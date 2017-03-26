<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Setup */

$this->title = 'Update Setup: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Setups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="setup-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
