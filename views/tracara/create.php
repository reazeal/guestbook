<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tracara */

$this->title = 'Create Tracara';
$this->params['breadcrumbs'][] = ['label' => 'Tracaras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tracara-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
