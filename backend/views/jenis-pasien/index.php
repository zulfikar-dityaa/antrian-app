<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\Query\JenisPasien */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Master '.'Jenis Pasiens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-pasien-index soft-bg-cool-gray rounded-sm-3 p-5 shadow-lg">

    <p>
        <?= Html::a('Create Jenis Pasien', ['create'], ['class' => 'btn bg-emarald border']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
