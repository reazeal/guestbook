<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SetupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Setups';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="setup-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Setup', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama',
            'alamat:ntext',
            'created_at',
            'updated_at',
            // 'deleted_at',
            // 'created_by',
            // 'updated_by',
            // 'deleted_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
