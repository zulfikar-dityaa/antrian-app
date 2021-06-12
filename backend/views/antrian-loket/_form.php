<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$poli =  \common\models\Poli::find()->all();
$status = [
    [
        'status' => 'Belum',
        'id' => 0
    ],
    [
        'status' => 'Sudah',
        'id' => 1
    ]
];


/* @var $this yii\web\View */
/* @var $model common\models\AntrianLoket */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="antrian-loket-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'urutan')->textInput(['maxlength' => true, 'type' => 'number']) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'tgl_antrian')->textInput(['type' => 'date']) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'pasien_id')->textInput(['type' => 'number']) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'poli_id')->dropDownList([ArrayHelper::map($poli, 'id', 'nama')]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'perkiraan_waktu')->textInput() ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'status')->dropDownList([ArrayHelper::map($status, 'id', 'status')]) ?>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn bg-teal border']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
