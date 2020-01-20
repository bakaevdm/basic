<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\WoolSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Wools';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wool-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Wool', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IDwool',
            'TypeWool',
            'ColorWool',
            'IDcosmetics',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
